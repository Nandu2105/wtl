<?php
class Animal {
    public function eat() {
        echo "I can eat<br>";
    }
}
class Dog extends Animal {
    public function bark() {
        echo "I can bark<br>";
    }
}
$myDog = new Dog();
$myDog->eat();  
$myDog->bark(); 
?>
