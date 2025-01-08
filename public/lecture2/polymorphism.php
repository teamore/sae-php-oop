<?php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woof\n";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}

function animalSound(Animal $animal) {
    $animal->makeSound();
}

animalSound(new Dog()); // Ausgabe: Woof
animalSound(new Cat()); // Ausgabe: Meow
?>