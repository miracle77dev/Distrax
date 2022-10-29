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
                      <th>Désignation</th>
                      <th>PU</th>
                      <th>Qte</th>
                      <th>Total</th>
                      <th  class="action"><i class="fa fa-truck"></i> Livraison</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr> 
                      <td class="cart_product"><a href="#"><img src="admin/upload/<?=$Produit->ImagePrincipale?>" alt=""></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#"><?=$Produit->NomProduit?></a></p>
                        <small><a href="#" class="Couleur"><?= $c = (!empty($c)) ? "Coleur : $c": "" ; ?></a></small>
                        <small><a href="#" class="Taille"><?= $t = (!empty($t)) ? "Taille : $t": "" ; ?></a></small>
                      </td>
                      <td class="price"><span><?=$Produit->PrixProduit?><span style="display: none;" class="Id"><?=$id?></span> </span></td>
                      <td class="qty"><?=$q?></td>
                      <td class="price"><span><?=intval($Produit->PrixProduit)*intval($q)?></span></td>
                      <td class="availability in-stock"><span class="label">Gratuit Abidjan</span></td>
                    </tr>

                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>NET A PAYER</strong></td>
                      <td colspan="2"><strong><?=intval($Produit->PrixProduit)*intval($q)?> FCFA</strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <section class="main-container col1-layout">
                <div class="main container">
                  <div class="page-content">
                    <form method="post" action="https://google.com">
                    <div class="account-login">
                      <div class="box-authentication">
                        <h4>Vos informations</h4>
                        <p class="before-login-text">Remplissez le formulaire pour la livraison</p>
                        <label for="emmail_login">Nom complet<span class="required">*</span></label>
                        <input id="emmail_login" type="text" class="form-control Nom">
                        <label for="password_login">Numéro<span class="required">*</span></label>
                        <input id="password_login" type="text" class="form-control Numero">
                      </div>
                      <div class="box-authentication">
                        <h4>Adresse ou lieu de livraison</h4>
                        <p>Veuillez renseigner le lieu de livraison</p>
                        <label for="emmail_register">Commune<span class="required">*</span></label>
                        <input id="emmail_register" type="text" class="form-control Commune">
                        <label for="emmail_register">Lieu de livraison<span class="required">*</span></label>
                        <input id="emmail_register" type="text" class="form-control Lieu">
                      </div>
                      <div class="cart_navigation">
                        <a class="checkout-btn" style="cursor:pointer;" onclick="Commande()"><i class="fa fa-check"></i>Valider ma commande</a>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </section>
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
                <h3>Livraison partout en Afrique</h3>
                <p>Nous livrons dans plus de 16 pays</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>Retour sur 30 jours</h3>
                <p>Garantie de remboursement si le produit ne repond pas à vos attentes</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Service client 24/7</h3>
                <p>Service client haute qualité disponible chaque jour même les jours fériés et les dimanches</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Des réductions chaque jour</h3>
                <p>Des reductions allant jusqu'à 45% sur nos différents produits</p>
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
<script type="text/javascript">
  function Commande(){
    if(document.querySelector(".Nom").value!='' && document.querySelector(".Numero").value!='' && document.querySelector(".Commune").value!='' && document.querySelector(".Lieu").value!=''){
      var Id = document.querySelector(".Id").innerHTML;
      var Couleur = document.querySelector(".Couleur").innerHTML.split(":")[1];
      var Taille = document.querySelector(".Taille").innerHTML.split(":")[1];
      var Qte = document.querySelector(".qty").innerHTML;
      var Nom = document.querySelector(".Nom").value;
      var Numero = document.querySelector(".Numero").value;
      var Commune = document.querySelector(".Commune").value;
      var Lieu = document.querySelector(".Lieu").value;
      window.location.href = './traitement.php?id=' + Id+'&&c='+Couleur+'&&t='+Taille+'&&q='+Qte+'&&n='+Nom+'&&num='+Numero+'&&com='+Commune+'&&l='+Lieu;
    }
    else{
      alert("Vérifiez que tout les champs sont rempli avant valider la commande")
    }
    
  }
</script> 

 
</body>
</html>