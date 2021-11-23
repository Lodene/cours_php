<?php
    class user_controller {

        //utilisateur
		protected $id_user;
		protected $type;
		protected $pseudo;
		protected $mdp;

        public function __construct($id_user = NULL, $type = '', $pseudo = '', $mdp = '') {
            $this->id_user = NULL;
            $this->type = $type;
            $this->pseudo = $pseudo;
            $this->mdp = $mdp;
        }

        /* ---------------------- SET ---------------------- */
        public function setid_user($id_user){
            $this->id = $id;
        }

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
        public function getid_user(){
            return $this->id_user;
        }

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