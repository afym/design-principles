<?php

require_once './Area.php';
require_once '/MathOperation.php';

$operations = new MathOperation();
$area = new Area($operations);
$parallelogramArea = $area->getParallelogram(5, 2);

echo "Ap : {$parallelogramArea} u2";
