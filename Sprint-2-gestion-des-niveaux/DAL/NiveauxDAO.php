<?php 
include_once __DIR__ ."../../loader.php";
class NiveauxDAO
{
    private $pdo = null;

    public function __construct()
    {
        $databaseConnection = new Dbh();
        $this->pdo = $databaseConnection->connect();
    }

    // Obtenez toutes les Niveaux
    public function getAllNiveaux() {
        $stmt = $this->pdo->prepare("SELECT * FROM niveauxs");
    
        if (!$stmt->execute()) {
            header("location: ../../Presentation/index.php?error=stmtfailed");
            exit();
        }
    
        $NiveauxData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $NiveauxInfo = [];
    
        // Process data and populate $NiveauxInfo
        foreach ($NiveauxData as $Niveaux) {
            $gestionNiveaux = new Niveaux();
            $gestionNiveaux->setId($Niveaux['Id']);
            $gestionNiveaux->setNom($Niveaux['Nom']);
            $gestionNiveaux->setDescription($Niveaux['Description']);
    
            $NiveauxInfo[] = $gestionNiveaux; 
        }

    
        return $NiveauxInfo;
    }

    // acquérir des Niveaux
    public function getNiveaux($Id) {
        $stmt = $this->pdo->prepare("SELECT * FROM niveauxs WHERE Id = ?");

        if (!$stmt->execute([$Id])) {
            header("location: ../../Presentation/indexe.php?error=stmtfailed");
            exit();
        }
    
        $niveaux = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $niveauxInfo = [];
        $getNiveaux = new Niveaux();
        $getNiveaux->setId($niveaux['Id']);
        $getNiveaux->setNom($niveaux['Nom']);
        $getNiveaux->setDescription($niveaux['Description']);
        
        $niveauxInfo[] = $getNiveaux;
        
        return $niveauxInfo;

    }

    // Ajouter des Niveaux
    public function AddNiveaux($Niveaux)
    {
        $sql = "INSERT INTO `niveauxs` (`Nom`, `Description`) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$Niveaux->getNom(), $Niveaux->getDescription()]);

        header('location: ../../Presentation/index.php?success=addNiveauxsSuccess');

    }

    // Update Compenent
    public function updateNiveaux($dataCompenent) {
        $stmt = $this->pdo->prepare("UPDATE niveauxs
            SET Nom = ?,
            Description = ?
            WHERE Id = ?");
    
        $Niveaux = $dataCompenent[0];
    
        if (!$stmt->execute([$Niveaux->getNom(), $Niveaux->getDescription(), $Niveaux->getId()])) {
            $stmt->closeCursor();
            header("location: ../Presentation/edit-Niveauxs.php?error=stmtfailed");
            exit();
        }
    
        $stmt->closeCursor();
        header("location: ../index.php?success=updateSuccess");
    }

    // Delete Compenent 
    public function DeleteNiveaux($NiveauxID)
    {
        $sql = "DELETE FROM niveauxs WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$NiveauxID]);
   
        header("location: ../index.php?success=deleteSuccess");
    }
}