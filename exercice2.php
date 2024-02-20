<?php
 require_once "exercice1.php"; 
 
 
 class beer extends beverage {

    //the properties

    private $name;
    private $alcoholPercentage;

public function __construct($color, $price, $temperature,$name, $alcoholPercentage)
{   parent ::  __construct($color, $price, $temperature);
    $this-> name = $name;
    $this-> alcoholPercentage =$alcoholPercentage;
    
}
public function getAlcoholPercentage(){
    return $this-> alcoholPercentage;
}

}
$beer = new beer("Duvel", 8.5, "blond", 3.5, "cold");
echo "</br>";
print_r ($beer->getAlcoholPercentage());
echo"</br>";
$value = $beer->getAlcoholPercentage();
echo $value;
echo"</br>";
$beer->getInfo();



?>