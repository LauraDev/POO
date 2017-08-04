<?php

// Création d'une classe - contenant proprietes(var) et methodes(fontions)
class Auteur {
    private $nom, 
            $prenom, 
            $email; 

// Creation constructeur - pour attribuer valeur a mes 
    public function __construct(
        $nom, 
        $prenom, 
        $email 
        ) {

            $this->nom     =$nom;
            $this->prenom  =$prenom;
            $this->email   =$email;
        
        } // fin constructeur


        // GETTERS
        public function getNom() {
            return $this->nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getNomComplet() {
            return $this->nom.' '.$this->prenom;
        }

        // SETTERS
        public function setNom($newNom) {
            $this->titre = $newNom;
        }
        public function setPrenom($newAccroche) {
            $this->titre = $newAccroche;
        }
        public function setEmail($newEmail) {
            $this->titre = $newEmail;
        }
        
}  // fin de la classe