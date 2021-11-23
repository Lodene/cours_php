<?php
	/**
	 * 
	 */
	class manager
	{
		protected $bdd;

		//acteur
        protected $id_acteur;

        //film
		protected $id;
		protected $nom_film;
		protected $annee;
		protected $score;
		protected $nbVotants;

		//utilisateur
		protected $id_user;
		protected $type;
		protected $pseudo;
		protected $mdp;

		//casting
		protected $film_id;
		protected $acteur_id;
		
		function __construct($host = 'localhost', $user = 'root', $db = 'cours php s3', $pwd = ''){
			$this->bdd = new PDO ('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pwd);
		}	

	}

?>