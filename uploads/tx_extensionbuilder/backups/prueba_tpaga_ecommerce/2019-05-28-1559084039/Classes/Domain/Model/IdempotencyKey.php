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
 * Hace referencia a las llaves de idempotencia únicas
 */
class IdempotencyKey extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Es el token único
     *
     * @var string
     * @validate NotEmpty
     */
    protected $token = '';

    /**
     * Returns the token
     *
     * @return string $token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets the token
     *
     * @param string $token
     * @return void
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}
