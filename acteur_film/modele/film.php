<?php
    class film extends manager{

        
        
        public function ajout_film($nom_film, $annee, $score, $nbVotants){

			$query = $this->bdd->prepare('SELECT * FROM film f WHERE nom_film = :nom_film AND annee = :annee AND score = :score AND nbVotants = :nbVotants');
            $query->execute(array('nom_film' => $nom_film, 'annee' => $annee, 'score'=> $score, 'nbVotants' => $nbVotants));

            $count = $query->rowCount();

            if($count == 0){
                $query = $this->bdd->prepare("INSERT into `film` (nom_film, annee, score, nbvotants)
                                VALUES (:nom_film, :annee, :score, :nbvotants)");
                $query->execute(array(':nom_film' => $nom_film, ':annee' => $annee, ':score'=> $score, ':nbvotants' => $nbVotants));
                return true;
            } else {
            	return false;
            }
		}

        public function detailfilm($idfilm){
			$query2 = $this->bdd->prepare("SELECT * FROM film WHERE id=?");
			$query2 -> execute(array($idfilm));
			return $query2;
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