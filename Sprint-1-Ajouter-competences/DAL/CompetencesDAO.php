<?php 
include_once __DIR__ ."../../loader.php";
class CompetencesDAO
{
    private $pdo = null;

    public function __construct()
    {
        $databaseConnection = new Dbh();
        $this->pdo = $databaseConnection->connect();
    }

    public function getAllCompetences() {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM competences");
    
            if (!$stmt->execute()) {
                throw new Exception("Failed to execute the SQL query.");
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
        } catch (Exception $e) {
            throw $e;
        }
    }
    

    // acquérir des compétences
    public function getCompetece($Id) {
        $stmt = $this->pdo->prepare("SELECT * FROM competences WHERE Id = ?");

        if (!$stmt->execute([$Id])) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
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
        try {
            $sql = "INSERT INTO `Competences` (`Nom`, `Code`, `Reference`, `Description`) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$competence->getNom(), $competence->getCode(), $competence->getReference(), $competence->getDescription()]);
    
            header('location: ../../Presentation/index.php?success=addCompetencesSuccess');
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            header('location: ../../Presentation/index.php?error=databaseError');
            die("An error occurred. Please try again later.");
        } catch (Exception $e) {
            error_log("An error occurred: " . $e->getMessage());
            header('location: ../../Presentation/index.php?error=genericError');
            die("An error occurred. Please try again later.");
        }
    }
    

    // Update Component
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
            throw new Exception("stmtfailed");
        }

        $stmt->closeCursor();
        header("location: ../index.php?success=updateSuccess");
    }

// Delete Component
public function DeleteCompetence($competenceID)
{
    try {
        $sql = "DELETE FROM competences WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competenceID]);

        header("location: ../index.php?success=deleteSuccess");
    } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
        header("location: ../index.php");
    } catch (Exception $e) {
        throw new Exception("stmtfailed");
        error_log("An error occurred: " . $e->getMessage());
        header("location: ../index.php?error=genericError");
    }
}

}