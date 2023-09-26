<?php
class Stagiaire {
    private $id;
    private $nom;
    private $CNE;

    public function setId($Id) {
        $this->id = $Id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNom($Non) {
        $this->nom = $Non;
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function setCne($CNE) {
        $this->CNE = $CNE;
    }
    
    public function getCNE() {
        return $this->CNE;
    }
}
?>