<?php
if (!isset($_SESSION['panier'])) {
           $_SESSION['panier']='';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Mon panier</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="vues/style.css">
</head>

<body class="shopping_cart_page">
<!--[if lt IE 8]>
<p class="browserupgrade">Veuillez mettre à jour votre navigateur svp<a href="http://browsehappy.com/">upgrade your browser</a> pour ameliorer votre espériance sur notre site.</p>
<![endif]--> 
<?php require 'include/head.php'; ?>

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Panier</h2>
          </div>
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                      <th>disp.</th>
                      <th>prix unitaire</th>
                      <th>Qte</th>
                      <th>Total</th>
                      <th  class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
         
          <?php if (!empty($_SESSION['panier'])):?>
          <?php $cle=array_keys($_SESSION['panier']);
                $s=implode(',', $cle);
                $pr=produitPanier($s);?>
                <?php $_SESSION['prix_totale_panier']=0;?>

               <?php for ($i=0; $i <count($pr) ; $i++):?>
                <?php $prix_total_produit=$pr[$i]->prix_promo*$_SESSION['panier'][$pr[$i]->id]?>
                <?php $_SESSION['prix_totale_panier']+=$prix_total_produit?>
                    <tr>
                      <td class="cart_product"><a href="#"><img src="admin/upload/<?=$pr[$i]->img?> " alt="<?=$pr[$i]->titre?>"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#"><?=$pr[$i]->titre?></a></p>
                        <small><a href="#">Color : Red</a></small>
                        <small><a href="#">Size : M</a></small></td>
                      <td class="availability in-stock"><span class="label">en stock</span></td>
                      <td class="price"><span><?=$pr[$i]->prix_promo?></span></td>
                      <td class="qty"><input class="form-control input-sm" type="text" value="<?=$_SESSION['panier'][$pr[$i]->id]?>"></td>
                      <td class="price"><span><?=$prix_total_produit?></span></td>
                      <td class="action"><a href="retirer.php?id=<?=$pr[$i]->id?>"><i class="icon-close"></i></a></td>
                    </tr>
                   <?php endfor;?>

                    <?php elseif ($_SESSION['panier']==false OR $_SESSION['panier']==''):?>
                    <?php $_SESSION['prix_totale_panier']=0;?>
                      <p>Votre panier est vide pour le moment</p>
                    <?php endif;?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3"><?=$_SESSION['prix_totale_panier']?> Fcfa (tax exclu.)</td>
                      <td colspan="2"><?=$_SESSION['prix_totale_panier']?> Fcfa</td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>NET A PAYER</strong></td>
                      <td colspan="2"><strong><?=$_SESSION['prix_totale_panier']?> FCFA</strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="index.php"><i class="fa fa-arrow-left"> </i>&nbsp; Continuer mes achats</a> <a class="checkout-btn" href="#"><i class="fa fa-check"></i> Proceder au paiement</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>World-Wide Shipping</h3>
                <p>On order over 99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>30 Days Return</h3>
                <p>Moneyback guarantee </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7</h3>
                <p>Call us: ( +123 ) 456 789</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Member Discount</h3>
                <p>25% on order over 199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <?php require 'include/footer.php'?>
  <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>  </div>

<!-- End Footer --> 
<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 

 
 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="js/mobile-menu.js"></script> 

 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="js/jquery-ui.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script> 

 
</body>
</html>