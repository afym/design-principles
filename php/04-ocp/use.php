<?php

require_once './ShapeDrawer.php';

$shape = new Circle();

$drawer = new ShapeDrawer();
echo $drawer->drawShape($shape);
