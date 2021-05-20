<?php

include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01', 3);

$rectangle = new Rectangle('Rectangle 01', 3, 4);

$square = new Square('Square 01', 4);

$arr = [$circle, $rectangle, $square];
foreach ($arr as $shape) {
    echo $shape->getName() . " before: " . $shape->calculateArea() . "<br/>";
    echo $shape->getName() . " after: " . $shape->resize(rand(1, 100)) . "<br/>";
}
