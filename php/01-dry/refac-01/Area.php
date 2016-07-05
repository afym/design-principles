<?php

class Area
{

    private $operations;

    public function __construct(MathOperation $operations)
    {
        $this->operations = $operations;
    }

    public function getSquareArea($side)
    {
        return $this->operations->multiply($side, $side);
    }

    public function getParallelogram($base, $height)
    {
        return $this->operations->multiply($base, $height);
    }

    public function getRectangle($width, $length)
    {
        return $this->operations->multiply($width, $length);
    }

}
