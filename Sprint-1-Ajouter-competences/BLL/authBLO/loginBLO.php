<?php
include_once "../../DAL/auth/adminDAO.php";
class LoginBLO extends AdminDAO {
    private $email;
    private $password;
    private $role;

    public function __construct($dataAdmin) {

        $this->email = $dataAdmin->getEmail();
        $this->password = $dataAdmin->getPassword();
        $this->role = $dataAdmin->getRole();
    }

    public function loginAdmin() {
        if ($this->emptyInput() == false) {
            header("location: ../../Presentation/ajouter-competences.php?error=emptyinput");
            exit();
        }
        
        $adminData = $this->getAdmin($this->email, $this->password, $this->role);
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

