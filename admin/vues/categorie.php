<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Basic page needs -->
  <meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KENESHY | Admin | Ajouter une catégorie</title>
  
  <!-- Mobile specific metas  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="vues/favicon.ico">

  <!-- CSS Style -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="register_page">

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
 
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->

  

    
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="col-md-3 col-sm-2"></div>
          <div class="col-md-6 col-sm-8">
            <div class="single-input p-bottom50 clearfix">
            <!-- Notif box -->
            <?php  if (isset($Success)) : ?>
              <div class="margin-bottom"></div>
              <div class="successmes">
                <div class="message-box-wrap"> <i class="fa fa-check-square fa-lg"></i>Votre catégorie a été créée avecc succès.</div>
              </div>
            <?php elseif(isset($Erreur)&&$Erreur == 2):?>
              <div class="margin-bottom"></div>
              <div class="errormes">
                <div class="message-box-wrap"> <i class="fa fa-exclamation-circle fa-lg"></i>Un problème à été détecté lors de la création de votre catégorie</div>
              </div>
              <div class="margin-bottom"></div>
            <?php elseif(isset($Erreur)&&$Erreur == 1):?>
               <div class="margin-bottom"></div>
              <div class="errormes">
                <div class="message-box-wrap"> <i class="fa fa-exclamation-circle fa-lg"></i> Veuillez donner un nom à la catégorie que vous créez.</div>
              </div>
              <div class="margin-bottom"></div>
            <?php endif; ?>
              <br>
            <!-- end box --> 

              <form method="POST">
                <div class="row">
                  
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4>AJOUTER UNE NOUVELLE CATEGORIE</h4>
                    </div>
                    <br>
                  </div>

                  <div class="col-xs-12">
                    <label>Nom de la catégorie</label>
                    <div class="input-text">
                      <input type="text" name="NomProduit" class="form-control">
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <label>Donner une description:</label>
                    <textarea class="form-control" name="Description"></textarea>
                  </div>

                  <div class="col-xs-12">
                    <br>
                    <div class="submit-text">
                      <button class="button" name="AddBtn"><i class="fa fa-plus"></i>&nbsp; <span>Créer une catégorie</span></button> &nbsp;&nbsp;&nbsp;
                      <a href="add_produit.php">Ajouter un produit</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  <!-- service section -->

<!-- JS --> 
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