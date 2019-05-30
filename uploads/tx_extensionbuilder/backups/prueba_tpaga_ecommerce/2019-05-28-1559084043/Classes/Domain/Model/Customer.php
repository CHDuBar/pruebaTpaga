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
 * Es quien realiza una compra
 */
class Customer extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{
    /**
     * Es el tipo de documento de identificación de un comprador
     *
     * @var int
     * @validate NotEmpty
     */
    protected $documentType = 0;

    /**
     * Es el número de identificación de un comprador
     *
     * @var string
     * @validate NotEmpty
     */
    protected $numberID = '';

    /**
     * Returns the documentType
     *
     * @return int $documentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets the documentType
     *
     * @param int $documentType
     * @return void
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }

    /**
     * Returns the numberID
     *
     * @return string $numberID
     */
    public function getNumberID()
    {
        return $this->numberID;
    }

    /**
     * Sets the numberID
     *
     * @param string $numberID
     * @return void
     */
    public function setNumberID($numberID)
    {
        $this->numberID = $numberID;
    }
}
