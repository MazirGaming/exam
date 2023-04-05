<?php

class Person {
    protected $name;

    protected $age;

    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        echo "Object đã được khởi tạo \n";
    }

    public function __destruct() {
        echo "Object đã bị hủy \n";
    }

    public function __set($key, $value) {
        echo "Object đã được thêm " .$key .":".$value . "\n";
    }

    public function __sleep() {
        return array('name', 'age');
    }

    public function __isset($property) {
        echo "Thuộc tính không tồn tại " .$property . "\n";
    }

    public function __toString() {
        return "Person: {$this->name} ({$this->age})";
    }
  
    public function getName() {
        echo $this->name;
    }
}

$human = new Person('Manh', 24, 'An Binh'); //Khở tạo Object
$human->weight = 65; //set thuộc tính chưa có hoặc private trong Class
isset($human->email); //Thuộc tính không tồn tại email
echo $human; // Sử dụng echo in ra 1 đối tượng sẽ gọi tới toString() trong class
echo (serialize($human)); // serialize() một đối tượng thì nó sẽ trả về tất cả các thuộc tính trong đối tượng đó. Có __sleep sẽ chỉ định các thuộc tính lưu trữ.
unset($human);