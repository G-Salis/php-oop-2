<?php

class Product {
  private $productName;
  private $genre;
  private $id;
  

  public function __construct($_productName,$_genre,$_id)
  {
    $this->productName = $_productName;
    $this->genre = $_genre;
    $this->id = $_id;
  }

  public function setProductName($_productName){
    $this->productName = $_productName;
  }
  public function setGenre($_genre){
    $this->genre = $_genre;
  }
  public function setId($_id){
    $this->id = $_id;
  }


  public function getProductName(){
    return $this->productName;
  }
  public function getGenre(){
    return $this->genre ;
  }
  public function getId(){
    return $this->id;
  }
 
}