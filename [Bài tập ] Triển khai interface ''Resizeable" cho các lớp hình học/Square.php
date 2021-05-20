<?php


include_once("Rectangle.php");
include_once("Resizeable.php");

class Square extends Rectangle implements Resizeable
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}