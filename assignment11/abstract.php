<?php
abstract class Vehicle {
    abstract public function fuelType();
}
class Car extends Vehicle {
    public function fuelType() {
        echo "The car uses gasoline.";
    }
}
class ElectricCar extends Vehicle {
    public function fuelType() {
        echo "The electric car uses electricity.";
    }
}
class Truck extends Vehicle {
    public function fuelType() {
        echo "The truck uses diesel.";
    }
}
$car = new Car();
$car->fuelType(); 

echo "<br>";

$electricCar = new ElectricCar();
$electricCar->fuelType();  

echo "<br>";

$truck = new Truck();
$truck->fuelType(); 
?>
