<?php
include_once "Cylinder.php";
$cylinder = new Cylinder();
echo $cylinder->getVolume(0,0);
echo "<br>";
echo $cylinder->getVolume(1,2);
