<?php

class Parallelogram extends ShapeAbstract
{

    private $base;
    private $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->multiply($this->base, $this->height);
    }

}
