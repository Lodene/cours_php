<?php
    class acteur extends manager {
        
        

        public function ajout_acteur($nom, $prenom){
			$query = $this->bdd->prepare('SELECT * FROM acteur f WHERE nom_acteur = :nom AND prenom_acteur = :prenom');
            $query->execute(array('nom' => $nom, 'prenom' => $prenom));
            $count = $query->rowCount();

            if($count == 0){
                $query = $this->bdd->prepare("INSERT into `acteur` (nom_acteur, prenom_acteur)
                                VALUES (:nom, :prenom)");
                $query->execute(array(':nom' => $nom, ':prenom' => $prenom));
                return true;
            } else {
            	return false;
            }
		}


        public function acteur_casting (){
			$query = $this->bdd->prepare('SELECT * FROM acteur a
              INNER JOIN casting c ON c.acteur_id = a.id_acteur');
            $query->execute();
            return $query;
		}

        public function acteur(){
			$query = $this->bdd->prepare('SELECT * FROM acteur');
			$query -> execute();
			return $query;
		}

    }
    
?>