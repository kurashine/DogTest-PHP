<?php

require_once 'dog.php';

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase {
    public function testShibaInuMakeSound() {
        $dog = new ShibaInu("Shiba Inu");
        $this->assertEquals("Shiba Inu says woof! woof!", $dog->makeSound());
    }

    public function testShibaInuHunt() {
        $dog = new ShibaInu("Shiba Inu");
        $this->assertEquals("Shiba Inu is hunting.", $dog->hunt());
    }

    public function testPugMakeSound() {
        $dog = new Pug("Pug");
        $this->assertEquals("Pug says woof!", $dog->makeSound());
    }

    public function testPugHunt() {
        $dog = new Pug("Pug");
        $this->assertEquals("Pug is too lazy to hunt.", $dog->hunt());
    }

    public function testDachshundMakeSound() {
        $dog = new Dachshund("Dachshund");
        $this->assertEquals("Dachshund says woof!", $dog->makeSound());
    }

    public function testDachshundHunt() {
        $dog = new Dachshund("Dachshund");
        $this->assertEquals("Dachshund is hunting.", $dog->hunt());
    }

    public function testPlushLabradorMakeSound() {
        $dog = new PlushLabrador("Plush Labrador");
        $this->assertEquals("Plush Labrador says woof! woof!", $dog->makeSound());
    }

    public function testPlushLabradorHunt() {
        $dog = new PlushLabrador("Plush Labrador");
        $this->assertEquals("Plush Labrador is hunting.", $dog->hunt());
    }

    public function testRubberDachshundMakeSound() {
        $dog = new RubberDachshund("Rubber Dachshund");
        $this->assertEquals("Rubber Dachshund says squeak! squeak!", $dog->makeSound());
    }

    public function testRubberDachshundHunt() {
        $dog = new RubberDachshund("Rubber Dachshund");
        $this->assertEquals("Rubber Dachshund is a toy and cannot hunt.", $dog->hunt());
    }
}