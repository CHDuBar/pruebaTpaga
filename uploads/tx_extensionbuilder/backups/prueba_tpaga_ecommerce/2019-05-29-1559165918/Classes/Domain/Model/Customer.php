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
     * @param $newCustomer
     */
    function __construct($newCustomer)
    {
        $this->initStorageObjects();
        $this->setEmail($newCustomer['email']);
        $this->setUsername($newCustomer['email']);
        $this->setPassword($newCustomer['password']);
        $this->setDocumentType($newCustomer['documentType']);
        $this->setNumberID($newCustomer['numberID']);
        $this->addUsergroup($newCustomer['group']);
        $this->setPid($newCustomer['group']->getPid());
        $this->setFirstName($newCustomer['name']);
        $this->setLastName($newCustomer['lastname']);
        $this->setName($newCustomer['name'] . ' ' . $newCustomer['lastname']);
        $this->setAddress($newCustomer['address']);
        $this->setTelephone($newCustomer['telephoneNumber']);
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

    }

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
