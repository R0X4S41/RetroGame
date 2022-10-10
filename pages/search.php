<?php 
    require('../HTML/header.php');
    require_once '../BDD/config.php'; // On inclu la connexion à la bdd

    $check = $bdd->prepare('SELECT * FROM articles');
    $check->execute();

?>
    <form action="search.php" method="post">
		    <input type="text" name="search" class="form-control" style="width: 50%; margin: auto; margin-top: 20px;" placeholder="Recherche">	
		    <button type="submit" class="btn btn-primary btn-block" style="width: 10%; margin: auto; margin-top: 20px;">Rechercher</button>	
	</form>
<?php
    $search = $_POST['search'];
    $search = strtolower($search);
    $searchMot = explode(" ", $search);
if ($search !== ' ' && !empty($search)) {
    while ($data = $check->fetch()) {
        $name  = $data['name'];
        $name = strtolower($name);
        $mot = explode(" ", $name);

        $prix = $data['prix'];
        $prix = $prix/100;

        for ($k = 0; $k < count($mot);  $k++) {
            if ($searchMot[0] == $mot[$k]) {
                echo '
                    <div class="product">
                        <div class="product-img">
                            <img src="'.$data['img'].'" alt="">
                            <div class="product-label">
                                <span class="sale">-30%</span>
                                <span class="new">NEW</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">'.$data['name'].'</a></h3>
                            <h4 class="product-price">'.$prix.' <del    class="product-old-price">'.$prix.'</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>add to cart</button>
                        </div>
                    </div>';
            }
        }
    }
}else { echo '<h1 class="name-article">Pas de résultat</h1>' ;}


?>