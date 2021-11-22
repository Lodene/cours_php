<?php 
    include("class/connexion.php");
    $db = new connexion();
    session_start();
    if ($_SESSION['type'] != 'admin'){
        header("location: accueil.php");
    }
     

    ?>
    <h1> Ajout Acteur </h1>
    <a href="accueil.php">Revenir page d'acceuil</a><br />
    <a href="acteur.php">Revenir liste d'acteurs</a><br />
    <form action="" method="get">
            Nom acteur :  <input type="text" name="nom" />
            Prenom acteur :  <input type="text" name="prenom" />
            <input type="submit" name="submit" />   
    </form>

    <?php
    if (isset($_GET['nom']) && !empty($_GET['prenom'])) {
        try{
            $nom = $_GET['nom'];
            $prenom = $_GET['prenom'];
            $insert = $db->ajout_acteur($nom, $prenom);
            if ($insert == true) {
                echo "L'acteur à été ajouté";
            }else {
                echo "L'acteur existe déjà";
            }

        } catch (Exception $e){
            print_r($query->errorInfo());
            echo "coup dur </br>";
            exit ('Erreur : '.$e->getMessage());
            }
    }
?>

</br>
<a href="film.php">Revenir à la liste de film</a>