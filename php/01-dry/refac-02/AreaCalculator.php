<?php

class AreaCalculator
{

    private $shape;

    public function __construct(ShapeAbstract $shape)
    {
        $this->shape = $shape;
    }

    public function getArea()
    {
        return $this->shape->getArea();
    }

}
