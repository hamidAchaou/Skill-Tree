<?php
class Gestion {
    private $id;
    private $nom;
    private $CNE;
    private $Ville_Id ;

    public function setId($Id) {
        $this->id = $Id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNom($Non) {
        $this->nom = $Non;
    }
    
    public function getNon() {
        return $this->nom;
    }

    public function setCne($CNE) {
        $this->CNE = $CNE;
    }
    
    public function getCNE() {
        return $this->CNE;
    }

    public function setVille_Id ($Ville_Id ) {
        $this->Ville_Id  = $Ville_Id ;
    }
    
    public function getVille_Id () {
        return $this->Ville_Id ;
    }
}
?>