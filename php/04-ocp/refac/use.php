<?php

require_once './BaseShape.php';
require_once './Circle.php';
require_once './Rectangle.php';
require_once './ShapeDrawer.php';

$shape = new Circle(5.5);

$drawer = new ShapeDrawer();
echo "{$drawer->drawShape($shape)} u2";
