<?php
    include("modele/copie.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>film</title>
</head>
<body>
    <?php 
    if (isset($_SESSION['type'])){
        if ($_SESSION['type'] == 'admin'){
            echo "<a href='accueil.php'>Revenir a la page d'accueil</a> <br />";
            echo "<p><a href='ajoutfilm.php'>Ajouter un film</a>  </br></br></br>";
           
        } else {
            echo "<a href='accueil.php'>Revenir a la page d'accueil</a> <br /> <br />";
        } 
    }        
        $objet = $Mfilm->film();

        for ($i=0; $i < count($objet); $i++) {
            $a = 0;
            ?>
                <a href="detailfilm.php?id=<?php  echo $objet[$i]->getId_Film();?>"> <?php echo $objet[$i]->getNom_film() . "<br>"?></a><?php
                $acteurobjet = $Macteur->participer($objet[$i]->getId_Film());
                if ($acteurobjet != false){
                    for ($p=0; $p < count($acteurobjet); $p++) { 
                        $a++;
                        echo $acteurobjet[$p]->getnom_acteur();
                        echo $acteurobjet[$p]->getprenom_acteur();
                        echo "<br>";
                    }
                }
                if($a == 0){
                    echo "Pas d'acteur <br>";
                }
                echo "<br>";
                
        }
       

    ?>

</body>
</html>