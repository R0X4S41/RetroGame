<?php
include('connect.php');

$requete = $bdd->exec('INSERT INTO users (nom, prenom, email, mdp) VALUES ("Rousseau", "Chris", "chris.rousseau@gmail.com" , "c123456r")');

//pour un formulaire
//$requete = $bdd->prepare('INSERT INTO users (nom, prenom, email, mdp) VALUES ("Rousseau", "Chris", "chris.rousseau@gmail.com" , "c123456r")');//

?>