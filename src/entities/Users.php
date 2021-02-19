<?php
class Users{
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $password;
  private $etat;

  //constructor
  
  public function __construct($id,$nom,$prenom,$email,$password,$etat){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->etat = $etat;
  }
  //setters
  public function setId($id){
    $this->id = $id;
  }
  public function setNom($nom){
    $this->nom = $nom;
  }
  public function setPrenom($prenom){
    $this->prenom = $prenom;
  }
  public function setPassword($password){
    $this->password = $password;
  }
  public function setEtat($etat){
    $this->etat = $etat;
  }

  //getters

  public function getId(){
    return $this->id;
  }
  public function getNom(){
    return $this->nom;
  }
  public function getPrenom(){
    return $this->prenom;
  }
  public function getPassword(){
    return $this->password;
  }
  public function getEtat(){
    return $this->etat;
  }
}