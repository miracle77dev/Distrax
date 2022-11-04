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
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">



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
                    <th class="th-details">Adresse</th>
                    <th class="th-details">Date</th>
                    <th class="th-total th-add-to-cart">Statut</th>
                    <th class="th-delate">Retirer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="th-product"><a href="#"><img src="upload/620620b7ab769950ec6507772ae9d8f4de0a356ae57dc49062c7cf42255a4a96.jpg" alt="cart"></a></td>
                    <td class="th-details"><a href="">Nom du produit</a></td>
                    <td class="th-price"><a href="">15000</a></td>
                    <td class="th-delate"><a href="">2</a></td>
                    <td class="th-details"><a href="">Le client</a></td>
                    <td class="th-details"><h2><a href="">0122908712</a></h2></td>
                    <td class="th-details">Koumassi Fanny</td>
                    <td class="th-details"><a href="">12/11/2022</a></td>
                    <th class="td-add-to-cart">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle traitement" type="button" data-toggle="dropdown">Traitement
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick="ChangeState()" id="encours">En cours</a></li>
                            <li><a href="#" onclick="ChangeStatt()" id="traiter">Traitée</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="ChangeStata()" id="annuler">Annulée</a></li>
                          </ul>
                        </div>
                      </th>
                    <td class="th-delate"><a href=""><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td class="th-product"><a href="#"><img src="upload/620620b7ab769950ec6507772ae9d8f4de0a356ae57dc49062c7cf42255a4a96.jpg" alt="cart"></a></td>
                    <td class="th-details"><a href="">Nom du produit</a></td>
                    <td class="th-price"><a href="">15000</a></td>
                    <td class="th-delate"><a href="">2</a></td>
                    <td class="th-details"><a href="">Le client</a></td>
                    <td class="th-details"><h2><a href="">0122908712</a></h2></td>
                    <td class="th-details">Koumassi Fanny</td>
                    <td class="th-details"><a href="">12/11/2022</a></td>
                    <th class="td-add-to-cart">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle traitement" type="button" data-toggle="dropdown">Traitement
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick="ChangeState()" id="encours">En cours</a></li>
                            <li><a href="#" onclick="ChangeStatt()" id="traiter">Traitée</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="ChangeStata()" id="annuler">Annulée</a></li>
                          </ul>
                        </div>
                      </th>
                    <td class="th-delate"><a href=""><i class="fa fa-trash"></i></a></td>
                  </tr>
                </tbody>
              </table>
               </div>
          </div>
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
  
  <!-- Footer -->
  <footer>
    <div class="footer-contact">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-4">
            <div class="footer-contact-item">
              <div class="footer-contact-icon"> <i class="fa fa-phone"></i> </div>
              <div class="footer-contact-text"> + (800) 0123 456 789 </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2017 <a href="#"> ShopMart </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <ul class="footer-company-links">
              <li> <a href="about_us.php">About ShopMart</a> </li>
              <li> <a href="#">Careers</a> </li>
              <li> <a href="#">Privacy Policy</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
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