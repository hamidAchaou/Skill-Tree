<?php 
include_once __DIR__ . "../../loader.php";
class CompetenceBLO {
    private $competencesDao;
    // public $errorMessage;

    public function __construct() {
        $this->competencesDao = new CompetencesDAO();
    }

    // Obtenez toutes les compétences
    public function getAllCompetences() {
        $Competences = new CompetencesDAO();
        $competencesInfo = $Competences->getAllCompetences();
        return $competencesInfo;
    }

    // acquérir des compétences
    public function getCompetence($Id) {
        $Competences = new CompetencesDAO();
        $competenceInfo = $Competences->getCompetece($Id);
        return $competenceInfo;
    }

    // ajouter Components
    public function AddCompetence($competence) {
        $this->competencesDao->AddCompetence($competence);
    }

    // update compenents
    public function updateCompetence($dataCompenent) {
        $this->competencesDao->updateCompetence($dataCompenent);
    }

    // delete competence
    public function DeleteCompetence($competenceID) {
        $affectedRows = 0;
        $affectedRows = (int)$this->competencesDao->DeleteCompetence($competenceID);
        return $affectedRows;
    }
}