<?php
class Users{
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $password;
  private $etat;

  //constructor

  function __construct($id,$nom,$prenom,$email,$password,$etat){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->etat = $etat;
  }
  //setters
  function setId($id){
    $this->id = $id;
  }
  function setNom($nom){
    $this->nom = $nom;
  }
  function setPrenom($prenom){
    $this->prenom = $prenom;
  }
  function setPassword($password){
    $this->password = $password;
  }
  function setEtat($etat){
    $this->etat = $etat;
  }

  //getters

  function getId(){
    return $this->id;
  }
  function getNom(){
    return $this->nom;
  }
  function getPrenom(){
    return $this->prenom;
  }
  function getPassword(){
    return $this->password;
  }
  function getEtat(){
    return $this->etat;
  }
}