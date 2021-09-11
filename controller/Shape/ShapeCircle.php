<?php

namespace controller\Shape;

use controller\Shape;

class ShapeCircle extends Shape
{
    private int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function areaCalculate(): int
    {
        return M_PI * ($this->radius * 2);
    }

    public function perimeterCalculate(): int
    {
        return 2 * M_PI * $this->radius;
    }

}