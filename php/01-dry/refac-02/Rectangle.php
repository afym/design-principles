<?php

class Rectangle extends Shape
{
    private $width;
    private $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getArea()
    {
         return $this->multiply($this->width, $this->length);
    }
}
