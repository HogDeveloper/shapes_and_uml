<?php
require_once "config/config.php";
require_once "core/startup.php";

// Shapes
$circle = new \controller\Shape\ShapeCircle(14);
$triangle = new \controller\Shape\ShapeTriangle(4, 5, 8);
$rectangle = new \controller\Shape\ShapeRectangle(12, 8);

// shape calculate
$shapeCalculate = new \controller\ShapeCalculate();

print_r("Площадь круга: " . $shapeCalculate->areaCalculate($circle));
echo "</br>";
print_r("Площадь треугольника: " . $shapeCalculate->areaCalculate($triangle));
echo "</br>";
print_r("Площадь прямоугольника: " . $shapeCalculate->areaCalculate($rectangle));