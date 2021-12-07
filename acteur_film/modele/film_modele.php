<?php
	require_once("./controler/film_controler.php");
    class film extends manager{

        public function ajout_film($newfilm){

			$query = $this->bdd->prepare('SELECT * FROM film f WHERE nom_film = :nom_film AND annee = :annee AND score = :score AND nbVotants = :nbVotants');
            $query->execute(array('nom_film' => $newfilm->getNom_film(), 'annee' => $newfilm->getAnnee(), 'score'=> $newfilm->getScore(), 'nbVotants' => $newfilm->getNbVotants()));

            $count = $query->rowCount();

            if($count == 0){
                $query = $this->bdd->prepare("INSERT into film (nom_film, annee, score, nbvotants)
                                VALUES (:nom_film, :annee, :score, :nbVotants)");
                $query->execute(array(':nom_film' => $newfilm->getNom_film(), ':annee' => $newfilm->getAnnee(), ':score'=> $newfilm->getScore(), ':nbVotants' => $newfilm->getNbVotants()));

                return true;
            } else {
            	return false;
            }
		}

        public function detailfilm($idfilm){
			$query2 = $this->bdd->prepare("SELECT * FROM film WHERE id=?");
			$query2 -> execute(array($idfilm));
			$res = $query2->fetchall();
			if (isset($res[0]['nom_film']) && isset($res[0]["annee"]) && isset($res[0]["score"]) && isset($res[0]["nbVotants"])){
				$objet = new FilmC($res[0]["nom_film"], $res[0]['annee'], $res[0]['score'], $res[0]['nbVotants'], $res[0]['id']);
				return $objet;
			} else {
				return false;
			}
		}

        public function film(){
			$query = $this->bdd->prepare('SELECT * FROM film');
			$query -> execute();
			$tabquery = $query->fetchall();
			for ($i=0; $i < count($tabquery); $i++) { 
				$objet[$i] = new filmC($tabquery[$i]['nom_film'], $tabquery[$i]['annee'], $tabquery[$i]['score'], $tabquery[$i]['nbVotants'], $tabquery[$i]['id']);
			}
			
			return $objet;
		}

        public function film_casting(){
			$query = $this->bdd->prepare('SELECT * FROM film f
      										INNER JOIN casting c ON c.acteur_id = f.id');
			$query -> execute();
			return $query;
		}

		public function ajout_vote($idfilm){
			$query = $this->bdd->prepare("SELECT * FROM film WHERE id=:id");
    		$query -> execute(array(':id' => $idfilm));
			$query = $query->fetchAll();
			$objet = new filmC($query[0]['nom_film'], $query[0]['annee'], $query[0]['score'], $query[0]['nbVotants'], $query[0]['id']);
			$newNbVotants = $objet->getNbVotants() + 1;
		    $nbvotant = $this->bdd->prepare("UPDATE film SET nbVotants = $newNbVotants WHERE id=:id");
		    $nbvotant -> execute(array(':id' => $idfilm));
		}
    }
?> 