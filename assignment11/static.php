<?php
class MyStaticClass {
    public static $message = "Hello, welcome to PHP static programming!";

    
    public static function displayMessage() {
        echo self::$message;
    }
}
MyStaticClass::displayMessage(); 
?>
