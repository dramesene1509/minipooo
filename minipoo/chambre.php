<?php
class Chambre extends Boursier{
    
    private $numerochambre;
    
    public function __construct($numerochambre="",$nombat){
        //parent::__construct($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$libelle);
        $this->numerochambre = $numerochambre;
       
    }
    public function getNumerochambre(){
        return $this->numerochambre;
    }
    public function setNumerochambre($numerochambre){
        $this->numerochambre= $numerochambre;
    }
    
    }
