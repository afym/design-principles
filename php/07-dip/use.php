<?php

require_once './Computer.php';
require_once './Cpu.php';
require_once './Disk.php';
require_once './Memory.php';

$computer = new Computer();
$computer->setCpu(4, 3.5, 'Mhz');
$computer->setMemory(1024);

echo $computer->resume();
