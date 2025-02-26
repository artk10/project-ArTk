<?php

class Animal {
    public $animalType;
    public $name;
    public $age;
}

$nicole = new Animal();
$nicole->animalType = "dog";
$nicole->name = "Nicole";
$nicole->age = 5;

$musya = new Animal();
$musya->animalType = "cat";
$musya->name = "Musya";
$musya->age = 10;
?>

<html>
    <body>
        Type : <?php echo $nicole -> animalType ?><br>
        Name : <?php echo $nicole -> name ?><br>
        Age : <?php echo $nicole -> age ?><br><br>
        Type : <?php echo $musya -> animalType ?><br>
        Name : <?php echo $musya -> name ?><br>
        Age : <?php echo $musya -> age ?><br>
    </body>
</html>
