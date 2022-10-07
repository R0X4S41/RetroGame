<?php
session_start();
        require_once '../BDD/config.php'; // ajout connexion bdd 
       // si la session existe pas soit si l'on est pas connecté on     redirige
        if(isset($_SESSION['user'])){
            $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE  token    = ?');
            $req->execute(array($_SESSION['user']));
            $data = $req->fetch();
        }
        // On récupere les données de l'utilisateur
?>