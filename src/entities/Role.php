<?php
class Role{
  private $id;
  private $libelle;


  //constructor

  public function __construct($id,$libelle){
    $this->id = $id;
    $this->libelle = $libelle;
  }
  //setters
  public function setId($id){
    $this->id = $id;
  }
  public function setLibelle($libelle){
    $this->id = $libelle;
  }

  //getters
  public function getId(){
    return $this->id;
  }
  public function getLibelle(){
    return $this->libelle;
  }

}