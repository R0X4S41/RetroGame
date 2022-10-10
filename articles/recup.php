<?php
    $req = $bdd->prepare('SELECT * FROM articles');
    $req->execute();

    $new = '';
	$retro = '';
	while($data = $req->fetch()){
		$prix = $data['prix'];
		$prix = $prix/100;
		if($data['categorie'] == 'new'){
			$new = $new . '
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
					<h4 class="product-price">'.$prix.' <del class="product-old-price">'.$prix.'</del></h4>
					<div class="product-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<div class="product-btns">
						<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
						<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
						<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
					</div>
				</div>
				<div class="add-to-cart">
					<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
				</div>
			</div>';		
		}else if($data['categorie'] == 'retro'){
			$retro = $retro . '
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
					<h4 class="product-price">'.$prix.' <del class="product-old-price">'.$prix.'</del></h4>
					<div class="product-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<div class="product-btns">
						<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
						<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
						<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
					</div>
				</div>
				<div class="add-to-cart">
					<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> addto 	cart</button>
				</div>
			</div>';
		}
	}
	echo '
	<h1 class="name-article">Jeux Video</h1>
	<!-- Products tab & slick -->
	<div class="col-md-12">
		<div class="row">
			<div class="products-tabs">
				<!-- tab -->
				<div id="tab1" class="tab-pane active">
					<div class="products-slick" data-nav="#slick-nav-1">
						'.$new.'
					</div>
					<div id="slick-nav-1" class="products-slick-nav"></div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<h1 class="name-article">RetroGaming</h1>
	<div class="col-md-12">
		<div class="row">
			<div class="products-tabs">
				<div id="tab1" class="tab-pane active">
					<div class="products-slick" data-nav="#slick-nav-1">
						'.$retro.'
						</div>
					<div id="slick-nav-1" class="products-slick-nav"></div>
				</div>
			</div>
		</div>
	</div>';
?>