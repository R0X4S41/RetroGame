<?php
    require('../HTML/header.php');
    require_once '../BDD/config.php'; // ajout connexion bdd 

    
    $req = $bdd->prepare('SELECT * FROM articles');
    $req->execute();
?>
    <form action="search.php" method="post">
		    <input type="text" name="search" class="form-control" style="width: 50%; margin: auto; margin-top: 20px;" placeholder="Recherche">	
		    <button type="submit" class="btn btn-primary btn-block" style="width: 10%; margin: auto; margin-top: 20px;">Rechercher</button>	
	</form>
<?php
	include_once('../articles/recup.php');
    require('../HTML/footer.php');
?>