<?php
    class acteurC {

        protected $nom_acteur;
        protected $prenom_acteur;

        public function __construct($nom_acteur = '', $prenom_acteur = '') {
            $this->nom_acteur = $nom_acteur;
            $this->prenom_acteur = $prenom_acteur;
        }

        /* ---------------------- SET ---------------------- */
        public function setnom_acteur($nom_acteur){
            $this->nom_acteur = $nom_acteur;
        }

        public function setprenom_acteur($prenom_acteur){
            $this->prenom_acteur = $prenom_acteur;
        }


        /* ---------------------- GET ---------------------- */
        public function getnom_acteur(){
            return $this->nom_acteur;
        }

        public function getprenom_acteur(){
            return $this->prenom_acteur;
        }

        
    }