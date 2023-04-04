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

echo $apple->getName(); //Apple
echo $apple->getColor(); //Không hiển thị, vì chưa được thiết lập giá trị "$this->color = $color" trong hàm __contruct
echo $apple->getWeight(); //Không hiển thị, vì không có tham số truyền vào trong hàm __contruct

class Person {
    public $name;

    protected $age; // Khai báo protected

    
  
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  
    public function getAge() {
      return $this->age;
    }
}

$person = new Person("Manh", 24);

echo $person->name; // Manh
// echo $person->age; => Không hiển thị: khai báo ở trong class là protected, chỉ có thể được truy cập từ bên trong class và các class con của nó.
echo $person->getAge();