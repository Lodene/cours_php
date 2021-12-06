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
				$objet = new FilmC($res[0]["nom_film"], $res[0]['annee'], $res[0]['score'], $res[0]['nbVotants']);
				return $objet;
			} else {
				return false;
			}
		}

        public function film(){
			$query = $this->bdd->prepare('SELECT * FROM film');
			$query -> execute();
			return $query;
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
			
    		foreach ($query->fetchAll() as $tf) {
    			$nbvotants = $tf['nbVotants'] + 1;
    		}

		    $nbvotant = $this->bdd->prepare("UPDATE film SET nbVotants = $nbvotants WHERE id=:id");
		    $nbvotant -> execute(array(':id' => $idfilm));
		}
    }
?> 