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

if (isset($argv[1]) && isset($argv[2])) {
    $dogType = $argv[1];
    $command = $argv[2];

    $dog = null;

    switch ($dogType) {
        case 'shiba-inu':
            $dog = new ShibaInu("Shiba Inu");
            break;
        case 'pug':
            $dog = new Pug("Pug");
            break;
        case 'dachshund':
            $dog = new Dachshund("Dachshund");
            break;
        case 'plush-labrador':
            $dog = new PlushLabrador("Plush Labrador");
            break;
        case 'rubber-dachshund':
            $dog = new RubberDachshund("Rubber Dachshund");
            break;
        default:
            echo "Invalid dog type.\n";
            exit(1);
    }

    switch ($command) {
        case 'sound':
            echo $dog->makeSound() . "\n";
            break;
        case 'hunt':
            echo $dog->hunt() . "\n";
            break;
        default:
            echo "Invalid command.\n";
            exit(1);
    }
}