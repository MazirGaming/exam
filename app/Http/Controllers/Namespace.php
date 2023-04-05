<?php

namespace App\Http\Controllers;

include 'Greeting.php';

use App\Http\Controllers\Greeting;

class MyClass implements Greeting{
  public function sayHello() {
    echo "Hello from MyNamespace\MyClass!";
  }
  
  public function sayGoodbye() {
    echo "Hello from MyNamespace\MyClass!";
  }
}

$obj = new MyClass();
$obj->sayHello();