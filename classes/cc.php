<?php

class CC extends User{
  private $circuit;
  private $serialCode;
  private $cvv;
  

  public function __construct($_circuit,$_serialCode,$_cvv)
  {
    $this->circuit = $_circuit;
    $this->serialCode = $_serialCode;
    $this->cvv = $this->checkValidCvv($_cvv);
  }

  public function setCircuit($_circuit){
    $this->circuit = $_circuit;
  }
  public function setSerialCode($_serialCode){
    $this->serialCode = $_serialCode;
  }
  public function setCvv($_cvv){
    $this->cvv = $this->checkValidCvv($_cvv);
  }


  public function getCircuit(){
    return $this->circuit;
  }
  public function getSerialCode(){
    return $this->serialCode ;
  }
  public function getCvv(){
    return $this->cvv;
  }

  public function getUser(){
    return $this->utente;
  }


 
}