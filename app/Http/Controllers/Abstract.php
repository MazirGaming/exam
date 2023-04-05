<?php

abstract class Greetings {
    protected $name; //Không sử dụng abstract cho properties

    abstract function sayHello(); //Function khai báo abstract chỉ được phép định nghĩa

    public function __construct($name) {
        $this->name = $name;
    }
  
    public function sayGoodbye() {
        echo 'Goodbye!'.$this->name;
    }
}

class MyClass extends Greetings{
    //Phương thức kế thừa từ lớp cha có sử dụng abstract buộc phải định nghĩa lại
    public function sayHello() {
        // $this->sayHello();
        $this->sayGoodbye();
    }

    public function greet() {
        echo "Greet";
    }
}

$class = new MyClass('9A');

echo $class->greet();
echo $class->sayGoodbye();
