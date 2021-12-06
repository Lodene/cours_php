<?php
	require_once('./controler/user_controler.php');
    class user extends manager {
		
        public function seconnecter($objet){
			if (!empty($objet->getpseudo()) and !empty($objet->getmdp())){
				$query = $this->bdd->prepare("SELECT * FROM `utilisateur` WHERE pseudo = :pseudo AND mdp = :mdp");
            	$salut = $query->execute(array(':pseudo' => $objet->getpseudo(), ':mdp' => hash('sha256', $objet->getmdp())));
				$_SESSION['pseudo'] = $objet->getpseudo();
				$_SESSION['type'] = $objet->gettype();
            	return true;
			} else {
				return false;
			}
		}

		public function creercompte($objet){
			var_dump($objet);
			echo "<br>";
			var_dump($objet->getmdp());
			echo "<br>";
			var_dump($objet->getpseudo());
			echo "<br>";
			if (!empty($objet->getpseudo()) and !empty($objet->getmdp())){
				$queryun = $this->bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");
				$test = $queryun->execute(array(':pseudo' => $objet->getpseudo()));
				$count = $queryun->fetchALL();
				$nb = count($count);
				if ($nb == 0){
					var_dump($objet->getmdp());
					$verif = $this->verif_mdp($objet->getmdp());
					if ($verif == true){
						$querydeux = $this->bdd->prepare("INSERT into `utilisateur` (pseudo, mdp) VALUES (:pseudo, :mdp)");
						$testdeux = $querydeux ->execute(array(':pseudo' => $objet->getpseudo(), ':mdp' => hash('sha256', $objet->getmdp()))); 
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