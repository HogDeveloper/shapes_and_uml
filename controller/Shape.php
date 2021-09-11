<?php

namespace controller;

abstract class Shape
{

    abstract public function areaCalculate(): int;

    abstract public function perimeterCalculate(): int;

}