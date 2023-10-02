<?php
class Car{
    var $location = 0;
    function forward(){
    echo "it is moving to forward<br>";
    $this->location += 10;
    }
}

//echo class_exists("Car") ? "Yeap, it is there <br>" : "Nope, I can't find it <br>"; 
//echo method_exists("Car","move") ? "Yeap, it is there" : "Nope, I can't find it"; 

$tofas = new Car();

echo $tofas->location . "<br>";
$tofas->forward();
echo $tofas->location;

?>