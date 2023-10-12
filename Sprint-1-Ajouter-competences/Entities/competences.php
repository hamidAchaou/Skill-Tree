<?php

class Competences {
    private $Id;
    private $Nom;
    private $Code;
    private $Reference;

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setNom($Nom) {
        $this->Nom = $Nom;
    }

    public function setCode($Code) {
        $this->Code = $Code;
    }

    
    public function setReference($Reference) {
        $this->Reference = $Reference;
    }

    public function getNom() {
        return $this->Nom;
    }
    
    public function getId() {
        return $this->Id;
    }
    
    public function getCode() {
        return $this->Code;
    }
    
    public function getReference() {
        return $this->Reference;
    }
}