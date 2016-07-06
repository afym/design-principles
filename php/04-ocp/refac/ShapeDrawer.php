<?php

class ShapeDrawer
{

    public function drawShape(BaseShape $shape)
    {
        return $shape->getArea();
    }

}
