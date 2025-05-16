<?php
interface Greet {
    public function sayHello();
}

class Hello implements Greet {
    public function sayHello() {
        echo "Hello, World!";
    }
}

$obj = new Hello();
$obj->sayHello();
?>
