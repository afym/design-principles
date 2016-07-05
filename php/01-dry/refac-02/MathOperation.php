<?php

trait MathOperation
{

    public function multiply(... $numbers)
    {
        $total = 1;

        foreach ($numbers as $number) {
            $total *= $number;
        }

        return $total;
    }

}
