<?php
//Định nghĩa Class
class Fruits
{
    public $name; //property
    
    public $color; //property

    public $weight; //property

    protected $money = '5$';

    public function __construct($name, $color)
    {
        $this->name = $name;
    }

    //method getName()
    public function getName(){
        return $this->name;
        // return $name;  =>   Warning: Undefined variable $name in C:\laragon\www\example-app\app\Http\Controllers\Fruits.php on line 18
    }

     //method getColor
    public function getColor(){
        return $this->color;
    }
    
    //method getWeight
    public function getWeight(){
        return $this->weight; //keyword $this
    }
}

$apple = new Fruits('Apple', 'red', '300'); //Khởi tạo Object

class Person {
    public $name;

    protected $age; // Khai báo protected

    const CONSTANT_STRING = 'Hello';

    const CONSTANT_NUMBER = 1;
  
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
  
    public function getAge() {
        return $this->age;
    }

    public static function printConstant() {
        echo self::CONSTANT_STRING;
        echo static::CONSTANT_STRING;
    }
}

class OtherPerson extends Person {
    const CONSTANT_STRING = 'Alo';
}

Person::printConstant(); 
//Hello  => Khi sử dụng trong cùng 1 class thì self và static là tương đồng.
//Hello  => Khi sử dụng trong cùng 1 class thì self và static là tương đồng.

OtherPerson::printConstant(); //Kế thừa lớp Person
//Hello => Kết quả sẽ trả về giá trị hằng số của lớp mà CONSTANT_STRING được định nghĩa (Person) do sử dụng self.
//Alo => Kết quả sẽ trả về giá trị hằng số của lớp mà CONSTANT_STRING được định nghĩa (Person).