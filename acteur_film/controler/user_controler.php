<?php
    class userC {

        //utilisateur
		protected $type;
		protected $pseudo;
		protected $mdp;

        public function __construct($type = '', $pseudo = '', $mdp = '') {
            $this->type = $type;
            $this->pseudo = $pseudo;
            $this->mdp = $mdp;
        }

        /* ---------------------- SET ---------------------- */
        public function settype($type){
            $this->type = $type;
        }

        public function setpseudo($pseudo){
            $this->pseudo = $pseudo;
        }

        public function setmdp($mdp){
            $this->mdp = $mdp;
        }


        /* ---------------------- GET ---------------------- */
        public function gettype(){
            return $this->type;
        }

        public function getpseudo(){
            return $this->pseudo;
        }

        public function getmdp(){
            return $this->mdp;
        }
        
    }