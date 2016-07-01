<?php

require_once '/MathOperation.php';
require_once './AreaCalculator.php';
require_once './Shape.php';
require_once './Parallelogram.php';
require_once './Rectangle.php';
require_once './Square.php';

$square = new Square(4);
$area = new AreaCalculator($square);
$squareArea = $area->getArea();

echo "Ap : {$squareArea} u2";
