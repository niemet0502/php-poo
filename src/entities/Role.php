<?php
class Role{
  private $id;
  private $libelle;


  //constructor

  function __construct($id,$libelle){
    $this->id = $id;
    $this->libelle = $libelle;
  }
  //setters
  function setId($id){
    $this->id = $id;
  }
  function setLibelle($libelle){
    $this->id = $libelle;
  }

  //getters
  function getId(){
    return $this->id;
  }
  function getLibelle(){
    return $this->libelle;
  }

}