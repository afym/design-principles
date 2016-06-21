<?php

class Memory
{

    private $capacity;
    private $unit;

    public function __construct($capacity, $unit)
    {
        $this->capacity = $capacity;
        $this->unit = $unit;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

}
