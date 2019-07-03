<?php
    
        class Pension {

            private $libelle;
            

            public function __construct($libelle){
                $this->libelle = $libelle;
                
            }

            public function getLibelle(){
                return $this->libelle;
            }

            public function setLibelle($newlibelle){
                $this->libelle = $newlibelle;
            }

            
        }

?>