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
            Pseudo :  <input type="text" name="pseudo" required/>
            Mot de passe :  <input type="password" name="mdp" required/>
            <input type="submit" name="submit" />   
    </form>
    <a href="login.php">Se connecter</a>
    <?php 
        if (!empty($_POST['mdp']) AND isset($_POST['pseudo'])){
            $objet = new userC('user', $_POST['pseudo'], $_POST["mdp"]);
            $test = $Muser->creercompte($objet);
            if ($test == 0){
                echo "le mdp doit contenir au minimum 1 chiffre, 1 majuscule et 1 minuscule";
            } elseif ($test == 1) {
                echo "le pseudo est déjà utilisé";
            }
        }  
    ?>
</body>
</html>