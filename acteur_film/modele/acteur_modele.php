<?php
    require_once("./controler/film_controler.php");
    require_once("./controler/acteur_controler.php");
    class acteur extends manager {
        public function ajout_acteur($objet){
			$query = $this->bdd->prepare('SELECT * FROM acteur f WHERE nom_acteur = :nom AND prenom_acteur = :prenom');
            $query->execute(array('nom' => $objet->getnom_acteur(), 'prenom' => $objet->getprenom_acteur()));
            $count = $query->rowCount();
            if($count == 0){
                $query = $this->bdd->prepare("INSERT into `acteur` (nom_acteur, prenom_acteur)
                                VALUES (:nom, :prenom)");
                $query->execute(array(':nom' => $objet->getnom_acteur(), ':prenom' => $objet->getprenom_acteur()));
                return true;
            } else {
            	return false;
            }
		}

        public function casting(){
            $query = $this->bdd->prepare('SELECT * FROM acteur a
            INNER JOIN casting c ON c.acteur_id = a.id_acteur');
            $query->execute();
            return $query;
        }

        public function participer($idfilm){
            
            $query = $this->bdd->prepare('SELECT * FROM acteur a
                INNER JOIN casting c ON c.acteur_id = a.id_acteur where film_id = :id');
            $query->execute(array(':id' => $idfilm));
            $tabquery = $query->fetchall();
            if (count($tabquery) > 0){
                for ($i=0; $i < count($tabquery); $i++) { 
                    $objet[$i] = new acteurC($tabquery[$i]['nom_acteur'], $tabquery[$i]['prenom_acteur'], $tabquery[$i]['id_acteur']);
                }
                return $objet; 
            }
            return false;
            
        }

        public function acteur_casting($id){
            $i = 0;
            $query = $this->bdd->prepare('SELECT * FROM acteur a INNER JOIN casting c ON c.acteur_id = a.id_acteur where film_id = ?');
            $query->execute(array($id));
            $tabquery = $query->fetchall();
            if (count($tabquery) > 0) {
                foreach ($tabquery as $res){
                    $objet[$i] = new ActeurC($res['nom_acteur'], $res['prenom_acteur'], $res['id_acteur']);
                    $i = $i + 1;
                }
                return $objet;
            } else {
                return false;
            }
            
            
			
		}

        public function acteur(){
			$query = $this->bdd->prepare('SELECT * FROM acteur');
			$query -> execute();
            $tabquery = $query->fetchall();
            for ($i=0; $i < count($tabquery); $i++) { 
				$objet[$i] = new acteurC($tabquery[$i]['nom_acteur'], $tabquery[$i]['prenom_acteur'], $tabquery[$i]['id_acteur']);
			}
			return $objet;
		}

    }
    
?>