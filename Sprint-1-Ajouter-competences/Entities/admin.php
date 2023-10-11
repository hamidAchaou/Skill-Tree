<?php

class Admin {
    private $Nom;
    private $Prenom;
    private $Email;
    private $Password;
    private $role;

    public function setNom($Nom) {
        $this->Nom = $Nom;
    }

    public function setPrenom($prenom) {
        $this->Prenom = $prenom;
    }

    public function setPassword($password) {
        $this->Password = $password;
    }

    public function setRole($role) {
        $this->role = $role;
    }
    
    public function setEmail($email) {
        $this->Email = $email;
    }

    public function getNom() {
        return $this->Nom;
    }
    
    public function getPrenom() {
        return $this->Prenom;
    }
    
    public function getPassword() {
        return $this->Password;
    }
    
    public function getEmail() {
        return $this->Email;
    }

    public function getRole() {
        return $this->role;
    }
}