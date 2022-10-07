<?php
  // Tableau des fichiers à importer
  $arrayPages = array(
 
    '' => 'home.php',
    'admin' => 'admin.php',
    'account' => 'account.php',
    'contacts' => 'contacts.php'
  );
 
  // La variable $page existe-elle dans l'url ?
  if(!empty($_GET['page']))
  {
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['page']), $arrayPages))
    {
      // Oui, alors on l'importe
      header('Location: pages/'. $arrayPages[ strtolower($_GET['page']) ] );
    }
      else
    {
      // Non, alors on importe un fichier par défaut
      header('Location: pages/erreur-404.php');
    }
  }
    else
  {
    // Non, on affiche la page d'accueil par défaut
    header('Location: pages/'. $arrayPages['']);
  }
?>