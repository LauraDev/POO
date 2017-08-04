<?php

// Création d'une classe - contenant proprietes(var) et methodes(fontions)
class Categorie {
    private $libelle, $collectionArticles =[];

// Creation constructeur - pour attribuer valeur a mes 
    public function __construct(
        $libelle
        // $collectionArticles =[]
        ) {

            $this->libelle = $libelle;
            // $this->articles = $articles;
        
        } // fin constructeur


        // GETTERS
        public function getLibelle() {
            return $this->libelle;
        }

        public function getArticles() {
            return $this->collectionArticles;
        }

        // SETTERS
        public function setLibelle($newLibelle) {
            $this->titre = $newLibelle;
        }
        public function setAddArticle(Article $newArticle) {
            $this->collectionArticles[] = $newArticle;
        }
        
        
}  // fin de la classe