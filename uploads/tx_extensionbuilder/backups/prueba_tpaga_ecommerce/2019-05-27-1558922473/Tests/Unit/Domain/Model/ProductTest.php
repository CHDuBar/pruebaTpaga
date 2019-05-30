<?php
namespace CHDuBar\PruebaTpagaEcommerce\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author César Hansy Dueñas Barragán <cesart234@gmail.com>
 */
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Product();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCoverReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getCover()
        );
    }

    /**
     * @test
     */
    public function setCoverForFileReferenceSetsCover()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setCover($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'cover',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCapturesReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCaptures()
        );
    }

    /**
     * @test
     */
    public function setCapturesForFileReferenceSetsCaptures()
    {
        $capture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneCaptures = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCaptures->attach($capture);
        $this->subject->setCaptures($objectStorageHoldingExactlyOneCaptures);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCaptures,
            'captures',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCaptureToObjectStorageHoldingCaptures()
    {
        $capture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $capturesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $capturesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($capture));
        $this->inject($this->subject, 'captures', $capturesObjectStorageMock);

        $this->subject->addCapture($capture);
    }

    /**
     * @test
     */
    public function removeCaptureFromObjectStorageHoldingCaptures()
    {
        $capture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $capturesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $capturesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($capture));
        $this->inject($this->subject, 'captures', $capturesObjectStorageMock);

        $this->subject->removeCapture($capture);
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStockReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStock()
        );
    }

    /**
     * @test
     */
    public function setStockForIntSetsStock()
    {
        $this->subject->setStock(12);

        self::assertAttributeEquals(
            12,
            'stock',
            $this->subject
        );
    }
}
