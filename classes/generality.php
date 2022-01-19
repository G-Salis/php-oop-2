<?php


trait Info {
  public $price;
  public $prime;
  

  public function getFullInfo(){
    return "$this->price, $this->prime";
  }

}