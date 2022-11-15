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
        <div class="col-main col-sm-12 col-xs-12">
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
                    <th class="th-details">Couleur/Taille</th>
                    <th class="th-details">Statut</th>
                    <th class="th-details">Date</th>
                  </tr>
                </thead>
                <tbody style="height: 250px;">
                  <tr>
                    <td class="th-product"><a href="#"><img src="upload/<?= $Commande->ImagePrincipale ?>" alt="<?= $Commande->Produit ?>"></a></td>
                    <td class="th-details"><a href=""><?= $Commande->Produit ?></a><span hidden id="UniqueId"><?= $Commande->CommandeId ?></span> </td>
                    <td class="th-price"><a href=""><?= $Commande->Pu ?></a></td>
                    <td class="th-delate"><a href=""><?= $Commande->Qte ?></a></td>
                    <td class="th-details"><a href=""><?= $Commande->NomClient ?></a></td>
                    <td class="th-details"><h2><a href=""><?= $Commande->NumeroClient ?></a></h2></td>
                    <td class="th-details"><?= $Commande->CommuneClient ?>/<?= $Commande->AdresseLivraison ?></td>
                    <td class="th-details"><a href=""><?= $Commande->Couleur ?>/<?= $Commande->Taille ?></a></td>
                    <th class="th-details">
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle traitement" type="button" data-toggle="dropdown">Statut
                          <span class="caret"></span>
                        </button>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick="ChangeState()" id="encours">En cours</a></li>
                            <li><a href="#" onclick="ChangeStatt()" id="traiter">Traitée</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="ChangeStata()" id="annuler">Annulée</a></li>
                            <li><a href="#" onclick="ChangeStatr()" id="retirer">Retirer</a></li>
                          </ul>



                        </div>
                    </th>
                    <td class="th-details"><?= $Commande->Date ?></td>
                  </tr>
                </tbody>
              </table>
                <a href="voir_commande.php" style="position: absolute; right: 0px; bottom: 0px; color:red; font-size: 18px; border: 1px #f8f8f8; padding: 4px; background: #f8f8f8; border-radius: 6px;">Retour</a>
               </div>
          </div>
        </div>
       
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
  UniqueId = document.getElementById("UniqueId").innerHTML
    function ChangeState(){
      document.querySelector('.traitement').innerHTML = document.getElementById('encours').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "#e78527"; 
      document.querySelector('.traitement').style.borderColor = "#e78527";
      UpdateState(UniqueId,1)
  }

    function ChangeStatt(){
      document.querySelector('.traitement').innerHTML = document.getElementById('traiter').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "#14bb57"; 
      document.querySelector('.traitement').style.borderColor = "#14bb57";
      UpdateState(UniqueId,2)
  }
    function ChangeStata(){
      document.querySelector('.traitement').innerHTML = document.getElementById('annuler').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "#e83f33"; 
      document.querySelector('.traitement').style.borderColor = "#e83f33"; 
      UpdateState(UniqueId,3)
  }
    function ChangeStatr(){
      document.querySelector('.traitement').innerHTML = document.getElementById('retirer').innerHTML
      document.querySelector('.traitement').style.backgroundColor = "black"; 
      document.querySelector('.traitement').style.borderColor = "black"; 
      UpdateState(UniqueId,4)
  }


  function UpdateState(ModelId,Val){
      var xhr = new XMLHttpRequest();
      xhr.open('GET', './traitement.php?UniqueId='+ModelId+'&&Val='+Val);
      xhr.send(null);
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
          console.log(xhr.responseText)
      }
    } 
  }

</script>
</body>
</html>