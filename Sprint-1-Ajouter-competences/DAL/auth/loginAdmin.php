<?php
include_once "../dbh.php";
    class LoginAdmin {
    
        private $dbh;

        public function __construct()
        {
            $this->dbh = new Dbh();
        }
    
        protected function connect() {
            return $this->dbh->connect();
        }

        protected function getAdmin($email, $password) {
            $stmt = $this->connect()->prepare('SELECT * FROM clients WHERE `email` = ?');  
            if (!$stmt->execute(array($email))) {
                $stmt = null;
                header("location: ../pages/client-loginSignUp.php?error=stmtfailed");
                exit();
            }
        
            // Fetch the data and verify the password
            $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($clientData && password_verify($password, $clientData['password'])) {
                return $clientData;
            } else {
                header("location: ../pages/client-loginSignUp.php?error=usernotfoundPass");
                exit();
            }

            
        }
    }
?>