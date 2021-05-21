<?php


include_once("Rectangle.php");
include_once("Colorable.php");

class Square extends Rectangle implements Colorable
{
    public function howToColor(): string
    {
        return "Color all four sides..";
    }

    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}