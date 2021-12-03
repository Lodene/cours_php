<?php

	class manager
	{
		protected $bdd;
		
		function __construct($host = 'localhost', $user = 'root', $db = 'cours php s3', $pwd = '') {
			$this->bdd = new PDO ('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pwd);
		}	

	}

?>