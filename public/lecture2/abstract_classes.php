<?php
abstract class Animal {
    abstract public function makeSound();

    public function sleep() {
        echo "Sleeping...\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}

$cat = new Cat();
$cat->makeSound(); // Ausgabe: Meow
$cat->sleep(); // Ausgabe: Sleeping...
?>