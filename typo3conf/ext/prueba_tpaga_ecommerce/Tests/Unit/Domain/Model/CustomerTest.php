<?php
namespace CHDuBar\PruebaTpagaEcommerce\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author César Hansy Dueñas Barragán <cesart234@gmail.com>
 */
class CustomerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Customer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDocumentTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDocumentType()
        );
    }

    /**
     * @test
     */
    public function setDocumentTypeForIntSetsDocumentType()
    {
        $this->subject->setDocumentType(12);

        self::assertAttributeEquals(
            12,
            'documentType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberIDReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberID()
        );
    }

    /**
     * @test
     */
    public function setNumberIDForStringSetsNumberID()
    {
        $this->subject->setNumberID('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberID',
            $this->subject
        );
    }
}
