<?php
class Shape {
    public function draw() {
        echo "Drawing a shape\n";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle\n";
    }
}

class ShapeFactory {
    public static function createShape($type) {
        switch ($type) {
            case 'circle':
                return new Circle();
            default:
                return new Shape();
        }
    }
}

$shape = ShapeFactory::createShape('circle');
$shape->draw(); // Ausgabe: Drawing a circle
?>