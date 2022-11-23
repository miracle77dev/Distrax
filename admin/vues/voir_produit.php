<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>DISTRAX | Voir produits</title>
<meta name="description" content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="vues/favicon.ico">

<!-- CSS Style -->

<link rel="stylesheet" href="style.css">
</head>

<body class="shop_grid_full_width_page">
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 


<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <?php require 'include/header_top.php'; ?>
      <!-- header inner -->
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12 jtv-logo-block">
              <!-- Header Logo -->
              <div class="logo" style="height: 60%; width:60%;"><a title="DISTRAX" href="index.php"><img alt="DISTRAX" title="DISTRAX" src="../vues/logo.png"></a> </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search"> 
              <!-- Search -->
              
              <div class="top-search">
                <div id="search">
                  <form>
                    <div class="input-group">
                      <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                        <option>Toutes les categories</option>
                        <?php for ($i=0; $i <count($Categorie) ; $i++) :?>
                          <option><?=utf8_decode($Categorie[$i]->Categorie)?></option>
                        <?php endfor; ?>
                      </select>
                      <input type="text" class="form-control" placeholder="Rechercher un produit..." name="search">
                      <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              
              <!-- End Search --> 
              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
              <!-- top cart -->
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                    <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total"><?=count($Commande) ?></span></div>
                    <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Commande(s) en cours</span> </div>
                    </a></div>
                  <div>
                    <div class="top-cart-content">
                      <div class="block-subtitle hidden">Recently added items</div>
                      <ul id="cart-sidebar" class="mini-products-list">
                        <?php 
                            $Total = 0;
                         ?>
                        <?php for ($i=0; $i <count($Commande) ; $i++) :?>
                        <li class="item odd"> <a href="#" title="<?=$Commande[$i]->Produit ?>" class="product-image"><img src="upload/<?=$Commande[$i]->ImagePrincipale ?>" alt="html Template" width="65"></a>
                          <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                            <p class="product-name"><a href="shopping_cart.php"><?=$Commande[$i]->Produit ?></a> </p>
                            <strong><?=$Commande[$i]->Qte ?></strong> x <span class="price"><?=$Commande[$i]->Pu ?> FCFA</span> </div>
                            <?php 
                                  $Total += $Commande[$i]->Pu*$Commande[$i]->Qte;
                             ?>
                        </li>
                      <?php endfor; ?>
                      </ul>
                      <div class="top-subtotal">Total: <span class="price"><?=$Total?> FCFA</span></div>
                      <div class="actions">
                        <button class="view-cart" type="button" onclick="document.location.href='voir_commande.php'"><i class="fa fa-shopping-cart"></i><span>Voir les commandes</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->

 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
              <h2>Toutes les catégories</h2>
            </div>
           
            <div class="product-grid-area">
              <ul class="products-grid">
                <?php for ($i=0; $i <count($Produit) ; $i++) :?>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Promo</div>
                        <?=$New = ($Produit[$i]->NouveauProduit) ? "<div class='icon-new-label new-right'>Nouveau</div>" : "";?>
                        <div class="pr-img-area">
                         <a title="<?=$Produit[$i]->NomProduit ?>" href="../produit.php?p=<?=$Produit[$i]->UniqueId ?>">
                          <figure>
                            <img class="first-img" src="./upload/<?=$Produit[$i]->ImagePrincipale ?>" alt="<?=$Produit[$i]->NomProduit ?>">
                          </figure>
                        </a> 
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_compare"> <a href="" title="Promouvoir le produit"> <i class="fa fa-rocket"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="../produit.php?p=<?=$Produit[$i]->UniqueId ?>" title="Copier le Tunnel"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="" title="Retirer ce produit"> <i class="fa fa-trash"></i> </a> </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="<?=$Produit[$i]->NomProduit ?>" href="../produit.php?p=<?=$Produit[$i]->UniqueId ?>"><?=$Produit[$i]->NomProduit ?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$Produit[$i]->PrixProduit ?>FCFA</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Modifier le produit</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endfor; ?>

              </ul>
            </div>
            <?php if (count($Produit) >20) :?>
            <div class="pagination-area ">
              <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
 <br><br>
 
  <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> </div>

<!-- End Footer --> 
<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="js/mobile-menu.js"></script> 
<script type="text/javascript" src="js/jquery-ui.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
  function Controle(){
    if (document.querySelector('.cache').style.display == "none") {
      document.querySelector('.cache').style.display = "block"
    }
    else{
      document.querySelector('.cache').style.display = "none"
    }
  }

window.onclick = function(event) {
  if (event.target.outerText != "Mon Compte" && document.querySelector('.cache').style.display == "block") {
    document.querySelector('.cache').style.display = "none"
  }

}
</script>

</body>

</html>
