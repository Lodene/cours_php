<?php
    include("modele/copie.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
    <h1> Créer un compte </h1>
    <form action="" method="post">
            Pseudo :  <input type="text" name="pseudo" />
            Mot de passe :  <input type="password" name="mdp" />
            <input type="submit" name="submit" />   
    </form>
    <a href="login.php">Se connecter</a>
    <?php 
        if (!empty($_POST['mdp']) AND isset($_POST['pseudo'])){
            $test = $user->creercompte($_POST['pseudo'], $_POST["mdp"]);
        }  
    ?>
</body>
</html>