<?php
namespace CHDuBar\PruebaTpagaEcommerce\Domain\Model;

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
 * Es una compra que realiza un usuario sobre una cantidad determinada de un
 * producto
 */
class Sale extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Representa un valor que identifica esta compra
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identifier = '';

    /**
     * Es la cantidad de productos que se compran
     *
     * @var int
     * @validate NotEmpty
     */
    protected $amount = 0;

    /**
     * Es el enlace para pagar el producto a través de la Billetera Tpaga
     *
     * @var string
     */
    protected $linkPay = '';

    /**
     * Es el estado de la compra
     *
     * @var int
     * @validate NotEmpty
     */
    protected $status = 0;

    /**
     * Es la caja que genera la compra
     *
     * @var int
     * @validate NotEmpty
     */
    protected $checkout = 0;

    /**
     * Corresponde a la dirección IP del comprador
     *
     * @var string
     * @validate NotEmpty
     */
    protected $userIpAddress = '';

    /**
     * Es el comprador del producto
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer
     */
    protected $buyer = null;

    /**
     * Es el producto adquirido
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product
     */
    protected $purchasedProduct = null;

    /**
     * Es el token de idempotencia único para esta transacción
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey
     */
    protected $idempotencyKey = null;

    /**
     * @param $saleInit
     * @param $customer
     * @param $product
     * @param $idempotencyKey
     */
    function __construct($saleInit, $customer, $product, $idempotencyKey)
    {
        $this->setAmount($saleInit['amount']);
        $checkout = 'caja_' . random_int(1, 5);
        $this->setCheckout($checkout);
        $this->setUserIpAddress(\TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('REMOTE_ADDR'));
        $this->setBuyer($customer);
        $this->setPurchasedProduct($product);
        $this->setIdempotencyKey($idempotencyKey);
    }

    /**
     * Returns the purchasedProduct
     *
     * @return \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product $purchasedProduct
     */
    public function getPurchasedProduct()
    {
        return $this->purchasedProduct;
    }

    /**
     * Sets the purchasedProduct
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product $purchasedProduct
     * @return void
     */
    public function setPurchasedProduct(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product $purchasedProduct)
    {
        $this->purchasedProduct = $purchasedProduct;
    }

    /**
     * Returns the amount
     *
     * @return int $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the amount
     *
     * @param int $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns the linkPay
     *
     * @return string $linkPay
     */
    public function getLinkPay()
    {
        return $this->linkPay;
    }

    /**
     * Sets the linkPay
     *
     * @param string $linkPay
     * @return void
     */
    public function setLinkPay($linkPay)
    {
        $this->linkPay = $linkPay;
    }

    /**
     * Returns the status
     *
     * @return int $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param int $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Returns the identifier
     *
     * @return string $identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     *
     * @param string $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the checkout
     *
     * @return int $checkout
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * Sets the checkout
     *
     * @param int $checkout
     * @return void
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Returns the userIpAddress
     *
     * @return string $userIpAddress
     */
    public function getUserIpAddress()
    {
        return $this->userIpAddress;
    }

    /**
     * Sets the userIpAddress
     *
     * @param string $userIpAddress
     * @return void
     */
    public function setUserIpAddress($userIpAddress)
    {
        $this->userIpAddress = $userIpAddress;
    }

    /**
     * Returns the buyer
     *
     * @return \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Sets the buyer
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer $buyer
     * @return void
     */
    public function setBuyer(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer $buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * Returns the idempotencyKey
     *
     * @return \CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey $idempotencyKey
     */
    public function getIdempotencyKey()
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets the idempotencyKey
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey $idempotencyKey
     * @return void
     */
    public function setIdempotencyKey(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey $idempotencyKey)
    {
        $this->idempotencyKey = $idempotencyKey;
    }
}
