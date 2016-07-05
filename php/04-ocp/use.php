<?php

require_once './Shape.php';
require_once './Circle.php';
require_once './Rectangle.php';
require_once './ShapeDrawer.php';

$shape = new Circle();

$drawer = new ShapeDrawer();
echo $drawer->drawShape($shape);
