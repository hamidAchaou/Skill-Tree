<?php 
class CompetencesDAO
{
    private $pdo = null;

    public function __construct()
    {
        $databaseConnection = new Dbh();
        $this->pdo = $databaseConnection->connect();
    }

    // Add competence
    public function AddCompetence($competence)
    {
        $sql = "INSERT INTO `Competences` (`Nom`, `Code`, `Reference`) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competence->getNom(), $competence->getCode(), $competence->getReference()]);

        header('location: ../../Presentation/index.php?success=addCompetencesSuccess');

    }
}