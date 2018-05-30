<?php
//var_dump($_POST);
//var_dump($_POST["nom"]);
$nom = htmlentities($_GET["nom"]);
$prenom = htmlentities($_GET["prenom"]);

if (empty($nom) && empty($prenom)) {
	echo "0 sur 2...naze.";
} elseif (empty($nom)|| empty($prenom)){
	echo "sorry ma gueule, remplis tous les champs, ça marche mieux..." ; 
} else {
    echo "Bonjour ".$prenom." ".$nom;
};

?>