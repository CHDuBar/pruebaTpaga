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
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
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
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }

    /**
     * action show
     *
     * @param \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product $product
     * @return void
     */
    public function showAction(\CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }

    /**
     * action addCart
     *
     * @return void
     */
    public function addCartAction()
    {

    }
}
