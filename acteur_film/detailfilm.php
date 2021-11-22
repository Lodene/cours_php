<?php 
    include("copie/copie.php");   

        try{        
            $query = $db->acteur_casting();
            $toutquery = $db->detailfilm($_GET['id']);

            foreach ($toutquery->fetchAll() as $tf) {
                $a = 0;
                    $nbvotants = $tf['nbVotants'] + 1;
                    echo $tf['nom_film']."<br>"; ?>
                    <p> annee : <?php echo $tf['annee']."<br>"; ?> </p>
                    <p> score : <?php echo $tf['score']."<br>"; ?> </p>
                    <p> nombre(s) votant(s) <?php echo $tf['nbVotants']."<br>"; ?> </p>
                    <a href="ajoutvote.php?id=<?php echo $tf['id'];?>">Voter pour ce film</a>
                    <p> acteur(s) :  <?php
                foreach($query->fetchAll() as $f){
                    if($tf['id'] == $f['film_id']){
                        $a = $a + 1;

                        if($a > 0){
                            
                            echo $f['nom_acteur'];
                            echo $f['prenom_acteur'] . ", " ;
                            
                        } 
                    }
                }

                ?> </p> <?php
               
                if($a == 0){
                    echo "Pas d'acteur <br>";
                }
                echo "<br>";

            }    
        } catch (Exception $e){
            echo "coup dur";
            exit ('Erreur : '.$e->getMessage());
            }

?>
<a href="film.php">Revenir à la page précedente</a>