<?php
namespace CHDuBar\PruebaTpagaEcommerce\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author César Hansy Dueñas Barragán <cesart234@gmail.com>
 */
class IdempotencyKeyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CHDuBar\PruebaTpagaEcommerce\Domain\Model\IdempotencyKey();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTokenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getToken()
        );
    }

    /**
     * @test
     */
    public function setTokenForStringSetsToken()
    {
        $this->subject->setToken('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'token',
            $this->subject
        );
    }
}
