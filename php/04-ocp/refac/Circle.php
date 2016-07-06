<?php

class Circle extends BaseShape
{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius;
    }

}
