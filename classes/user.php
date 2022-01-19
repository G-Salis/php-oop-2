<?php

require_once __DIR__ . "/cc.php";

class User {
  private $name;
  private $lastname;
  private $email;
  private $creditCard;
  

  public function __construct($_name,$_lastname,$_email)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->email = $_email;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }
  public function setEmail($_email){
    $this->email = $_email;
  }


  public function getName(){
    return $this->name;
  }
  public function getLastname(){
    return $this->lastname ;
  }
  public function getEmail(){
    return $this->email;
  }


  public function setCreditCard($_circuit,$_serialCode,$_cvv)
  {
    $this->creditCard = new CC($_circuit,$_serialCode,$_cvv);
  }
  public function getCreditCard(){
    return $this->creditCard;
  }

  
 
}