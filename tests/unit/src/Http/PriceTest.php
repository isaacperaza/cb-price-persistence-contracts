<?php

namespace Cb\Tests\Unit\PricePersistenceContracts\Models;

use Cb\PricePersistenceContracts\Models\Price;
use DateTime;
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    /** @var Price */
    private $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Price();
    }
    
    protected function tearDown()
    {
        parent::tearDown();
        unset($this->sut);
    }
    
    public function testGetId()
    {
        $id = $this->sut->getId();
        $this->assertNull($id);
    }

    public function testSetId()
    {
        $id = 1;
        $this->sut->setId($id);
        $this->assertIsInt($this->sut->getId());
    }

    public function testGetStartDate()
    {
        $startDate = $this->sut->getStartDate();
        $this->assertNull($startDate);
    }

    public function testSetStartDate()
    {
        $startDate = new DateTime();
        $this->sut->setStartDate($startDate);
        $this->assertInstanceOf(DateTime::class, $this->sut->getStartDate());
    }

    public function testGetEndtDate()
    {
        $endDate = $this->sut->getEndDate();
        $this->assertNull($endDate);
    }

    public function testSetEndDate()
    {
        $endDate = new DateTime();
        $this->sut->setEndDate($endDate);
        $this->assertInstanceOf(DateTime::class, $this->sut->getEndDate());
    }

    public function testGetPrice()
    {
        $price = $this->sut->getPrice();
        $this->assertNull($price);
    }

    public function testSetPrice()
    {
        $price = 15.00;
        $this->sut->setPrice($price);
        $this->assertEquals($price, $this->sut->getPrice());
    }
}
