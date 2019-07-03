<?php
require_once ("pension.php");
include_once ("etudiant.php");
class Boursier extends Etudiant{
    
    private $libelle;
   

    public function __construct($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$libelle){
    
        
         parent::__construct($matricule , $nom, $prenom, $mail, $tel, $datedenaissance);

         $this->libelle= $libelle;
               
    }

  
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function infos(){
        return parent::infos(); 
  
    }
}
