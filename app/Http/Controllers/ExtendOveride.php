<?php

class Person {
    public $name;

    protected $age; // Khai báo protected

    const CONSTANT_STRING = 'Hello';

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
  
    public function getAge() {
        echo $this->age;
    }

    public function getName() {
        echo $this->name;
    }
}

class OtherPerson extends Person {
    public function getName() {
        echo "Nguyen Dinh Manh";
    }
}

$apple = new OtherPerson('Manh', 24);
echo $apple->getAge(); // Kế thừa phương thức getAge()
echo $apple->getName(); // Override getName()
