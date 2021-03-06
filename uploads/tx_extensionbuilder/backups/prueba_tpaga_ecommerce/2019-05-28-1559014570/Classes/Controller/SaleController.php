<?php
namespace CHDuBar\PruebaTpagaEcommerce\Controller;

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
        $amount = $arguments['product'] > 0 ? $arguments['product'] : 1;
        $this->view->assign('product', $amount);
    }

    /**
     * action create
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale $newSale
     * @return void
     */
    public function createAction(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale $newSale)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->saleRepository->add($newSale);
        $this->redirect('list');
    }

    /**
     * action revert
     *
     * @return void
     */
    public function revertAction()
    {

    }
}
