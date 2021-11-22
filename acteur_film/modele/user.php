<?php
    class user {

		protected function _constr($db){
			$db = $this->$db;
		}
		
        public function seconnecter($pseudo, $mdp){
			echo $pseudo . $mdp;
			if (!empty($pseudo) and !empty($mdp)){

				$query = $this->bdd->prepare("SELECT * FROM `utilisateur` WHERE pseudo = :pseudo AND mdp = :mdp");
            	$salut = $query->execute(array(':pseudo' => $pseudo, ':mdp' => hash('sha256', $mdp)));
            	return $query;
			} else {
				echo "aled";
			}
		}
		
    }
?>