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
    public function getIdentifierReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentifier()
        );
    }

    /**
     * @test
     */
    public function setIdentifierForStringSetsIdentifier()
    {
        $this->subject->setIdentifier('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identifier',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAmountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAmount()
        );
    }

    /**
     * @test
     */
    public function setAmountForIntSetsAmount()
    {
        $this->subject->setAmount(12);

        self::assertAttributeEquals(
            12,
            'amount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkPayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLinkPay()
        );
    }

    /**
     * @test
     */
    public function setLinkPayForStringSetsLinkPay()
    {
        $this->subject->setLinkPay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'linkPay',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForIntSetsStatus()
    {
        $this->subject->setStatus(12);

        self::assertAttributeEquals(
            12,
            'status',
            $this->subject
        );
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
