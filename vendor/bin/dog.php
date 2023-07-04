<?php

abstract class Dog {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return $this->name . " says " . $this->getSound();
    }

    public abstract function getSound();
    public abstract function hunt();
}

class ShibaInu extends Dog {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return $this->name . " is hunting.";
    }
}

class Pug extends Dog {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getSound() {
        return "woof!";
    }

    public function hunt() {
        return $this->name . " is too lazy to hunt.";
    }
}

class Dachshund extends Dog {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getSound() {
        return "woof!";
    }

    public function hunt() {
        return $this->name . " is hunting.";
    }
}

class PlushLabrador extends Dog {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getSound() {
        return "woof! woof!";
    }

    public function hunt() {
        return $this->name . " is hunting.";
    }
}

class RubberDachshund extends Dog {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getSound() {
        return "squeak! squeak!";
    }

    public function hunt() {
        return $this->name . " is a toy and cannot hunt.";
    }
}

// Використання програми
$shibaInu = new ShibaInu("Shiba Inu");
echo $shibaInu->makeSound() . "\n";
echo $shibaInu->hunt() . "\n";

$pug = new Pug("Pug");
echo $pug->makeSound() . "\n";
echo $pug->hunt() . "\n";

$dachshund = new Dachshund("Dachshund");
echo $dachshund->makeSound() . "\n";
echo $dachshund->hunt() . "\n";

$plushLabrador = new PlushLabrador("Plush Labrador");
echo $plushLabrador->makeSound() . "\n";
echo $plushLabrador->hunt() . "\n";

$rubberDachshund = new RubberDachshund("Rubber Dachshund");
echo $rubberDachshund->makeSound() . "\n";
echo $rubberDachshund->hunt() . "\n";
