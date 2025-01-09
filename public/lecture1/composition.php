<?php
class Engine {
    public function start() {
        $this->startEngine();
    }
    private function startEngine() {
        echo "Engine started\n";
    }
}
class SoundSystem {
    public function start() {
        echo "SoundSystem: BOOM BOOM!\n";
    }
}

class Car {
    private $engine;
    private $soundSystem;
    private $carType;

    public function __construct($carType = "") {
        $this->engine = new Engine();
        $this->carType = $carType;
        $this->soundSystem = new SoundSystem();
    }

    public function startCar() {
        $this->engine->start();
        $this->soundSystem->start();
        echo "Car ($this->carType) is running\n";
    }
    public function stopCar() {
        echo "Car stops";
    }
}
$car = new Car("Convertible");
$car->startCar();
$car->stopCar();