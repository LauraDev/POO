<?php

include 'article.class.php';
include 'auteur.class.php';
include 'categorie.class.php';

// Création d'une instance des classes
// $unArticle est un objet de la classe, elle a acces a l'ensemble des fonctions qui la compose
$unArticle = new Article("La formation WF3", "Une formation Certifiante en 3 mois",
                "Rejoignez-nous et vous verrez bien", "wf3.jpg", "04/08/2017");

// Article 2
$deuxArticle = new Article("La POO", "La bonne façon de coder",
                "Debut du cour aujourd'hui", "poo.jpg", "04/08/2017");

// Article 3
$troisArticle = new Article("Procédural", "Ne plus l'utiliser !",
                "Rejoignez-nous et vous verrez bien", "proced.jpg", "04/08/2017");

// Article 4
$quatreArticle = new Article("Les classes", "A quoi ca sert",
                "On peut les réutiliser", "class.jpg", "04/08/2017");
// Article 5
$quatreArticle = new Article("Ajax", "Pourquoi",
                "Rechargement Asynchrone", "ajax.jpg", "04/08/2017");

// Auteur
$auteurLaura = new Auteur("Traoré", "Laura", "laura@mail.fr");

// Catégorie
// $cat1 = new Categorie("WF3");
// $cat2 = new Categorie("PHP");
// $cat3 = new Categorie("Javascript");


// class Categorie extends Article
// {
//     private $articlesAssocies; 
    
//     public function ajouterUnArticle($article)
//     {
//         $article->recevoirArticle($this->articlesAssocies);
//     }
// }

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE-Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>


<?php
// Afficher l'objet unArticle
// echo '<pre>';
// print_r($unArticle);
// echo '<pre>';

//Acceder a une proprité sans passer par le getter
// echo $unArticle->titre; A NE PAS FAIRE!!!!
echo '<h2>Affichage du 1er Article: </h2>';
echo '<strong>Titre: </strong>'.$unArticle->getTitre().'<br>';
echo '<strong>Accroche: </strong>'.$unArticle->getAccroche().'<br>';
echo '<strong>Description: </strong>'.$unArticle->getDescription().'<br>';
echo '<strong>Image: </strong>'.$unArticle->getFeaturedImage().'<br>';
echo '<strong>Date de Publication: </strong>'.$unArticle->getDateCreationArticle().'<br><br>';

// Changer le titre du premier Article
$unArticle->setTitre('La formation WebForce 3');
echo '<h2>Changement de Titre grace aux setters: </h2>';
echo $unArticle->getTitre().'<br>';

// Afficher le deuxième article
echo '<h2>Affichage rapide du 2eme Article</h2>';
echo '<pre>';
print_r($deuxArticle);
echo '<pre>';

// Afficher le 1er Auteur
echo '<h2>Infos Auteur 1</h2>';
echo $auteurLaura->getNom().'<br>';
echo $auteurLaura->getPrenom().'<br>';
echo $auteurLaura->getEmail().'<br><br>';

//Relier des articles a des categories
$cat1 = new Categorie("WF3");
$cat2 = new Categorie("PHP");
$cat3 = new Categorie("Javascript");



// Afficher les catégories
echo '<h2>Les Catégories</h2>';
// echo $cat1->getLibelle().'<br>';
// echo $cat2->getLibelle().'<br>';
// echo $cat3->getLibelle().'<br>';
echo '<pre>';
print_r($cat2);
echo '<pre>';

echo '<h2>Ajout article a la Catégorie 2 grace aux setters: </h2>';
$cat1->setAddArticle($unArticle);
$cat2->setAddArticle($deuxArticle);
$cat2->setAddArticle($troisArticle);
$cat3->setAddArticle($quatreArticle);
print_r($cat2).'<br>';


//Relier un auteur à un article
$unArticle->setAddAuteur($auteurLaura);
$deuxArticle->setAddAuteur($auteurLaura);
$troisArticle->setAddAuteur($auteurLaura);
$quatreArticle->setAddAuteur($auteurLaura);

$categories=[$cat1, $cat2, $cat3];
// print_r($categories);
foreach($categories as $cat) : ?>
    <h3 style="color:green"><strong>Catégorie: </strong> <?= $cat->getLibelle() ?> </h3>
    <ul style="margin:0">
        <?php $articles = $cat->getArticles();
        foreach($articles as $art) : ?> 
        <li><strong>Titre: </strong> <?= $art->getTitre() ?> </li>
        <li><strong>Accroche: </strong> <?= $art->getAccroche() ?> </li>
        <li><strong>Auteur: </strong> <?php $monAuteur = $art->getAuteur();
                            echo $monAuteur->getNomComplet().' ou '.$monAuteur->getPrenom().' '.$monAuteur->getNom().' '.$art->getAuteur()->getEmail() ?> 
        </li>
        <?php endforeach ?>

    </ul>
<?php endforeach ?>

