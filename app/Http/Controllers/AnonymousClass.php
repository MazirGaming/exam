<?php

$greeting = new class {
    public function hello() {
        echo 'Hello, world!';
    }
};

$greeting->hello(); // Hello, world!
// Anonymous class cũng có thể kế thừa các class hoặc triển khai các interface