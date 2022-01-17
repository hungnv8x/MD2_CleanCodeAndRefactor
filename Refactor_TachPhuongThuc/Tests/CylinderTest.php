<?php

use PHPUnit\Framework\TestCase;
include_once "../App/Cylinder.php";
class CylinderTest extends TestCase
{
    public function testGetVolume()
    {
        $cylinder = new Cylinder();
        $radius = 1;
        $height = 2;
        $result = $cylinder->getVolume($radius,$height);
        $expect = 18.84955592153876;
        $this->assertEquals($expect,$result);
    }
    public function testGetVolume0()
    {
        $cylinder = new Cylinder();
        $radius = 0;
        $height = 0;
        $result = $cylinder->getVolume($radius,$height);
        $expect = 0;
        $this->assertEquals($expect,$result);
    }
}