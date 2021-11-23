<?php
	include("manager_modele.php");
    include("acteur_modele.php");
    include("film_modele.php");
    include("user_modele.php");

    include("./controller/user_controller.php");
    include("./controller/acteur_controller.php");

    $Mmanager = new manager();
    $Mfilm = new film();
    $Macteur = new acteur();
    $Muser = new user();

    $Cuser = new user_controller();
    $Cacteur = new acteur_controller();

    session_start();
?>