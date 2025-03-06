<?php

interface Shape {
    public function area();
    public function type();
}

class Circle implements Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return ($this->radius * $this->radius) * 3.14159  ;
    }

    public function type() {
        return "Circle - Area";
    }
}

class Rectangle implements Shape {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }

    public function type() {
        return "Rectangle - Area";
    }
}

class Triangle implements Shape {
    public $sideA;
    public $sideB;
    public $sideC;

    public function __construct($sideA, $sideB, $sideC) {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    public function area() {
        return $this->sideA + $this->sideB + $this->sideC;
    }

    public function type() {
        return "Triangle - Area";
    }
}

$spapes = [
    new Circle(5),
    new Circle(8),
    new Circle(10),
    new Rectangle(5, 3),
    new Rectangle(2, 4),
    new Rectangle(49, 51),
    new Triangle(5, 3, 3),
    new Triangle(1, 2, 3),
    new Triangle(14, 25, 56),
];

foreach ($spapes as $shape) {
    echo $shape->type() . ': ' . $shape->area() . "\n";
}