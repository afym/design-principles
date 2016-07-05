<?php

require_once './Area.php';

$area = new Area();
$parallelogramArea = $area->getParallelogram(5, 2);

echo "Ap : {$parallelogramArea} u2";
