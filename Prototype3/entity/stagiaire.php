<?php
class Stagiaire {
    private $id;
    private $nom;
    private $Type;
    private $CNE;
    private $Ville_Id;
    private $Ville_Nom;

    public function setId($Id) {
        $this->id = $Id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNom($Nom) {
        $this->nom = $Nom;
    }
    
    public function getNom() {
        return $this->nom;
    }
    public function setType($Type) {
        $this->Type = $Type;
    }
    
    public function getType() {
        return $this->Type;
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
    
    public function setVilleNom ($Ville_Nom ) {
        $this->Ville_Nom  = $Ville_Nom ;
    }
    
    public function getVilleNom () {
        return $this->Ville_Nom ;
    }
}
?>