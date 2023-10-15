<?php 
include_once __DIR__ . "/../Presentation/loader.php";
// include_once __DIR__ . "../Presentation/Admin/competences/edit-competences.php";

class CompetencesDAO
{
    private $pdo = null;

    public function __construct()
    {
        $databaseConnection = new Dbh();
        $this->pdo = $databaseConnection->connect();
    }

    // Obtenez toutes les compétences
    public function getAllCompetences() {
        $stmt = $this->pdo->prepare("SELECT * FROM competences");
    
        if (!$stmt->execute()) {
            header("location: ../Presentation/Admin/competences/index.php?error=stmtfailed");
            exit();
        }
    
        $competencesData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $competenceInfo = [];
    
        // Process data and populate $competenceInfo
        foreach ($competencesData as $competence) {
            $gestionCompetence = new Competences();
            $gestionCompetence->setId($competence['Id']);
            $gestionCompetence->setNom($competence['Nom']);
            $gestionCompetence->setCode($competence['Code']);
            $gestionCompetence->setReference($competence['Reference']);
            $gestionCompetence->setDescription($competence['Description']);
    
            $competenceInfo[] = $gestionCompetence; 
        }

    
        return $competenceInfo;
    }

    // acquérir des compétences
    public function getCompetece($Id) {
        $stmt = $this->pdo->prepare("SELECT * FROM competences WHERE Id = ?");

        if (!$stmt->execute([$Id])) {
            header("location: ../Presentation/Admin/competences/index.php?error=stmtfailed");
            exit();
        }
    
        $competence = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $competenceInfo = [];
        $getCompetence = new Competences();
        $getCompetence->setId($competence['Id']);
        $getCompetence->setNom($competence['Nom']);
        $getCompetence->setCode($competence['Code']);
        $getCompetence->setReference($competence['Reference']);
        $getCompetence->setDescription($competence['Description']);
        
        $competenceInfo[] = $getCompetence;
        
        return $competenceInfo;

    }

    // Ajouter des compétences
    public function AddCompetence($competence)
    {
        $sql = "INSERT INTO `Competences` (`Nom`, `Code`, `Reference`, `Description`) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competence->getNom(), $competence->getCode(), $competence->getReference(), $competence->getDescription()]);

        header('location: ../index.php?success=addCompetencesSuccess');

    }

    // Update Compenent
    public function updateCompetence($dataCompenent) {
        $stmt = $this->pdo->prepare("UPDATE competences
            SET Nom = ?,
            Code = ?,
            Reference = ?,
            Description = ?
            WHERE Id = ?");
    
        $competence = $dataCompenent[0];
    
        if (!$stmt->execute([$competence->getNom(), $competence->getCode(), $competence->getReference(), $competence->getDescription(), $competence->getId()])) {
            $stmt->closeCursor();
            header("location: ../Presentation/Admin/competences/edit-competences.php?error=stmtfailed");
            exit();
        }
    
        $stmt->closeCursor();
        header("location: ../index.php?success=updateSuccess");

    }

    // Delete Compenent 
    public function DeleteCompetence($competenceID)
    {
        $sql = "DELETE FROM competences WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);  
        $stmt->execute([$competenceID]);
   
        header("location: ../index.php?success=deleteSuccess");
    }
}