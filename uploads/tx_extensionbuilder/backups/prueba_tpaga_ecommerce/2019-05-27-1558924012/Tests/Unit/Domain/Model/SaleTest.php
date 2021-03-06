<?php
namespace CHDuBar\PruebaTpagaEcommerce\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author César Hansy Dueñas Barragán <cesart234@gmail.com>
 */
class SaleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBuyerReturnsInitialValueForCostumer()
    {
        self::assertEquals(
            null,
            $this->subject->getBuyer()
        );
    }

    /**
     * @test
     */
    public function setBuyerForCostumerSetsBuyer()
    {
        $buyerFixture = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Costumer();
        $this->subject->setBuyer($buyerFixture);

        self::assertAttributeEquals(
            $buyerFixture,
            'buyer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPurchasedProductReturnsInitialValueForProduct()
    {
        self::assertEquals(
            null,
            $this->subject->getPurchasedProduct()
        );
    }

    /**
     * @test
     */
    public function setPurchasedProductForProductSetsPurchasedProduct()
    {
        $purchasedProductFixture = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product();
        $this->subject->setPurchasedProduct($purchasedProductFixture);

        self::assertAttributeEquals(
            $purchasedProductFixture,
            'purchasedProduct',
            $this->subject
        );
    }
}
