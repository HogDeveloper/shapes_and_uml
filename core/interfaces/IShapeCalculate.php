<?php

namespace core\interfaces;

use controller\Shape;

interface IShapeCalculate
{

    public function areaCalculate(Shape $shape): int;

    public function perimeterCalculate(Shape $shape): int;

}

