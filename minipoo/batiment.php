<?php
class Batiment{
    private $nombat;
    public function __construct($nombat=""){
        $this->nombat= $nombat;
    }
    public function getNombat(){
        return $this->nombat;
    }
    public function setNombat($nombat){
        $this->nombat= $nombat;
    }
}



?>