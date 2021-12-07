<?php 
    include("modele/copie.php");
?>
    <h1> Ajout Acteur </h1>
    <a href="accueil.php">Revenir page d'acceuil</a><br />
    <a href="acteur.php">Revenir liste d'acteurs</a><br /><br />
    <form action="" method="get">
            Nom acteur :  <input type="text" name="nom" required/>
            Prenom acteur :  <input type="text" name="prenom" required/>
            <input type="submit" name="submit" />   
    </form>

    <?php
    if (isset($_GET['nom']) && !empty($_GET['prenom'])) {
        $tabnom = str_split($_GET['nom']);
        $tabprenom = str_split($_GET['prenom']);
        $verif = true;
        for ($i=0; $i < count($tabnom); $i++) { 
            if  (!ctype_digit($tabnom[$i]) == false || !ctype_punct($tabnom[$i]) == false){
                $verif = false;
            } 
        }
        for ($i=0; $i < count($tabprenom); $i++) { 
            if  (!ctype_digit($tabprenom[$i]) == false || !ctype_punct($tabprenom[$i]) == false){
                $verif = false;
            } 
        } 
        if ($verif == true){
            $objet = new acteurC($_GET['nom'], $_GET['prenom']);
            $insert = $Macteur->ajout_acteur($objet);
            if ($insert == true) {
                echo "L'acteur à été ajouté";
            }else {
                echo "L'acteur existe déjà";
            }
        } else {
            echo "Pas de chiffre ni de carractère spécial svp <br>";
        }        
    }
?>

</br>
<a href="film.php">Revenir à la liste de film</a>