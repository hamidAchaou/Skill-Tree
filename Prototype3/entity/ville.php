<?php
class Ville {
    private $Id;
    private $Nom;

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function getId() {
        return $this->Id;
    }

    public function setNom($Non) {
        $this->Nom = $Non;
    }

    public function getNom() {
        return $this->Nom;
    }
}