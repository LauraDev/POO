<?php

// Création d'une classe - contenant proprietes(var) et methodes(fontions)
class Article {
    private $titre, 
            $accroche, 
            $description, 
            $featuredImage, 
            $dateCreationArticle,
            $auteurArticle;  

// Creation constructeur - pour attribuer valeur a mes 
    public function __construct(
        $titre, 
        $accroche, 
        $description, 
        $featuredImage, 
        $dateCreationArticle
        ) {
            //  Attribution à chaque propriété de notre classe 
            // la valeur passée au constructeur lors de l'instantiacion
            $this->titre                =$titre;
            $this->accroche             =$accroche;
            $this->description          =$description;
            $this->featuredImage        =$featuredImage;
            $this->dateCreationArticle  =$dateCreationArticle;
        
        } // fin constructeur


        // GETTERS
        // Fonction en charge de renvoyer l'information 
        // Une fonction par propriete

        public function getTitre() {
            return $this->titre;
        }
        public function getAccroche() {
            return $this->accroche;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getFeaturedImage() {
            return $this->featuredImage;
        }
        public function getDateCreationArticle() {
            return $this->dateCreationArticle;
        }
        public function getAuteur() {
            return $this->auteurArticle;
        }


        // SETTERS
        public function setTitre($newTitre) {
            $this->titre = $newTitre;
        }
        public function setAccroche($newAccroche) {
            $this->titre = $newAccroche;
        }
        public function setDescription($newDescription) {
            $this->titre = $newDescription;
        }
        public function setFeaturedImage($newFeaturedImage) {
            $this->titre = $newFeaturedImage;
        }
        public function setDateCreationArticle($newDateCreationArticle) {
            $this->titre = $newDateCreationArticle;
        }
        public function setAddAuteur(Auteur $newAuteur) {
            $this->auteurArticle = $newAuteur;
            
        }


}  // fin de la classe