<?php


include_once("Shape.php");
include_once("Resizeable.php");

class Rectangle extends Shape implements Resizeable
{
    public function resize(float $percent)
    {
        return $this->calculateArea() * (1 + $percent / 100);
    }

    public int $width;
    public int $height;

    public function __construct(string $name,
                                int $width,
                                int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float
    {
        return ($this->height + $this->width) * 2;
    }
}
