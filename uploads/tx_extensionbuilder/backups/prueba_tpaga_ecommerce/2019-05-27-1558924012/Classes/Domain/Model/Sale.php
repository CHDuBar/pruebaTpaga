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
     * Es el comprador del producto
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Costumer
     */
    protected $buyer = null;

    /**
     * Es el producto adquirido
     *
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product
     */
    protected $purchasedProduct = null;

    /**
     * Returns the buyer
     *
     * @return \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Costumer $buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Sets the buyer
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Costumer $buyer
     * @return void
     */
    public function setBuyer(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\Costumer $buyer)
    {
        $this->buyer = $buyer;
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
}
