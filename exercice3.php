<?php


class beverage {

    // The properties

private $color;
  private $price;
  private $temperature;

  //the constructor with incoming parameters in the brackets

  public function __construct($color, $price, $temperature)
  {

    $this-> temperature = $temperature;
    $this-> color =$color;
    $this-> price = $price;
  }
  //the function
  public function getInfo(){
    echo "Price, $this->price";
    
  }
  public function getColor(){
    return $this->color;
  }
}

 
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
    return $this->alcoholPercentage;
}
//function getColor
public function Color() {
    return $this->getColor();
}

//the function setcolor
public function setColor($color){
    $this-> color = $color;
}
private function beerInfo(){
    // return $this->Color() ;
  
    return "Hi i'm . $this->name . and have an alcochol percentage of .  $this-> alcoholPercentage . and I have a" . $this->Color() . "color.";
}
public function printBeerInfo() {
    echo $this-> beerInfo();
}
}
$beer = new beer("blond", 3.5, "cold", "Duvel", 8.5);
// echo "</br>";
// print_r ($beer->getAlcoholPercentage());
// echo"</br>";
// $value = $beer->getAlcoholPercentage();
// echo $value;
// echo"</br>";
// $beer->getInfo();



$beer-> printBeerInfo();
// $beer->setColor("light");

// var_dump($beer->Color());
?>
?>