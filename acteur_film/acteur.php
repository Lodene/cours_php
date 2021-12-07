<?php 
    include("modele/copie.php");
?>
<a href="accueil.php">Revenir a la page d'accueil</a> <br /> <br />
<?php
    if ($_SESSION['type'] == 'admin'){
        echo "<a href='ajoutacteur.php'>Ajouter un acteur</a> </p></br></br></br>";
    } 
?>
    
    
<?php
        $objet = $Macteur->acteur();

    for ($i=0; $i < count($objet); $i++) { 
        $a = 0;
        echo $objet[$i]->getnom_acteur();
        echo $objet[$i]->getprenom_acteur();
        echo '<br>';
        $filmobjet = $Mfilm->film_casting($objet[$i]->getidActeur());
        if ($filmobjet != false){
           
            for ($p=0; $p < count($filmobjet); $p++) { 
                ?><strong><?php
                echo $filmobjet[$p]->getNom_film();
                ?></strong><?php
                echo "<br>";
            }
        } else {
            echo "Pas de film <br>";
        }
        echo "<br>";
    }
?>