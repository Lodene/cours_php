<?php
    class acteurC {

        private $nom_acteur;
        private $prenom_acteur;
        private $idActeur;

        public function __construct($nom_acteur = '', $prenom_acteur = '', $idActeur) {
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

        public function setId($idActeur){
            $this->idActeur = $idActeur;
        }

        /* ---------------------- GET ---------------------- */
        public function getnom_acteur(){
            return $this->nom_acteur;
        }

        public function getprenom_acteur(){
            return $this->prenom_acteur;
        }

        public function getidActeur(){
            return $this->idActeur;
        }

        
    }