<?php

require_once './Shape.php';
require_once './Circle.php';
require_once './Rectangle.php';

class ShapeDrawer
{

    public function drawShape(Shape $shape)
    {
        if ($shape->getType() == 'REC') {
            return $this->drawRectangle();
        } else if ($shape->getType() == 'CIR') {
            return $this->drawCircle();
        }

        return "No shape";
    }

    private function drawCircle()
    {
        return "Some circle ...";
    }

    private function drawRectangle()
    {
        return "Some rectangle ...";
    }

}
