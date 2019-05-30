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
 * Es un videojuego en venta
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Es el nombre del videojuego
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Es la imagen de la portada del juego
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $cover = null;

    /**
     * Corresponde a imagenes adicionales del juego que puede tener o no el producto
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $captures = null;

    /**
     * Es el precio que tiene el videojuego
     *
     * @var float
     * @validate NotEmpty
     */
    protected $price = 0.0;

    /**
     * Es la descripción del videojuego
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Es la cantidad de elementos del videojuego que se encuentran en existencia en
     * inventario
     *
     * @var int
     * @validate NotEmpty
     */
    protected $stock = 0;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->captures = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the cover
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $cover
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Sets the cover
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $cover
     * @return void
     */
    public function setCover(\TYPO3\CMS\Extbase\Domain\Model\FileReference $cover)
    {
        $this->cover = $cover;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $capture
     * @return void
     */
    public function addCapture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $capture)
    {
        $this->captures->attach($capture);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $captureToRemove The FileReference to be removed
     * @return void
     */
    public function removeCapture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $captureToRemove)
    {
        $this->captures->detach($captureToRemove);
    }

    /**
     * Returns the captures
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $captures
     */
    public function getCaptures()
    {
        return $this->captures;
    }

    /**
     * Sets the captures
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $captures
     * @return void
     */
    public function setCaptures(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $captures)
    {
        $this->captures = $captures;
    }

    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the stock
     *
     * @return int $stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets the stock
     *
     * @param int $stock
     * @return void
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }
}
