<?php

class Area
{

    public function getSquareArea($side)
    {
        return $side * $side;
    }

    public function getParallelogram($base, $height)
    {
        return $base * $height;
    }

    public function getRectangle($width, $length)
    {
        return $width * $length;
    }

}
