<?php 
    include("./modele/copie.php");
    if (isset($_SESSION['type'])){
        if ($_SESSION['type'] != 'admin'){
            header("location: accueil.php");
        }
    }

    ?>
    <h1> Ajout film </h1>
    
    <form action="" method="get">
            Nom film :  <input type="text" name="nom" />
            annee :  <input type="number" name="annee" />
            score :  <input type="number" name="score" />
            nbvotants :  <input type="number" name="nbvotants" />
            <input type="submit" name="submit" />   
    </form>

    <?php
    if (isset($_GET['nom']) && !empty($_GET['annee']) && !empty($_GET['score']) && !empty($_GET['nbvotants'])) {
        $newFilm = new filmC($_GET['nom'], $_GET['annee'], $_GET['score'], $_GET['nbvotants'], 0);
        $insert = $Mfilm->ajout_film($newFilm);
        if ($insert == true) {
            echo "Le film à été ajouté . <br />";
        } else {
            echo "Le film existe déjà . <br />";
        }
    }



    
?>

<a href="accueil.php">Revenir page d'acceuil</a><br /><br />
<a href="film.php">Revenir liste films</a><br /><br />