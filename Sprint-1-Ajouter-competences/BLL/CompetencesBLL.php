<?php 
include_once __DIR__ . "../../loader.php";
class CompetenceBLO {
    private $competencesDao;
    // public $errorMessage;

    private function validateWithRegex($value, $regex) {
        return preg_match($regex, $value) === 1;
    }
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

    // Add Competence function
    public function AddCompetence($competence) {
        // Regular expressions for validation
        $nameRegex = '/^[A-Za-z\s]+/';
        $referenceRegex = '/^[A-Za-z0-9]+/';
        // get value input
        $Nom = $competence->getNom();
        $Reference = $competence->getReference();

        // Validation Input
        if (empty($Nom) || empty($Reference)) {
            throw new Exception("emptyinput");
        }

        if (!$this->validateWithRegex($Nom, $nameRegex) || !$this->validateWithRegex($Reference, $referenceRegex)) {
            throw new Exception("invalidinput");
        }

        $this->competencesDao->AddCompetence($competence);
    }


    // update components
    public function updateCompetence($dataCompenent) {
        // Regular expressions for validation
        $nameRegex = '/^[A-Za-z\s]+/';
        $referenceRegex = '/^[A-Za-z0-9]+/';

        // get value input
        $Nom = $dataCompenent[0]->getNom();
        $Reference = $dataCompenent[0]->getReference();

        // Validation Input
        if (empty($Nom) || empty($Reference)) {
            throw new Exception("emptyinput");
        }

        if (!$this->validateWithRegex($Nom, $nameRegex) || !$this->validateWithRegex($Reference, $referenceRegex)) {
            throw new Exception("invalidinput");
        }

        $this->competencesDao->updateCompetence($dataCompenent);
    }

    // delete competence
    public function DeleteCompetence($competenceID) {
        $this->competencesDao->DeleteCompetence($competenceID);
    }
}