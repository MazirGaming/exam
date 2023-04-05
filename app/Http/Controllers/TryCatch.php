<?php

$greeting = new class {
    public function hello() {
        echo 'Hello, world!';
    }
};

try {
    $greeting->goodBye();
} catch (Error $e) {
    echo 'Lỗi: Hàm không được thực thi hoặc không tồn tại';
}