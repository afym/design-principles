<?php

class Square extends Shape
{

    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getArea()
    {
        return $this->multiply($this->side, $this->side);
    }

}
