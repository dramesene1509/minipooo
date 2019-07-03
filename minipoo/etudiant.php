<?php
require_once 'connection.php';
class Etudiant{
    private $matricule;
    private $nom;
    private $prenom;
    private $mail;
    private $tel;
    private $datedenaissance;
  public function __construct($matricule="",$nom="",$prenom="",$mail="",$tel="",$datedenaissance=""){
    $this->matricule =$matricule;
    $this->nom =$nom;
    $this->prenom =$prenom;
    $this->mail =$mail;
    $this->tel =$tel;
    $this->datedenaissance =$datedenaissance;
  }
  public function getMatricule(){
    return $this->matricule;
}
public function setMatricule($matricule){
    $this->matricule = $matricule;
}
    public function getNom(){
        return $this->nom;
    }

public function setNom($nom){
     $this->nom = $nom;

}
public function getPrenom(){
    return $this->prenom;
}
public function setPrenom($prenom){
    $this->prenom = $prenom;

} 
public function getMail(){

    return $this->mail;
}
public function setMail($mail){


    $this->mail = $mail;

}

 public function getTel(){
    return $this->tel;
}
public function setTel($tel){
    $this->tel = $tel;

}
public function getDatedenaissance(){
    return $this->datedenaissance;
}
public function setDatedenaissance($datedenaissance){
    $this->datedenaissance=$datedenaissance;
}
public function infos (){
    return $this->matricule. ",".$this->nom.",".$this->prenom.",".$this->mail.",".$this->tel.",".$this->datedenaissance;
}
}
?>