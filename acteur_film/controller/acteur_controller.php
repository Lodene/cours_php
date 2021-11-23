<?php
    class user_controller {

        //acteur
        protected $id_acteur;
        protected $nom_acteur;
        protected $prenom_acteur;

        public function __construct($id_acteur = NULL, $nom_acteur = '', $prenom_acteur = '') {
            $this->id_acteur = NULL;
            $this->nom_acteur = $nom_acteur;
            $this->prenom_acteur = $prenom_acteur;
        }

        /* ---------------------- SET ---------------------- */
        public function setid_acteur($id_acteur){
            $this->id_acteur = $id_acteur;
        }

        public function setnom_acteur($nom_acteur){
            $this->nom_acteur = $nom_acteur;
        }

        public function setprenom_acteur($prenom_acteur){
            $this->prenom_acteur = $prenom_acteur;
        }


        /* ---------------------- GET ---------------------- */
        public function getid_acteur(){
            return $this->id_acteur;
        }

        public function getnom_acteur(){
            return $this->nom_acteur;
        }

        public function getprenom_acteur(){
            return $this->prenom_acteur;
        }

        
    }