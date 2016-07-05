<?php

class StatisticOperarion
{

    public function average(... $values)
    {
        $total = $this->getTotalValues($values);

        $this->validateTotal($total);

        $sumValues = $this->getSumValues($values);

        return $this->getAverageValue($sumValues, $total);
    }

    private function validateTotal($total)
    {
        if ($total == 0) {
            throw new Exception("There are not values for the avarage operation");
        }
    }

    private function getSumValues($values)
    {
        $sum = 0.0;

        foreach ($values as $value) {
            $sum += $value;
        }

        return $sum;
    }

    private function getTotalValues($values)
    {
        return count($values);
    }

    private function getAverageValue($sumValues, $total)
    {
        return ($sumValues / $total);
    }

}
