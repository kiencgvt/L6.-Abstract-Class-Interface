<?php

include_once("Shape.php");
include_once("Resizeable.php");

class Circle extends Shape implements Resizeable
{
    public function resize(float $percent)
    {
        return $this->calculateArea() * (1 + $percent / 100);
    }

    public float $radius;

    public function __construct(string $name, float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): float
    {
        return pi() * $this->radius * 2;
    }
}