<?php

require_once __DIR__ . "/generality.php";

class Product {

  private $productName;
  private $genre;
  private $id;
  use Info;
  

  public function __construct($_productName,$_genre,$_id, $_price, $_prime)
  {
    $this->productName = $_productName;
    $this->genre = $_genre;
    $this->id = $_id;
    $this->price = $_price;
    $this->prime = $_prime;
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
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setPrime($_prime){
    $this->prime = $_prime;
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
  public function getPrice(){
    return $this->price;
  }
  public function getPrime(){
    return $this->prime;
  }
 
}