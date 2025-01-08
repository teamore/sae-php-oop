<?php
class Engine {
    public function start() {
        echo "Engine started\n";
    }
}

class Car {
    private $engine;

    public function __construct() {
        $this->engine = new Engine();
    }

    public function startCar() {
        $this->engine->start();
        echo "Car is running\n";
    }
}

$car = new Car();
$car->startCar();
// Ausgabe:
// Engine started
// Car is running
?>