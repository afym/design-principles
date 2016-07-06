<?php

require_once './StatisticOperarion.php';

$statistic = new StatisticOperarion();

echo "Average : {$statistic->average(1, 2, 3, 5)}";
