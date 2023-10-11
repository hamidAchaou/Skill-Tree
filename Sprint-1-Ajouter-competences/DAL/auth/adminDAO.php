<?php
// define('__ROOT__', dirname(dirname(__FILE__)));
include_once "../../loader.php";
// include_once "../../DAL/dbh.php";
    class AdminDAO extends Dbh{
    

      protected function getAdmin($email, $password) {
        $stmt = $this->connect()->prepare('SELECT * FROM person WHERE `Email` = ?');
    
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../../Presentation/auth/login.php?error=stmtfailed");
            exit();
        }
    
        if ($stmt->rowCount() == 0) {
            // $stmt = null;
            header("location: ../../Presentation/auth/login.php?error=usernotfoundEmail");
            exit();
        }
    
        $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);    
        
        $checkPass = password_verify($password, $loginData[0]["Password"]);
    
        echo $checkPass;
        // echo $password;
        // echo $loginData[0]["Password"];
        // $hashedpass = password_hash($password, PASSWORD_DEFAULT);
        // echo $hashedpass;
    

          if ($checkPass == false) {
      
            $stmt = null;
            header("location: ../../Presentation/auth/login.php?error=worningpassword");
            exit();
          } else
          if ($checkPass == true) {
            
            $stmt = $this->connect()->prepare("SELECT * FROM person WHERE Email = ? AND Password = ?");
      
            if (!$stmt->execute(array($email, $loginData[0]['Password']))) {
              $stmt = null;
              header('location: ../../Presentation/auth/login.php?error=stmtfailed');
              exit();
            }
            if ($stmt->rowCount() == 0) {
              $stmt = null;
              header('location: ../../Presentation/auth/login.php?error=usernotfoundPass');
              exit();
            }
      
            $admin = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
            session_start();
            $_SESSION['Nom'] = $admin[0]["Nom"];
            $_SESSION['Prenom'] = $admin[0]["Prenom"];
            $_SESSION['Id_Admin'] = $admin[0]["Id"];            
            $stmt = null;
            header('location: ../../Presentation/index.php?success=usernotfoundPass');

          }
            
        }
    }

?>