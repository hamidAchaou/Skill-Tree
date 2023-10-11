<?php
include_once "../../DAL/auth/adminDAO.php";
class LoginBLO extends AdminDAO {
    private $email;
    private $password;

    public function __construct($dataAdmin) {

        $this->email = $dataAdmin->getEmail();
        $this->password = $dataAdmin->getPassword();
    }

    public function loginAdmin() {
        if ($this->emptyInput() == false) {
            header("location: ../../Presentation/ajouter-competences.php?error=emptyinput");
            exit();
        }
        
        $adminData = $this->getAdmin($this->email, $this->password);
        return $adminData;
    }

    private function emptyInput()
    {
        if (empty($this->email) || empty($this->password)) {
            return false;
        } else {
            return true;
        }
    }
}

