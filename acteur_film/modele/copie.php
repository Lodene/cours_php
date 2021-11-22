<?php
	include("manager.php");
    include("acteur.php");
    include("film.php");
    include("user.php");
    $db = new manager();
    $film = new film();
    $acteur = new acteur();
    $user = new user();
    session_start();
?>