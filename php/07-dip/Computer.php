<?php

class Computer
{

    private $cpu;
    private $disk;
    private $memory;

    public function __construct()
    {
        $this->disk = new Disk('solid', 500, 'GB');
    }

    public function setCpu($cores, $clock, $unit)
    {
        $this->cpu = new Cpu($clock, $unit, $cores);
    }

    public function setMemory($capacity)
    {
        $this->memory = new Memory($capacity, 'MB');
    }

    public function resume()
    {
        return "PC : CPU {$this->cpu->getCores()} cores {$this->cpu->getClock()} {$this->cpu->getUnit()},  Memory : {$this->memory->getCapacity()} MB";
    }

}
