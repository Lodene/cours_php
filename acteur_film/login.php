<?php 
    include("./modele/copie.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
    <h1> Se connecter </h1>
    <form action="" method="post">
            Pseudo :  <input type="text" name="pseudo" />
            Mot de passe :  <input type="password" name="mdp" />
            <input type="submit" name="submit" />   
    </form>
    <a href="register.php">se créer un compte</a>
    <?php 
    if (!empty($_POST['mdp']) AND isset($_POST['pseudo'])){
        $test = $user->seconnecter($_POST['pseudo'], $_POST["mdp"]);
        echo $test;
        if ($test != false){
            header('location: accueil.php');
        } else {
            echo "error";
        }
    }
    ?>
</body>
</html>