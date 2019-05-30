<?php
namespace CHDuBar\PruebaTpagaEcommerce\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author César Hansy Dueñas Barragán <cesart234@gmail.com>
 */
class SaleControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHDuBar\PruebaTpagaEcommerce\Controller\SaleController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\CHDuBar\PruebaTpagaEcommerce\Controller\SaleController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSalesFromRepositoryAndAssignsThemToView()
    {

        $allSales = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $saleRepository = $this->getMockBuilder(\CHDuBar\PruebaTpagaEcommerce\Domain\Repository\SaleRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $saleRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSales));
        $this->inject($this->subject, 'saleRepository', $saleRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sales', $allSales);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSaleToView()
    {
        $sale = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sale', $sale);

        $this->subject->showAction($sale);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSaleToSaleRepository()
    {
        $sale = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\Sale();

        $saleRepository = $this->getMockBuilder(\CHDuBar\PruebaTpagaEcommerce\Domain\Repository\SaleRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $saleRepository->expects(self::once())->method('add')->with($sale);
        $this->inject($this->subject, 'saleRepository', $saleRepository);

        $this->subject->createAction($sale);
    }
}
