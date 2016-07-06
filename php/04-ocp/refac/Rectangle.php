<?php

class Rectangle extends BaseShape
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
        return $this->width * $this->length;
    }

}
