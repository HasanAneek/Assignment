<?php

// Abstract base class
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method to be overridden by child classes
    abstract public function makeSound();
}

// Dog class
class Dog extends Animal {
    public function makeSound() {
        return "{$this->name} says: Woof!";
    }
}

// Cat class
class Cat extends Animal {
    public function makeSound() {
        return "{$this->name} says: Meow!";
    }
}

// Cow class
class Cow extends Animal {
    public function makeSound() {
        return "{$this->name} says: Moo!";
    }
}

// Demonstrate polymorphism
$animals = [
    new Dog("Buddy"),
    new Cat("Tom"),
    new Cow("Bessie")
];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "\n";
}