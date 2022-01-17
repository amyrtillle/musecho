<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Musecho | Les amplis</title>
  	<link rel="icon" href="./media/Musecho_logo_tab.png"/>
  
	<link rel="stylesheet" type="text/css" href="./css/grille.css"/>
  	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link rel="stylesheet" type="text/css" href="./css/shop1.css">
</head>

<body>
	<header>
	    <div class="container">
			<a href="./index.html">
				<img class="logo" src="./media/Musecho_logo.png" alt="logo_site" > <!--Logo du site-->
			</a>
			<div class="row">             
				<div class="col-3">
	          		<a href="./index.html">
	            		<div class="select_accueil">Accueil</div>
	          		</a>
	        	</div>
	      		<div class="col-3">
	        		<div class="container2">
	            		<div class="caroussel">
	            	  		<a href="./shop.html">
	            	    		<div class="select_product">
	            	      			Nos produits
	            	    		</div>
	            	  		</a>
	            		</div>
	            	<div class="overlay">
	            	  	<div class="text">
	            	    	<p><a href="./shop2.php">Nos enceintes</a></p>
	            	    	<hr>
	            	    	<p><a href="./shop1.php">Nos amplis</a></p>
	            	  	</div>
	            	</div>
	        	</div>
	    	</div>
			<div class="col-3">
	    	    <a href="./panier.html">
	    	    	<div class="select_panier">Panier</div>
	    	    </a>
	    	    </div>
				<div class="col-3">
	    	      	<a href="./contact.html">
	    	    		<div class="select_contact">Contact</div>
	    	      	</a>
	    	    </div>
			</div>
		</div>
	</header>

  <?php 	
	  $Products = array(
			array('product-img' =>'./media/Ampeg.png', 'product-name' => 'Ampeg RB108EU rocket bass', 'product-price' =>149, 'product-id' => '349689', 'product-tag' => 'Ampli bass | Ampli entrée de gamme', 'product-type' => 1),
			array('product-img' =>'./media/orange_crush.png', 'product-name' => 'Orange amps crush bass 25', 'product-price' =>195, 'product-id' => '230114', 'product-tag' => 'Ampli bass| Ampli entrée de gamme', 'product-type' => 1),
			array('product-img' =>'./media/champion20.jpg', 'product-name' => 'Fender Champion 20', 'product-price' =>225, 'product-id' => '230849', 'product-tag' => 'Ampli guitar | Ampli milieu de gamme', 'product-type' => 1),
			array('product-img' =>'./media/orange_combo.png', 'product-name' => 'Orange amps combo crush', 'product-price' =>258, 'product-id' => '230111', 'product-tag' => 'Ampli guitar | Ampli milieu de gamme', 'product-type' => 1),
			array('product-img' =>'./media/Vox.png', 'product-name' => 'Vox AC15 C1', 'product-price' =>599, 'product-id' => '79617', 'product-tag' => 'Ampli guitar | ampli haut de gamme', 'product-type' => 1),	
	  );

	  $Price = array_column($Products, 'product-price');
	  array_multisort($Price, SORT_ASC, $Products);
	?>

	<table class="produits">
		<tr>
		  <td>Image produit</td>
		  <td>Nom produit</td>
		  <td>Prix unitaire</td>
		  <td></td>
		  <td>Référence Article</td>
		  <td></td>
		</tr>
  <?php
	  foreach ($Products as $key => $Affichage) {
  ?>
		<tr>
  		<td class="product-img">
  		 	<img src="<?php echo $Affichage['product-img']; ?>" alt="Image <?php echo $Affichage['product-name']; ?>" class="img">
  		</td>

  		<td class="product-name">
  		 	<?php echo $Affichage['product-name']; ?>
  		</td>

  		<td class="product-price">
  		 	<?php echo $Affichage['product-price'] . " €"; ?>
  		</td>
  		
      <td>
  			<a href="./panier.html" title="Ajouter au panier">
  		 		<img src="./media/basket.svg" alt="ajouter au panier" class="img">
  			</a>
  		</td>
  		
      <td class="product-id">
  		 	<?php echo $Affichage['product-id']; ?>
  		</td>

  		<td class="product-tag">
    		<?php echo $Affichage['product-tag']; ?>
	  	</td>
  	</tr>
	<?php } ?>
	</table>

	<footer>
		<p>Retrouvez nous sur:</p>
		<div class="row social">
			<div class="col-3" >
        		<a href="http://twitter.com" target="_blank">
					<img src="./media/twitter.png" class="icon" alt="logo_twitter">
        		</a>
			</div>
			<div class="col-3" >
        		<a href="http://facebook.com" target="_blank">
					<img src="./media/facebook.png" class="icon" alt="logo_facebook">
        		</a>
			</div>
			<div class="col-3" >
        		<a href="http://youtube.com" target="_blank">
					<img src="./media/youtube.png" class="icon" alt="logo_youtube">
        		</a>
			</div>
			<div class="col-3" >
        		<a href="http://instagram.com" target="_blank">
					<img src="./media/instagram.png" class="icon" alt="logo_instagram">
        		</a>
			</div>
		</div>

		<span class="about"> 
		  	<a href="#">Confidentialités et cookies</a> | <a href="#">Conditions générales</a> | <a href="#">Accessibilité</a> | <a href="#">À propos</a>
		</span>
	</footer>
</body>

</html>