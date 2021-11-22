<?php
    class control_user {
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
    }