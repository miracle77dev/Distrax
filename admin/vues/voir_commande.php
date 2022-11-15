<!DOCTYPE html>
<html lang="en">

<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>ShopMart premium HTML5 &amp; CSS3 template</title>
<meta name="description" content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="vues/favicon.ico">



<!-- CSS Style -->

<link rel="stylesheet" href="style.css">
</head>

<body class="wishlist_page">


<div id="page"> 

  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">i-LAND</a><span>&raquo;</span></li>
            <li><strong>Admin</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>Traitement de commande</h2>
            </div>
            <div class="wishlist-item table-responsive">
              <table class="col-md-12">
                <thead>
                  <tr>
                    <th class="th-product">Image</th>
                    <th class="th-details">Produit</th>
                    <th class="th-price">PU</th>
                    <th class="th-delate">Qte</th>
                    <th class="th-delate">Client</th>
                    <th class="th-price">Contact</th>
                    <th class="th-details">Adresse de livraison</th>
                    <th class="th-details">Date</th>
                    <th class="th-details">Statut</th>
                    <th class="th-delate"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0; $i <count($Produit) ; $i++) : ?>
                  <tr>
                      <td class="th-product"><a href="#"><img src="upload/<?=$Produit[$i]->ImagePrincipale ?>" alt="cart"></a></td>
                      <td class="th-details"><a href=""><?=$Produit[$i]->Produit ?></a></td>
                      <td class="th-price"><a href="">15000</a></td>
                      <td class="th-delate"><a href=""><?=$Produit[$i]->Qte ?></a></td>
                      <td class="th-details"><a href=""><?=$Produit[$i]->NomClient ?></a></td>
                      <td class="th-details"><h2><a href=""><?=$Produit[$i]->NumeroClient ?></a></h2></td>
                      <td class="th-details"><?=$Produit[$i]->CommuneClient ?>/<?=$Produit[$i]->AdresseLivraison ?></td>
                      <td class="th-details"><a href=""><?=$Produit[$i]->Date ?></a></td>
                      <th class="th-details">
                        <?php if ($Produit[$i]->Statut==0) : ?>
                          <button class="btn btn-primary" type="button" style="background-color: #f8f8f8; border-color:#f8f8f8;">
                            <a href="produit_commande.php?id=<?=$Produit[$i]->CommandeId ?>" style="color: black;">Non Traitée</a>
                          </button>
                        <?php elseif($Produit[$i]->Statut==1) :?>
                          <button class="btn btn-primary" type="button" style="background-color: #e78527; border-color:#e78527;">
                            <a href="produit_commande.php?id=<?=$Produit[$i]->CommandeId ?>" style="color: #fff;">En cours</a>
                          </button>
                        <?php elseif($Produit[$i]->Statut==2) :?>
                          <button class="btn btn-primary" type="button" style="background-color: #14bb57; border-color:#14bb57;">
                            <a href="produit_commande.php?id=<?=$Produit[$i]->CommandeId ?>">Traitée</a>
                          </button>
                        <?php elseif($Produit[$i]->Statut==3) :?>
                          <button class="btn btn-primary" type="button" style="background-color: #e83f33; border-color:#e83f33;">
                            <a href="produit_commande.php?id=<?=$Produit[$i]->CommandeId ?>">Annuler</a>
                          </button>
                        <?php endif; ?>
                      </th>
                      <td class="th-delate"><a href=""></a></td>
                  </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
               </div>
          </div>
        <a href="voir_produit.php" style="position: absolute; right: 0px; bottom: 0px; color:red; font-size: 15px; border: 1px #f8f8f8; padding: 2px; background: #f8f8f8; border-radius: 6px;">Retour</a>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>Suivie & Analyse</h3>
            </div>
            <div class="block-content">
              <ul>
                <li><a>Les produits les plus commandés</a></li>
                <li><a href="#">Les produits les moins commandés</a></li>
                <li><a href="#">Commandes traitées du dernier mois</a></li>
                <li><a href="#">Commandes traitées du mois courant</a></li>
                <li class="current"><a href="#">Mes resultats mois courant</a></li>
                <li><a href="#">Montant généré:</a></li>
                <li class="last"><a href="#">Commandes traitées: </a></li>
                <li class="last"><a href="#">Commandes annulées: </a></li>
              </ul>
            </div>
          </div>
          <div class="compare block">
            <div class="sidebar-bar-title">
              <h3>FACTURATION</h3>
            </div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item">
                  <a href="#" title="Remove This Item" class="remove-cart"></a> 
                  <a href="#" class="product-name">Commande Total: <span style="font-weight: bold; font-size:15px;"> &nbsp;217</span></a>
                </li>
                <li class="item">
                  <a href="#" title="Remove This Item" class="remove-cart"></a> 
                  <a href="#" class="product-name">Montant Total: <span style="font-weight: bold; font-size:15px;"> &nbsp;164900</span> FCFA</a>
                </li>
                <li class="item">
                  <a href="#" title="Remove This Item" class="remove-cart"></a>
                  <a href="#" class="product-name">Montant à payer (8.33%) : <span style="font-weight: bold; font-size:15px;">13500</span> FCFA</a>
                </li>
              </ol>
              <div class="ajax-checkout">
               
                <button type="submit" title="Submit" class="button button-clear" style="border-bottom:1px #e83f33 solid;"> <span>REGLER LA FACTURE (13500 FCFA)</span></button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  
  
  <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> </div>

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
    function ChangeState(){
      document.querySelector('.traitement').innerHTML = document.getElementById('encours').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "#e78527"; 
      document.querySelector('.traitement').style.borderColor = "#e78527";
  }

    function ChangeStatt(){
      document.querySelector('.traitement').innerHTML = document.getElementById('traiter').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "#14bb57"; 
      document.querySelector('.traitement').style.borderColor = "#14bb57";
  }
    function ChangeStata(){
      document.querySelector('.traitement').innerHTML = document.getElementById('annuler').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "#e83f33"; 
      document.querySelector('.traitement').style.borderColor = "#e83f33"; 
  }

</script>
</body>
</html>