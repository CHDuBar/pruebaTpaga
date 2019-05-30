<?php
namespace CHDuBar\PruebaTpagaEcommerce\Controller;

use CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer;
use CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale;
use CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey;
use CHDuBar\PruebaTpagaEcommerce\Utility\TpagaConnectionUtility;
/***
 *
 * This file is part of the "Ecommerce Videojuegos Tpaga" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 César Hansy Dueñas Barragán <cesart234@gmail.com>
 *
 ***/

/**
 * SaleController
 */
class SaleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * saleRepository
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Repository\SaleRepository
     * @inject
     */
    protected $saleRepository = null;

    /**
     * productRepository
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Repository\ProductRepository
     * @inject
     */
    protected $productRepository = null;

    /**
     * customerRepository
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Repository\CustomerRepository
     * @inject
     */
    protected $customerRepository = null;

    /**
     * frontendUserGroupRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository
     * @inject
     */
    protected $frontendUserGroupRepository = null;

    /**
     * idempotencyKeyRepository
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Repository\IdempotencyKeyRepository
     * @inject
     */
    protected $idempotencyKeyRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $sales = $this->saleRepository->findAll();
        $this->view->assign('sales', $sales);
    }

    /**
     * action show
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale $sale
     * @return void
     */
    public function showAction(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale $sale)
    {
        $this->view->assign('sale', $sale);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        $arguments = $this->request->getArguments();
        $product = $this->productRepository->findByUid($arguments['product']);
        if (!is_null($product)) {
            $this->view->assign('product', $product);
        }
        $amount = $arguments['amount'] > 0 ? $arguments['amount'] : 1;
        $this->view->assign('amount', $amount);
        $this->view->assign('totalPay', $amount * $product->getPrice());
    }

    /**
     * action create
     *
     * @return void
     */
    public function createAction()
    {
        $arguments = $this->request->getArguments();
        //$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        //$this->saleRepository->add($newSale);
        //$this->redirect('list');
        #Creation of customer
        $customer_exist = $this->customerRepository->findByUsername($arguments['customer']['email'])->getFirst();
        if ($customer_exist) {
            $customer = $customer_exist;
        } else {
            $customer = $this->createCustomer($arguments['customer']);
        }
        #Get product
        $product = $this->productRepository->findByUid($arguments['product']);
        #Cration of sale
        $isTokenExist = true;
        //Premisa existe token
        do {    $idempotencyToken = new IdempotencyKey();
            $token_repeat = $this->idempotencyKeyRepository->findByToken($idempotencyToken->getToken())->getFirst();
            if (is_null($token_repeat)) {
                $isTokenExist = false;
            }
        } while ($isTokenExist);
        $sale = new Sale($arguments, $customer, $product, $idempotencyToken);
        /*$persistenceManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager');
          $persistenceManager->persistAll();*/

        $this->saleRepository->add($sale);
        #Creation of Billing
        $orderId = random_int(100000, 999999);
        /** Tpaga integration */
        #Authentication
        $user = 'miniapp-gato2';
        $password = 'miniappma-123';
        $code_authorization = base64_encode($user . ':' . $password);
        // $autehntication_response = TpagaConnectionUtility::authentication($code_authorization);
        $autehntication_response = TpagaConnectionUtility::authentication($user, $password);
        #Create payment request
        $json_array = [
            'cost' => $arguments['totalPay'],
            'checkout' => $checkout,
            'idempotency_token' => $idempotencyToken->getToken(),
            'order_id' => $orderId,
            'purchase_description' => 'Compra en la ' . $checkout . ' de ' . $arguments['amount'] . ' juego(s) del titulo ' . $product->getName() . ' por un valor total de ' . $arguments['totalPay']
        ];
    }

    /**
     * @param $customer_array
     */
    public function createCustomer(&$customer_array)
    {
        if (\TYPO3\CMS\Saltedpasswords\Utility\SaltedPasswordsUtility::isUsageEnabled('FE')) {
            $objSalt = \TYPO3\CMS\Saltedpasswords\Salt\SaltFactory::getSaltingInstance(NULL);
            if (is_object($objSalt)) {
                $saltedPassword = $objSalt->getHashedPassword($customer_array['password']);
            }
        }
        $customer_array['group'] = $this->frontendUserGroupRepository->findByUid(1);
        $customer_array['password'] = $saltedPassword;
        $customer = new Customer($customer_array);
        $this->customerRepository->add($customer);
        return $customer;
    }

    /**
     * action revert
     *
     * @return void
     */
    public function revertAction()
    {

    }

    /**
     * action registerPurchase
     *
     * @return void
     */
    public function registerPurchaseAction()
    {

    }

    /**
     * action
     *
     * @return void
     */
    public function Action()
    {

    }
}
