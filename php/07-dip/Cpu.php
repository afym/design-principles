<?php

class Cpu
{

    private $clock;
    private $unit;
    private $cores;

    public function __construct($clock, $unit, $cores)
    {
        $this->clock = $clock;
        $this->unit = $unit;
        $this->cores = $cores;
    }

    public function getClock()
    {
        return $this->clock;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getCores()
    {
        return $this->cores;
    }

    public function setClock($clock)
    {
        $this->clock = $clock;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    public function setCores($cores)
    {
        $this->cores = $cores;
    }

}
