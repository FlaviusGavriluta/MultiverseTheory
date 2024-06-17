<?php declare(strict_types = 1);

use Physics\StringTheory;
use PHPUnit\Framework\TestCase;

final class TestStringTheory extends TestCase
{
    private $stringTheory;

    protected function setUp() : void
    {
        $this->stringTheory = new StringTheory();
    }

    protected function tearDown() : void
    {
        $this->stringTheory = null;
    }

    public function testNewStringTheoryInstance_Create() : void
    {
        $this->assertInstanceOf(StringTheory::class, $this->stringTheory);
    }

    public function testInMultiverseMethodExists() : void
    {
        $this->assertTrue(method_exists($this->stringTheory, 'inMultiverse'));
    }

    public function testIfMultiverseEmpty_StrictSearchReturnsFalse() : void
    {
        $this->assertFalse($this->stringTheory->inMultiverse(1, array(), true));
    }

    public function testIfXInOneDimensionalArray_StrictSearchReturnsTrue() : void
    {
        $this->assertTrue($this->stringTheory->inMultiverse(1, array(1, 2, 3), true));
    }

    public function testIfXNotInOneDimensionalArray_StrictSearchReturnsFalse() : void
    {
        $this->assertFalse($this->stringTheory->inMultiverse(1, array(2, 3, 4), true));
    }

    public function testIfXInOneDimensionalArray_ButHasDifferentType_StrictSearchReturnsFalse() : void
    {
        $this->assertFalse($this->stringTheory->inMultiverse('1', array(1, 2, 3), true));
    }

    public function testIfXInMultiDimensionalArray_StrictSearchReturnsTrue() : void
    {
        $multiverse = array(
            array(1, 2, 3),
            array(4, 5, 6)
        );
        $this->assertTrue($this->stringTheory->inMultiverse(1, $multiverse, true));
    }

    public function testIfXNotInMultiDimensionalArray_StrictSearchReturnsFalse() : void
    {
        $multiverse = array(
            array(2, 3, 4),
            array(5, 6, 7)
        );
        $this->assertFalse($this->stringTheory->inMultiverse(1, $multiverse, true));
    }

    public function testIfXInMultiDimensionalArray_ButHasDifferentType_StrictSearchReturnsFalse() : void
    {
        $multiverse = array(
            array(1, 2, 3),
            array(4, 5, 6)
        );
        $this->assertFalse($this->stringTheory->inMultiverse('1', $multiverse, true));
    }

    public function testIfMultiverseEmpty_NonStrictSearchReturnsFalse() : void
    {
        $this->assertFalse($this->stringTheory->inMultiverse(1, array(), false));
    }

    public function testIfXInOneDimensionalArray_NonStrictSearchReturnsTrue() : void
    {
        $this->assertTrue($this->stringTheory->inMultiverse(1, array(1, 2, 3), false));
    }

    public function testIfXNotInOneDimensionalArray_NonStrictSearchReturnsFalse() : void
    {
        $this->assertFalse($this->stringTheory->inMultiverse(1, array(2, 3, 4), false));
    }

    public function testIfXInOneDimensionalArray_ButHasDifferentType_NonStrictSearchReturnsTrue() : void
    {
        $this->assertTrue($this->stringTheory->inMultiverse('1', array(1, 2, 3), false));
    }

    public function testIfXInMultiDimensionalArray_NonStrictSearchReturnsTrue() : void
    {
        $multiverse = array(
            array(1, 2, 3),
            array(4, 5, 6)
        );
        $this->assertTrue($this->stringTheory->inMultiverse(1, $multiverse, false));
    }

    public function testIfXNotInMultiDimensionalArray_NonStrictSearchReturnsFalse() : void
    {
        $multiverse = array(
            array(2, 3, 4),
            array(5, 6, 7)
        );
        $this->assertFalse($this->stringTheory->inMultiverse(1, $multiverse, false));
    }

    public function testIfXInMultiDimensionalArray_ButHasDifferentType_NonStrictSearchReturnsTrue() : void
    {
        $multiverse = array(
            array(1, 2, 3),
            array(4, 5, 6)
        );
        $this->assertTrue($this->stringTheory->inMultiverse('1', $multiverse, false));
    }

    public function testIfNonStrictSearchIsDefault() : void
    {
        $this->assertTrue($this->stringTheory->inMultiverse('1', array(1, 2, 3)));
    }
}
