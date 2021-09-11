<?php
namespace controller\Shape;

use controller\Shape;

class ShapeRectangle extends Shape
{
    private int $width;
    private int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function areaCalculate(): int
    {
        return ($this->width + $this->height);
    }

    public function perimeterCalculate(): int
    {
        return (($this->width + $this->height) * 2);
    }
}