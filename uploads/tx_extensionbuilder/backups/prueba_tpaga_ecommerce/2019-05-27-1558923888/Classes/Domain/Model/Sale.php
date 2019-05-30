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
}
