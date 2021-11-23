<?php
    include("modele/copie.php");
   
    $insert = $Mfilm->ajout_vote($_GET['id']);

    header("location: detailfilm.php?id=". $_GET['id']);
?>