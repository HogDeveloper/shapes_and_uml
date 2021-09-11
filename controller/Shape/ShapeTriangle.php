<?php
namespace controller\Shape;

use controller\Shape;

class ShapeTriangle extends Shape
{
    private int $sideA;
    private int $sideB;
    private int $sideC;

    public function __construct($sideA, $sideB = 0, $sideC = 0)
    {
        $this->sideA = $sideA;
        $this->sideB = ($sideB === 0) ? $sideB : $sideA;
        $this->sideC = ($sideC === 0) ? $sideC : $sideA;
    }

    public function areaCalculate(): int
    {
        $pperimeter = ($this->sideA + $this->sideB + $this->sideC) / 2;
        $radius = sqrt((($pperimeter - $this->sideA) * ($pperimeter - $this->sideB) * ($pperimeter - $this->sideC)) / $pperimeter);
        return (($radius * ($this->sideA + $this->sideB + $this->sideC)) / 2);
    }

    public function perimeterCalculate(): int
    {
        return ($this->sideA + $this->sideB + $this->sideC);
    }

}