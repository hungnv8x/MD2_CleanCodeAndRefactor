<?php

use PHPUnit\Framework\TestCase;
include_once "../App/Calculator.php";
class FunctionTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $a =1;
        $b =1;
        $resul = $calculator->calculate($a,$b,"+");
        $expected = 2;
        $this->assertEquals($expected,$resul);
    }

    public function testDivision()
    {
        $calculator = new Calculator();
        $a =1;
        $b =0;
        $resul = $calculator->calculate($a,$b,"/");
        $expected = "Can not divide by 0";
        $this->assertEquals($expected,$resul);
    }
}