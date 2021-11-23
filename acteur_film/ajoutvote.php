<?php
    include("modele/copie.php");
   
    $insert = $film->ajout_vote($_GET['id']);

    header("location: detailfilm.php?id=". $_GET['id']);
?>