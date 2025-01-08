<?php
class Animal {
    public function makeSound() {
        echo "Some generic sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Ausgabe: Woof!
?>