<?php
define('Root', dirname(__FILE__));

include_once Root . "/../DAL/dbh.php";
include_once Root . "/../Entities/competences.php";
include_once Root . "/../BLL/CompetencesBLL.php";
include_once Root . "/../DAL/CompetencesDAO.php";
// include_once Root . "./Entities/admin.php";

include_once Root . "/../Entities/niveaux.php";
include_once Root . "/../BLL/niveauxBLO.php";
include_once Root . "/../DAL/niveauxDAO.php";
?>