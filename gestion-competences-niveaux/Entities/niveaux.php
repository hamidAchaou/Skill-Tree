<?php

class Niveaux {
    private $Id;
    private $Nom;
    private $Description;

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setNom($Nom) {
        $this->Nom = $Nom;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }

    public function getNom() {
        return $this->Nom;
    }
    
    public function getId() {
        return $this->Id;
    }
    
    public function getDescription() {
        return $this->Description;
    }
}