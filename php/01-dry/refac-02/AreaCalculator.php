<?php

class AreaCalculator
{

    private $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function getArea()
    {
        return $this->shape->getArea();
    }

}
