<?php

class Vehicule {
    public $brand;
    public $model;
    public $year;

    public function getVehicule() {
        return 'Brand : ' . $this->brand . "\n"
            . 'Model : ' . $this->model . "\n"
            . 'Year  : ' . $this->year . "\n";
    }
}

class Car extends Vehicule {
    public $numberDoors;

    public $motor;

    public function getVehicule() {
        return 'Brand : ' . $this->brand . "\n"
            . 'Model : ' . $this->model . "\n"
            . 'Year  : ' . $this->year . "\n"
            . 'Doors : ' . $this->numberDoors . "\n"
            . 'Motor : ' . $this->motor . "\n";

    }
}

class Bicycle extends Vehicule {
    public $typeBike;
    public $numberSpeeds;

    public function getVehicule() {
        return 'Brand   : ' . $this->brand . "\n"
            . 'Model   : ' . $this->model . "\n"
            . 'Year    : ' . $this->year . "\n"
            . 'Type    : ' . $this->typeBike . "\n"
            . 'Speeds  : ' . $this->numberSpeeds . "\n";
    }
}

$mercedes = new Car();
$mercedes->brand = "Mercedes";
$mercedes->model = "CLS";
$mercedes->year = 2020;
$mercedes->numberDoors = 5;
$mercedes->motor = "2.0";

$canyon = new Bicycle();
$canyon->brand = "Canyon";
$canyon->model = "Endurace 6";
$canyon->year = 2022;
$canyon->typeBike = "Road";
$canyon->numberSpeeds = 6;

?>

<html>
    <body>
        <h1>Presentation vehicule</h1>
        <h2>Presentation of the car :</h2>
        <p>Brand: <?php echo $mercedes->brand ?></p>
        <p>Model: <?php echo $mercedes->model ?></p>
        <p>Year: <?php echo $mercedes->year ?></p>
        <p>Doors: <?php echo $mercedes->numberDoors ?></p>
        <p>Motor: <?php echo $mercedes->motor ?></p>
        <h2>Presentation of the bicycle :</h2>
        <p>Brand: <?php echo $canyon->brand ?></p>
        <p>Model: <?php echo $canyon->model ?></p>
        <p>Year: <?php echo $canyon->year ?></p>
        <p>Type: <?php echo $canyon->typeBike ?></p>
        <p>Speeds: <?php echo $canyon->numberSpeeds ?></p>
    </body>
</html>

