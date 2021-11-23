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
        if ($_SESSION["type"] == 'admin'){
            echo "<a href='accueil.php'>Revenir a la page d'accueil</a> <br />";
            echo "<p><a href='ajoutfilm.php'>Ajouter un film</a>  </br></br></br>";
           
        } else {
            echo "<a href='accueil.php'>Revenir a la page d'accueil</a> <br /> <br />";
        }   

        $query = $acteur->acteur_casting();
        
        $toutquery = $film->film();
        
        //$appelle = $film->listeacteurfilm($query, $toutquery);   

        $br = $query->fetchAll();
        $br2 = $toutquery->fetchAll();
        foreach ($br2 as $tf) {
            $a = 0;
            ?>
                <a href="detailfilm.php?id=<?php echo $tf['id']; ?>">
                <?php echo $tf['nom_film']."<br>"; ?>
                </a>
            <?php
            foreach($br as $f){
                if($tf['id'] == $f['film_id']){
                    $a = $a + 1;
                    if($a > 0){
                        ?> <strong> <?php
                        echo $f['nom_acteur'];
                        echo $f['prenom_acteur']."<br>";
                        ?> </strong> <?php
                    } 
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