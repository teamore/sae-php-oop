<?php
class Animal {
    public $sound = "generic\n";
    public function makeSound() {
        echo $this->sound;
    }
}

class Dog extends Animal {
    public $sound = "Woooof!\n";
}
class Cat extends Animal {
    public $sound = "meouw!\n";
}
$animal = new Animal();
$animal->makeSound();

$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();
?>