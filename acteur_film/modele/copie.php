<?php
	include("manager_modele.php");
    include("acteur_modele.php");
    include("film_modele.php");
    include("user_modele.php");

    include("./controller/user_controller.php");

    $Mfilm = new film();
    $Macteur = new acteur();
    $Muser = new user();

    $Cuser = new user_controller();

    session_start();
?>