<?php
    class filmC {
        private string $nom_film;
        private int $annee;
        private int $score;
        private int $nbVotants;

        public function  __construct($nom_film = '', $annee = '', $score = '', $nbVotants = '') {
            $this->nom_film = $nom_film;
            $this->annee = $annee;
            $this->score = $score;
            $this->nbVotants = $nbVotants;
        }

        
        /* ---------------------- SET ---------------------- */
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