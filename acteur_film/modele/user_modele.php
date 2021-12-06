<?php
	require_once('./controler/user_controler.php');
    class user extends manager {
		
        public function seconnecter($pseudo, $mdp){
			if (!empty($pseudo) and !empty($mdp)){

				$query = $this->bdd->prepare("SELECT * FROM `utilisateur` WHERE pseudo = :pseudo AND mdp = :mdp");
            	$salut = $query->execute(array(':pseudo' => $pseudo, ':mdp' => hash('sha256', $mdp)));

				foreach ($query->fetchAll() as $tf) {
					$_SESSION['pseudo'] = $tf['pseudo'];
					$_SESSION['type'] = $tf['type'];
				}
            	return true;
			} else {
				return false;
			}
		}

		public function creercompte($pseudo, $mdp){
			if (!empty($pseudo) and !empty($mdp)){
				$queryun = $this->bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");
				$test = $queryun->execute(array(':pseudo' => $pseudo));
				$count = $queryun->fetchALL();
				$nb = count($count);
				if ($nb == 0){
					$verif = $this->verif_mdp($mdp);
					if ($verif == true){
						$objet = 
						$querydeux = $this->bdd->prepare("INSERT into `utilisateur` (pseudo, mdp) VALUES (:pseudo, :mdp)");
						$testdeux = $querydeux ->execute(array(':pseudo' => $pseudo, ':mdp' => hash('sha256', $mdp))); 
						header("location: login.php");
					} else {
						return 0;
					}
				} else {
					return 1;
				}
			}
		}

		public function co_deco($todo){
			
		}

		public function verif_mdp($mdp){
			$majuscule = preg_match('@[A-Z]@', $mdp);
			$minuscule = preg_match('@[a-z]@', $mdp);
			$chiffre = preg_match('@[0-9]@', $mdp);
			if ($majuscule == false OR $minuscule == false or $chiffre == false){
				return false;
			} else {
				return true;
			}
		}
		
    }
?>