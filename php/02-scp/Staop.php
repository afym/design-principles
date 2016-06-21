<?php

class Staop
{

    public function gMe(... $vs)
    {
        $s = 0;
        $t = count($vs);

        if ($t > 0) {
            foreach ($vs as $item) {
                $s += $item;
            }
        }

        return $s / $t;
    }

}
