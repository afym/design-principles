<?php

class Disk
{

    private $type;
    private $capacity;
    private $unit;

    public function __construct($type, $capacity, $unit)
    {
        $this->type = $type;
        $this->capacity = $capacity;
        $this->unit = $unit;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setType($type)
    {
        $this->type = $type;
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
