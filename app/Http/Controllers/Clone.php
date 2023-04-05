<?php

class Person {
    public $name;
    public $age;
    
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
    
    public function sayHello() {
      echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$class = new Person('Manh', 24);

$obj2 = clone $class;

$obj2->name = "Duc";

$class->sayHello();

$obj2->sayHello();
