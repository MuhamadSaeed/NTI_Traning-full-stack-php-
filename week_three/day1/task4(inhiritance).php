<?php
class Vehicle {
    protected $model;
    protected $fuelType;

    public function __construct($model, $fuelType) {
        $this->model = $model;
        $this->fuelType = $fuelType;
    }

    public function info() {
        echo "vehicle model: " . $this->model . "<br />" . "type: " . $this->fuelType;
    }
}

class Car extends Vehicle {
    public function info() {
        echo "vehicle model: " . $this->model . "<br />" . "type: " . $this->fuelType;
    }
}

$vehicle = new Vehicle("vec name", "vec fuel type");
$vehicle->info(); 

echo "<br>";

$car = new Car("toyota", "toyota fuel type");
$car->info(); 
?>