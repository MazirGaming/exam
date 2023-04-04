<?php

trait Greetings {
    public function sayHello() {
        echo 'Hello! ';
    }
  
    public function sayGoodbye() {
        echo 'Goodbye!';
    }
}

class MyClass {
    use Greetings;
  
    public function greet() {
        $this->sayHello();
        $this->sayGoodbye();
    }
}

$class = new MyClass();

echo $class->greet();
