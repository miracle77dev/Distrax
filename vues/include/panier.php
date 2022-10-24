<!-- <?php
if (session_status()==PHP_SESSION_NONE) {
	session_start();
}
?>
<div class="top-cart-contain">
	<div class="mini-cart">
		<div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
			<?php $c=!empty($_SESSION['panier'])?array_sum($_SESSION['panier']):'0' ?>
			<div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total"><?=$c?></span></div>
			<div class="shoppingcart-inner hidden-xs"><span class="cart-title">Panier</span> </div>
		</a></div>
		<div>
			<div class="top-cart-content">
				<div class="block-subtitle hidden">Articles recemment ajoutés</div>
				<ul id="cart-sidebar" class="mini-products-list">
					<?php
					if (!empty($_SESSION['panier'])) {?>
							<?php
							$cle=array_keys($_SESSION['panier']);
                            $s=implode(',', $cle);
							$pr=produitPanier($s);?>
						   <?php for ($i=0; $i <count($pr) ; $i++):?> 
							<li class="item odd"> <a href="panier.php" title="<?=$pr[$i]->titre?>" class="product-image"><img src="admin/upload/<?=$pr[$i]->img?>" alt="nom du produit" width="65"></a>
								<div class="product-details"> <a href="retirer.php?id=<?=$pr[$i]->id?>" title="Enlever ce produit" class="remove-cart"><i class="pe-7s-trash" value="load()"></i></a><i class="hidden"></i>
									<p class="product-name"><?=$pr[$i]->titre?><a href="shopping_cart.php"></a> </p>
									<strong><?=$_SESSION['panier'][$pr[$i]->id]?></strong> x <span class="price"><?=$pr[$i]->prix_promo?></span> Fcfa</div>
								</li>
						<?php endfor;?>	
					    <?php
						}
						?>
					</ul>
					<div class="top-subtotal">Total: <span class="price">prix total Fcfa</span></div>
					<div class="actions">
						<button class="btn-checkout" type="button" onClick="location.href='checkout.php'"><i class="fa fa-check"></i><span>Caisse</span></button>
						<button class="view-cart" type="button" onClick="location.href='panier.php'"><i class="fa fa-shopping-cart"></i><span>Voir panier</span></button>
					</div>
				</div>
			</div>
		</div>
	</div> -->