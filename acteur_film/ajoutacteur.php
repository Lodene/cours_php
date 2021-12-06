<?php 
    include("modele/copie.php");
    if ($_SESSION['type'] != 'admin'){
        header("location: accueil.php");
    }
     

    ?>
    <h1> Ajout Acteur </h1>
    <a href="accueil.php">Revenir page d'acceuil</a><br />
    <a href="acteur.php">Revenir liste d'acteurs</a><br /><br />
    <form action="" method="get">
            Nom acteur :  <input type="text" name="nom" />
            Prenom acteur :  <input type="text" name="prenom" />
            <input type="submit" name="submit" />   
    </form>

    <?php
    if (isset($_GET['nom']) && !empty($_GET['prenom'])) {
            $objet = new acteurC($_GET['nom'], $_GET['prenom']);
            $insert = $Macteur->ajout_acteur($objet);
            if ($insert == true) {
                echo "L'acteur à été ajouté";
            }else {
                echo "L'acteur existe déjà";
            }
    }
?>

</br>
<a href="film.php">Revenir à la liste de film</a>