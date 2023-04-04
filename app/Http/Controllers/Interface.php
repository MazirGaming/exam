<?php

interface Greetings {
    //Không có thuộc tính
    public function sayGoodbye(); //Chỉ định nghĩa phương thức
    public function sayHello(); 
}

// Kế thừa interface bằng "implements"
class MyClass implements Greetings{
    public $name;

    public function sayGoodbye() {
        echo "Good Bye";
    }
}

$class = new MyClass();

echo $class->sayGoodbye();
echo $class->name = 'Manh';

//Lỗi vì lớp kế thừa chưa triển khai phương thức sayHello
