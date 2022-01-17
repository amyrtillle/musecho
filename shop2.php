<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Musecho | Les enceintes</title>
  <link rel="icon" href="./media/Musecho_logo_tab.png"/>
  
	<link rel="stylesheet" type="text/css" href="./css/grille.css"/>
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link rel="stylesheet" type="text/css" href="./css/shop2.css">
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
      array('product-img' => './media/jbl_go_3.jpg', 'product-name' => 'JBL Go 3', 'product-price' =>39, 'product-id' => '84599', 'product-tag' => 'Enceinte entrée de gamme | Enceinte ultra portable | Enceinte waterproof', 'product-type' => 2),
			array('product-img' => './media/wonderboom3.png', 'product-name' => 'UE Wonderboom 2', 'product-price' =>100, 'product-id' => '51382', 'product-tag' => 'Enceinte entrée de gamme | Enceinte ultra portable | Enceinte waterproof', 'product-type' => 2),
			array('product-img' => './media/flip5.png', 'product-name' => 'JBL Flip 5', 'product-price' =>140, 'product-id' => '84650', 'product-tag' => 'Enceinte milieu de gamme | Enceinte ultra portable | Enceinte waterproof', 'product-type' => 2),
			array('product-img' => './media/hk_studio4.png', 'product-name' => 'Harman Kardon Onyx Studio 4', 'product-price' =>249, 'product-id' => '28456', 'product-tag' => 'Enceinte milieu de gamme | Enceinte semi portable', 'product-type' => 2),
			array('product-img' => './media/phantom_gold.png', 'product-name' => 'Devialet Pantom Gold', 'product-price' =>2990, 'product-id' => '26510', 'product-tag' => 'Enceinte haut de gamme | Enceinte secteur', 'product-type' => 2),
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