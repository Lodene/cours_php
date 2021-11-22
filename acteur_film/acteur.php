<?php 
    include("copie/copie.php");

try{
    ?>
    <a href="ajoutacteur.php">Ajouter un acteur</a> </p> 
    <a href="accueil.php">Revenir a la page d'accueil</a> <br /> <br />
    <?php
    $query = $db->film_casting();
    $br = $query->fetchAll();

    $toutquery = $db->acteur();
    $br2 = $toutquery->fetchAll();

    foreach ($br2 as $tf) {
        $a = 0;
        ?> <strong> <?php
        echo $tf['nom_acteur']. " ";
        echo $tf['prenom_acteur'] . ", ";
        ?> </strong> <?php
        $a = 0;
        foreach($br as $f){
            if($tf['id_acteur'] == $f['acteur_id']){
                $a++;
                echo $f['nom_film']. " ";
            } 
        }
        if ($a == 0) {
            echo "Pas de film";
        }
        echo "<br>";
    }    
} catch (Exception $e){
    echo "coup dur";
    exit ('Erreur : '.$e->getMessage());
    }
?>