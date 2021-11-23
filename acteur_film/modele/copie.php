<?php
	include("manager.php");
    include("acteur.php");
    include("film.php");
    include("user.php");
    $db = new manager();
    $film = new film($db);
    $acteur = new acteur($db);
    $user = new user($db);
    session_start();
?>