<?php

include 'Shape.php';
include 'Circle.php';
include 'Rectangle.php';



$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo $rect -> calcArea();
?>
