<?php
class Ville {
    private $Id;
    private $Nom;

    public function setIdVille($Id) {
        $this->Id = $Id;
    }

    public function getIdVille() {
        return $this->Id;
    }

    public function setNomVille($Non) {
        $this->Nom = $Non;
    }

    public function getNomVille() {
        return $this->Nom;
    }
}