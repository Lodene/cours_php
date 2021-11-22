<?php
    include("copie/copie.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
    <h1> Créer un compte </h1>
    <form action="" method="get">
            Pseudo :  <input type="text" name="pseudo" />
            Mot de passe :  <input type="password" name="mdp" />
            <input type="submit" name="submit" />   
    </form>
    <a href="login.php">Se connecter</a>
    <?php 
        if (!empty($_GET['mdp']) AND isset($_GET['pseudo'])){
            echo "début";
            include("connexion.php");

            try{
            $bdd = connectDB();
            $test = $bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");
            $test->execute(array(':pseudo' => $_GET['pseudo']));
            $array = $test->fetchALL();
            $nb = count($array);
            print_r($test->errorInfo());
            if ($nb == 0){
                $query = $bdd->prepare("INSERT into `utilisateur` (pseudo, mdp) VALUES (:pseudo, :mdp)");
                $query->execute(array(':pseudo' => $_GET['pseudo'], ':mdp' => hash('sha256', $_GET['mdp']))); 
                header("location: login.php");
            } else {
                echo "pseudo déjà utilisé";
            }
            
            } catch (Exception $e){
                exit ('Erreur : '.$e->getMessage());
            }
        } else {
            echo "il manque des données fdp";
        }
    ?>
</body>
</html>