<?php
include_once ("boursier.php");
class Loger extends Boursier{
    
        private $chambre;
        private $batiment;
        public function __construct($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$libelle,$chambre,$batiment){

            parent::__construct($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$libelle);

            $this->chambre= $chambre;
            $this->batiment= $batiment;
    }
    public function getChambre(){
        return $this->chambre;
    }
    public function setChambre($chambre){
        $this->chambre = $chambre;
    }
public function getBatiment(){
    return $this->batiment;
}
    public function setBatiment($batiment){
        $this->Batiment = $batiment;
    }


}

