<?php 
    include("modele/copie.php");   
      
    $query = $Macteur->acteur_casting($_GET['id']);
    $objet = $Mfilm->detailfilm($_GET['id']);
    if ($objet != false) {
        echo $objet->getNom_film() ."<br>"; ?>
        <p> annee : <?php echo $objet->getAnnee() ."<br>"; ?> </p>
        <p> score : <?php echo $objet->getScore() ."<br>"; ?> </p>
        <p> nombre(s) votant(s) : <?php echo $objet->getNbVotants() ."<br>"; ?> </p>
        <?php
            if (isset($_SESSION['pseudo'])){
                ?><a href="ajoutvote.php?id=<?php echo $_GET['id'];?>"">Voter pour ce film</a><?php
            } else {
                echo "Connectez vous pour pouvoir voter";
            }
        ?>
        <p> acteur(s) : <br> <?php
        if ($query != false) {
            for ($i=0; $i <  count($query); $i++) { 
                echo $query[$i]->getprenom_acteur() . " ";
                echo $query[$i]->getnom_acteur() . ", <br>" ;
            }
        } else {
            echo "Pas d'acteur <br><br>";
        }
        ?> </p> <?php
    } else {
        echo "<br /> erreur <br />";
    }
      

?>
<a href="film.php">Revenir à la page précedente</a>