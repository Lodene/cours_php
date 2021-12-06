<?php
	include("manager_modele.php");
    include("acteur_modele.php");
    include("film_modele.php");
    include("user_modele.php");

    $Mmanager = new manager();
    $Mfilm = new film();
    $Macteur = new acteur();
    $Muser = new user();


    session_start();
?>