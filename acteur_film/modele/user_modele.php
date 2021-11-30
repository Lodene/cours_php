<?php
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
			if (isset($_SESSION['pseudo'])){
                switch ($todo){
                    case '1':
                        return "Bonjour " . $_SESSION['pseudo'] . " ! Vous etes un " . $_SESSION['type'];
                        break;
					case '2':
						return "<a href='logout.php'>Se déconnecter</a></br>";
						break;
                    default:
                        break;
                }
			} else {
                switch ($todo) {
                    case '1':
                        return "Hésite pas à te co bg";
                        break;
					case '2':
						return "<a href='login.php'>Se connecter</a></br>";
						break;
                    default:
                        break;
                }
				
			}
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