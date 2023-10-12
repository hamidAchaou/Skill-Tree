<?php 
include_once __DIR__ . "../../loader.php";
class NiveauxBLO {
    private $NiveauxDao;
    // public $errorMessage;

    public function __construct() {
        $this->NiveauxDao = new NiveauxDao();
    }

    // Obtenez toutes les Niveaux
    public function getAllNiveaux() {
        // $Competences = new NiveauxDao();
        $NiveauxInfo = $this->NiveauxDao->getAllNiveaux();
        return $NiveauxInfo;
    }

    // acquérir des Niveaux
    public function getNiveaux($Id) {
        // $Competences = new NiveauxDao();
        $NiveauxInfo = $this->NiveauxDao->getNiveaux($Id);
        return $NiveauxInfo;
    }

    // ajouter Niveaux
    public function AddNiveaux($Niveaux) {
        $this->NiveauxDao->AddNiveaux($Niveaux);
    }

    // update compenents
    public function updateNiveaux($dataCompenent) {
        $this->NiveauxDao->updateNiveaux($dataCompenent);
    }

    // delete Niveaux
    public function DeleteNiveaux($NiveauxID) {
        $this->NiveauxDao->DeleteNiveaux($NiveauxID);
    }
}