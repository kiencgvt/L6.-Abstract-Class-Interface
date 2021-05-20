<?php

class Circle
{
    public $radius;
    public string $name;

    public function __construct(string $name, float $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRadius(): string
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }
}