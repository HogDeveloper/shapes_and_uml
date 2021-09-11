<?php

namespace controller;

use controller\Shape;
use core\interfaces\IShapeCalculate;

class ShapeCalculate implements IShapeCalculate
{
    public function areaCalculate(Shape $shape): int
    {
        $result = 0;
        if($shape instanceof Shape) {
            $result = $shape->areaCalculate();
            return $result;
        }
        new \Exception(get_class($shape) . "is not instance Shape", E_USER_ERROR);
        return $result;
    }

    public function perimeterCalculate(Shape $shape): int
    {
        $result = 0;
        if($shape instanceof Shape){
            $result = $shape->perimeterCalculate();
            return $result;
        }
        new \Exception(get_class($shape) . "is not instance Shape", E_USER_ERROR);
        return $result;
    }
}
