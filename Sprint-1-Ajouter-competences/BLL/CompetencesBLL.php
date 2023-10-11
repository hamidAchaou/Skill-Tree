<?php 
class CompetenceBLO {
    private $competencesDao;
    public $errorMessage;

    public function __construct() {
        $this->competencesDao = new CompetencesDAO();
    }

    // ajouter Components
    public function AddCompetence($competence) {
        $this->competencesDao->AddCompetence($competence);
    }
}