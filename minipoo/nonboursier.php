<?php
//require_once ("pension.php");
include_once ("etudiant.php");
class Nonboursier extends Etudiant{
    private $addresse;
    public function __construct($matricule="",$nom="",$prenom="",$mail="",$tel="",$datedenaissance="",$addresse=""){
        parent::__construct($matricule, $nom,$prenom,$mail,$tel,$datedenaissance);
        
        $this->addresse = $addresse;
    }
    public function getAddresse(){
        return $this->addresse;
    }
    public function setAddresse($addresse){
         $this->addresse = $addresse;
    }
    public function infos(){
        return parent::infos().",".$this->addresse ;

}
}