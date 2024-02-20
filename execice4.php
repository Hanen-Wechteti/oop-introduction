<?php


class beverage {

    // The properties

protected $color;
protected $price;
protected $temperature;

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
}

 
 class beer extends beverage {

    //the properties

    protected $name;
    protected $alcoholPercentage;

public function __construct($color, $price, $temperature,$name, $alcoholPercentage)
{   parent ::  __construct($color, $price, $temperature);
    $this-> name = $name;
    $this-> alcoholPercentage =$alcoholPercentage;
    
}
public function getAlcoholPercentage(){
    return $this->alcoholPercentage;
}
//function getColor
public function getColor() {
    return $this->color;
}

//the function setcolor
public function setColor($color){
    $this-> color = $color;
}
private function beerInfo(){
    return "Hi i'm {$this->name} and have an alcochol percentage of {$this-> alcoholPercentage} and I have a {$this->getColor()} color.";
}
public function printBeerInfo() {
    echo $this->beerInfo();
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




$beer->setColor("light");
$beer-> printBeerInfo();
var_dump($beer->getColor());
?>
?>