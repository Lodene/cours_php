<?php
    class Cfilm {
        private $id;
        private $nom_film;
        private $annee;
        private $score;
        private $nbVotants;

        private $last_id;

        public function  __construct($id = NULL, $nom_film = '', $annee = '', $score = '', $nbVotants = '') {
            $this->id = $last_id + 1;
            $last_id = $last_id + 1;
            $this->nom_film = $nom_film;
            $this->annee = $annee;
            $this->score = $score;
            $this->nbVotants = $nbVotants;
        }

        
        /* ---------------------- SET ---------------------- */
        private function setId($id) {
            $this->id = $id;
        }

        public function setNom_film($nom_film) {
            $this->nom_film = $nom_film;
        }

        public function setAnnee($annee) {
            $this->annee = $annee;
        }

        public function setScore($score) {
            $this->score = $score;
        }

        public function setNbVotants($nbVotants) {
            $this->nbVotants = $nbVotants + 1;
        }


        /* ---------------------- GET ---------------------- */

        public function getId() {
            return $this->id;
        }

        public function getNom_film() {
            return $this->nom_film;
        }

        public function getAnnee() {
            return $this->annee;
        }

        public function getScore() {
            return $this->score;
        }

        public function getNbVotants() {
            return $this->nbVotants;
        }
    }
?>