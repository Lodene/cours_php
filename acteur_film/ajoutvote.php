<?php
    include("copie/copie.php");

	$idfilm = $_GET['id'];

	
   
    $insert = $db->ajout_vote($idfilm);

    header("location: detailfilm.php?id=". $idfilm);
?>