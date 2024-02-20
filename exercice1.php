<?php

class beverage {

    // The properties

  public $color;
  public $price;
  public $temperature;

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
$beverage = new beverage("black", 2, "cold");
$beverage-> getInfo();