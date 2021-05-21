<?php

include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01', 3);

$rectangle = new Rectangle('Rectangle 01', 3, 4);

$square = new Square('Square 01', 4);

$arr = [$circle, $square, $rectangle];
foreach ($arr as $shape) {
    echo "Area of " . $shape->getName() . ": " . $shape->calculateArea() . "<br/>";
    if ($shape instanceof Colorable) {
        echo $shape->howToColor() . "<br/>";
    }
}
