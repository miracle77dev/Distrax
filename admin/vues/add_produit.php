<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Basic page needs -->
  <meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KENESHY | Admin | Ajouter un produit</title>
  
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
<style type="text/css">
  .colorStyle{
    padding: 2px;
    margin: 2px;
    background:rgba(208, 213, 214, 0.4) ;
    border-radius: 4px;
    cursor: pointer;
  }
  .bleu:hover{
    background: blue;
    color: white;
  }
  .rouge:hover{
    background: red;
  }
  .noir:hover{
    background: black;
    color: white;
  }
  .blanc:hover{
    background: white;
    color: black;
  }
  .vert:hover{
    background: green;
    color: white;
  }
  .orange:hover{
    background: orange;
  }
  .jaune:hover{
    background: yellow;
  }
  .rose:hover{
    background: pink;
  }
  .violet:hover{
    background: purple;
    color: white;
  }
  .gris:hover{
    background: grey;
  }
  .marron:hover{
    background: brown;
    color: white;
  }

</style>
<!-- mobile menu -->
<div id="mobile-menu">
  <ul>
    <li><a href="index.php" class="home1">Home Pages</a>
      <ul>
        <li><a href="index.php"><span>Home Version 1</span></a></li>
        <li><a href="version2/index.php"><span>Home Version 2</span></a></li>
        <li><a href="version3/index.php"><span>Home Version 3</span></a></li>
        <li><a href="version4/index.php"><span>Home Version 4</span></a></li>
        <li><a href="version1rtl/index.php"><span>Home Version 1 RTL</span></a></li>
      </ul>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="#">Shop Pages </a>
          <ul>
            <li><a href="shop_grid.php"><span>Grid View Category Page</span></a></li>
            <li><a href="shop_grid_full_width.php"><span>Grid View Full Width</span></a></li>
            <li><a href="shop_list.php"><span>List View Category Page</span></a></li>
            <li><a href="single_product.php"><span>Full Width Product Page</span> </a></li>
            <li><a href="single_product_sidebar.php"><span>Product Page With Sidebar</span> </a></li>
            <li><a href="single_product_magnify_zoom.php"><span>Product Page Magnify Zoom</span> </a></li>
            <li><a href="shopping_cart.php"><span>Shopping Cart</span></a></li>
            <li><a href="wishlist.php"><span>Wishlist</span></a></li>
            <li><a href="compare.php"><span>Compare Products</span></a></li>
            <li><a href="checkout.php"><span>Checkout</span></a></li>
            <li><a href="sitemap.php"><span>Sitemap</span></a></li>
          </ul>
        </li>
        <li><a href="#">Static Pages </a>
          <ul>
            <li><a href="about_us.php"><span>About Us</span></a></li>
            <li><a href="contact_us.php"><span>Contact Us</span></a></li>
            <li><a href="orders_list.php"><span>Orders List</span></a></li>
            <li><a href="order_details.php"><span>Order Details</span></a></li>
            <li><a href="404error.php"><span>404 Error</span> </a></li>
            <li><a href="faq.php"><span>FAQ Page</span></a></li>
            <li><a href="manufacturers.php"><span>Manufacturers</span></a></li>
            <li><a href="quick_view.php"><span>Quick View</span></a></li>
            <li><a href="dashboard.php"><span>Account Dashboard</span></a></li>
            <li><a href="shortcodes.php"><span>Shortcodes</span> </a></li>
            <li><a href="typography.php"><span>Typography</span></a></li>
          </ul>
        </li>
        <li><a href="#"> Blog Pages </a>
          <ul>
            <li><a href="blog_right_sidebar.php">Blog – Right sidebar </a></li>
            <li><a href="blog_left_sidebar.php">Blog – Left sidebar </a></li>
            <li><a href="blog_full_width.php">Blog - Full width</a></li>
            <li><a href="blog_single_post.php">Single post </a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="blog.php">Blog</a>
      <ul>
        <li><a href="blog_right_sidebar.php"> Blog – Right Sidebar </a></li>
        <li><a href="blog_left_sidebar.php"> Blog – Left Sidebar </a></li>
        <li><a href="blog_full_width.php"> Blog – Full-Width </a></li>
        <li><a href="blog_single_post.php"> Single post </a></li>
      </ul>
    </li>
    <li><a href="shop_grid.php">TV &amp; Audio</a>
      <ul>
        <li><a href="#" class="">Headphones</a>
          <ul>
            <li><a href="shop_grid.php">Receivers &amp; Amplifier</a></li>
            <li><a href="shop_grid.php">Speakers Sports</a></li>
            <li><a href="shop_grid.php">Audio CD Players</a></li>
            <li><a href="shop_grid.php">Turntables</a></li>
          </ul>
        </li>
        <li><a href="#">Gaming Headsets</a>
          <ul>
            <li><a href="shop_grid.php">Accessories</a></li>
            <li><a href="shop_grid.php">Smart TVs Speakers</a></li>
            <li><a href="shop_grid.php">Cases &amp; Towers</a></li>
            <li><a href="shop_grid.php">Gaming Budget</a></li>
          </ul>
        </li>
        <li><a href="#">Home Theater Systems</a>
          <ul>
            <li><a href="shop_grid.php">TV &amp; Cinema</a></li>
            <li><a href="shop_grid.php">4K Ultra HD TVs</a></li>
            <li><a href="shop_grid.php">Curved TVs</a></li>
            <li><a href="shop_grid.php">Sound Bars</a></li>
          </ul>
        </li>
        <li><a href="#">Appliances</a>
          <ul>
            <li><a href="shop_grid.php">Refrigerators</a></li>
            <li><a href="shop_grid.php">Vacuum Cleaners</a></li>
            <li><a href="shop_grid.php">Irons &amp; Steamers</a></li>
            <li><a href="shop_grid.php">Washers Dryers</a></li>
          </ul>
        </li>
        <li><a href="#">Photo &amp; Camera</a>
          <ul>
            <li><a href="shop_grid.php">Cameras Digital SLR</a></li>
            <li><a href="shop_grid.php">Instant Film</a></li>
            <li><a href="shop_grid.php">Point &amp; Shoot</a></li>
            <li><a href="shop_grid.php">Waterproof</a></li>
          </ul>
        </li>
        <li><a href="#">Accessories</a>
          <ul>
            <li><a href="shop_grid.php">Cables Chargers</a></li>
            <li><a href="shop_grid.php">Cases Backup Battery</a></li>
            <li><a href="shop_grid.php">Meebox</a></li>
            <li><a href="shop_grid.php">Packs Screen</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.php">Apple Store</a>
      <ul>
        <li><a href="#" class="">Notebooks</a>
          <ul class="level1">
            <li><a href="shop_grid.php">Gradiente</a></li>
            <li><a href="shop_grid.php">Samsung</a></li>
            <li><a href="shop_grid.php">Toshiba</a></li>
            <li><a href="shop_grid.php">Nintendo DS</a></li>
          </ul>
        </li>
        <li><a href="#">Televisions</a>
          <ul class="level1">
            <li><a href="shop_grid.php">LCD Televisions</a></li>
            <li><a href="shop_grid.php">Projection Televisions</a></li>
            <li><a href="shop_grid.php">Play Stations</a></li>
            <li><a href="shop_grid.php">Video Accessories</a></li>
          </ul>
        </li>
        <li><a href="#" class="">Computer</a>
          <ul class="level1">
            <li><a href="shop_grid.php">Laptop</a></li>
            <li><a href="shop_grid.php">Mobile Electronics</a></li>
            <li><a href="shop_grid.php">Movies &amp; Music</a></li>
            <li><a href="shop_grid.php">Audio &amp; Video</a></li>
          </ul>
        </li>
        <li><a href="#">Home Theater</a>
          <ul class="level1">
            <li><a href="shop_grid.php">LED &amp; LCD TVs</a></li>
            <li><a href="shop_grid.php">Smart TVs</a></li>
            <li><a href="shop_grid.php">Speakers Sound Bars</a></li>
            <li><a href="shop_grid.php">Audio CD Players</a></li>
          </ul>
        </li>
        <li><a href="#">Accesories</a>
          <ul class="level1">
            <li><a href="shop_grid.php">Theater Systems</a></li>
            <li><a href="shop_grid.php">Turntables</a></li>
            <li><a href="shop_grid.php">Laptops Bags</a></li>
            <li><a href="shop_grid.php">Gaming Headsets</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.php">Photo &amp; Camera</a>
      <ul>
        <li><a href="shop_grid.php">Mobiles</a>
          <ul>
            <li><a href="shop_grid.php">iPhone</a></li>
            <li><a href="shop_grid.php">Samsung</a></li>
            <li><a href="shop_grid.php">Nokia</a></li>
            <li><a href="shop_grid.php">Sony</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.php" class="">Music &amp; Audio</a>
          <ul>
            <li><a href="shop_grid.php">Audio</a></li>
            <li><a href="shop_grid.php">Cameras</a></li>
            <li><a href="shop_grid.php">Appling</a></li>
            <li><a href="shop_grid.php">Car Music</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.php">Accessories</a>
          <ul>
            <li><a href="shop_grid.php">Home &amp; Office</a></li>
            <li><a href="shop_grid.php">TV &amp; Home Theater</a></li>
            <li><a href="shop_grid.php">Phones &amp; Radio</a></li>
            <li><a href="shop_grid.php">All Electronics</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.php">Smartphone</a></li>
    <li><a href="shop_grid.php">Games &amp; Video</a></li>
    <li><a href="shop_grid.php">Laptop</a></li>
    <li><a href="shop_grid.php">Accessories</a></li>
  </ul>
</div>
<!-- end mobile menu -->
<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs hidden-sm">Default welcome msg! </div>
              <!-- Language &amp; Currency wrapper -->
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"><span><img src="images/flag-default.jpg" alt="French"><span class="lg-fr">French</span><i class="fa fa-angle-down"></i></span></div>
                    <ul>
                      <li><a class="selected" href="#"><img src="images/flag-english.jpg" alt="english"><span>English</span></a></li>
                      <li><a href="#"><img src="images/flag-default.jpg" alt="French"><span>French</span></a></li>
                      <li><a href="#"><img src="images/flag-german.jpg" alt="German"><span>German</span></a></li>
                      <li><a href="#"><img src="images/flag-brazil.jpg" alt="Brazil"><span>Brazil</span></a></li>
                      <li><a href="#"><img src="images/flag-chile.jpg" alt="Chile"><span>Chile</span></a></li>
                      <li><a href="#"><img src="images/flag-spain.jpg" alt="Spain"><span>Spain</span></a></li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"><span>USD</span><i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li><a href="#"><span class="cur_icon">€</span>EUR</a></li>
                      <li><a href="#"><span class="cur_icon">¥</span>JPY</a></li>
                      <li><a class="selected" href="#"><span class="cur_icon">$</span>USD</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">Call Us: +123.456.789</span>
              <ul class="links">
                <li class="hidden-xs"><a title="Help Center" href="#"><span>Help Center</span></a></li>
                <li><a title="Store Locator" href="#"><span>Store Locator</span></a></li>
                <li><a title="Checkout" href="checkout.php"><span>Checkout</span></a></li>
                <li>
                  <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="account_page.php">Account</a></li>
                      <li><a href="wishlist.php">Wishlist</a></li>
                      <li><a href="orders_list.php">Order Tracking</a></li>
                      <li><a href="about_us.php">About us</a></li>
                      <li class="divider"></li>
                      <li><a href="account_page.php">Log In</a></li>
                      <li><a href="register_page.php">Register</a></li>
                    </ul>
                  </div>
                </li>
                <li><a title="login" href="account_page.php"><span>Login</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- header inner -->
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12 jtv-logo-block">
              <!-- Header Logo -->
              <div class="logo"><a title="e-commerce" href="index.php"><img alt="ShopMart" title="ShopMart" src="vues/images/logo.jpg"></a> </div>
            </div>
 
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="col-md-3 col-sm-2"></div>
          <div class="col-md-6 col-sm-8">
            <div class="single-input p-bottom50 clearfix">

              <!-- Notif box -->
              <?php if (isset($Success) && !empty($Success)) :?>
                <div class="margin-bottom"></div>
                <div class="successmes">
                  <div class="message-box-wrap"> <i class="fa fa-check-square fa-lg"></i>L'article a été ajouté avec succès</div>
                </div>
              <?php endif; ?>
              <?php if (isset($Data[0])&&!empty($Data[0])) :?>
                  <div class="margin-bottom"></div>
                  <div class="errormes">
                    <div class="message-box-wrap"> <i class="fa fa-exclamation-circle fa-lg"></i>Une ou plusieurs erreurs ont été détectées pendant le traitement</div>
                  </div>
                  <div class="margin-bottom"></div>
              <?php endif; ?>
              <br>
              <!-- end box --> 
              
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4>AJOUTER UN NOUVEAU PRODUIT</h4>
                    </div>
                    <br>
                  </div>

                   <div class="col-sm-6 "  style="display: flex;">
                      <select class="form-control" name="Categorie">
                        <!-- Charge les catégories dynamiquement -->
                        <option value="3">Choisir la catégorie de votre produit</option>
                      </select>
                    </div>

                  <div class="col-sm-6" style="display: flex;">
                    <label>Nom du produit:</label>
                    <div class="input-text">
                      <input type="text" name="NomProduit" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <label>Prix du produit:</label>
                    <div class="input-text">
                      <input type="text" name="PrixProduit" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <label>Quantité disponible:</label>
                    <div class="input-text">
                      <input type="text" name="QteProduit" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <label>Petite description:</label>
                    <textarea class="form-control" name="PetiteDescription" required></textarea>
                  </div>

                  <div class="col-xs-12">
                    <label>Grande description:</label>
                    <textarea class="form-control" name="GrandeDescription"></textarea>
                  </div>

                  <div class="col-xs-12">
                    <div class="billing-checkbox" title="Cela indiquera au client qu'il s'agit d'un nouveau produit">
                        <input type="checkbox" value="1" id="rememberme" name="NouveauProduit">
                        Nouveau produit dans le catalogue
                      </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="billing-checkbox" title="En cochant cette case, vous permettrez au client de choisir une couleur lors de la commande">
                        <input type="checkbox" id="rememberme" name="ActiverCouleur" onclick="ColorControle()">
                        Disponible en plusieurs couleurs
                      </div>
                  </div>

                  <div class="col-xs-12 ColorControl" style="display: none;">
                    <label>
                      <span class="colorStyle bleu"  onclick="getColor1()"> Bleu </span>
                        <span class="colorStyle rouge"  onclick="getColor2()"> Rouge </span>
                        <span class="colorStyle noir"  onclick="getColor3()"> Noir </span>
                        <span class="colorStyle blanc"  onclick="getColor4()"> Blanc </span>
                        <span class="colorStyle vert"  onclick="getColor5()"> Vert </span>
                        <span class="colorStyle orange"  onclick="getColor6()"> Orange </span>
                        <span class="colorStyle jaune"  onclick="getColor7()"> Jaune </span>
                        <span class="colorStyle rose"  onclick="getColor8()"> Rose </span>
                        <span class="colorStyle violet"  onclick="getColor9()"> Violet </span>
                        <span class="colorStyle gris"  onclick="getColor10()"> Gris </span>
                        <span class="colorStyle marron"  onclick="getColor11()"> Marron </span>
                    </label>
                    <textarea id="couleur" class="form-control" placeholder="Selectionnez les différentes couleurs disponible pour votre article" name="CouleursProduit"></textarea>
                    <span style="text-decoration: underline; cursor: pointer;" onclick="ClearC()">Vider</span>
                  </div>

                  <div class="col-xs-12">
                    <div class="billing-checkbox" title="Cette case permet au client de personnaliser la taille de l'article lors de la commande">
                        <input type="checkbox" id="rememberme" name="ActiverTaile" onclick="TailleControle()">
                        Disponible en plusieurs tailles
                      </div>
                  </div>

                   <div class="col-xs-12 TailleControle" style="display:none;">
                    <label>
                      <span class="colorStyle t_s"  onclick="getTaille1()"> S </span>
                        <span class="colorStyle t_l"  onclick="getTaille2()"> L </span>
                        <span class="colorStyle t_m"  onclick="getTaille3()"> M </span>
                        <span class="colorStyle t_xl"  onclick="getTaille4()"> XL </span>
                        <span class="colorStyle t_xxl"  onclick="getTaille5()"> XXL </span>
                    </label>
                    <textarea id="Taille" class="form-control" placeholder="Selectionnez les différentes tailles de l'article" name="TaillesProduit"></textarea>
                    <span style="text-decoration: underline; cursor: pointer;" onclick="ClearT()">Vider</span>
                  </div>

                  <div class="col-xs-12">
                    <label>Photo principale:</label>
                    <div class="input-text">
                      <input type="file" name="PhotoPrincipale" class="form-control">
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <label>Photos additionnelles(Maxi: 3) :</label>
                    <div class="input-text">
                      <input type="file" name="PhotoAdditionnelles[]" class="form-control" multiple>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <label>Ajouter des Tags (Optionnels):</label>
                    <div class="input-text">
                      <input type="text" name="TagProduit" class="form-control" placeholder="Champs lexical de l'article: Tunique,Tenue homme, vêtements hommes...">
                    </div>
                    <br>
                  </div>

                  <div class="col-xs-12">
                    <div class="billing-checkbox">
                        <input type="checkbox" value=1 id="Promo" name="ActiverPromotion" onclick="PromoControle()">
                        Mettre le produit en promotion
                    </div>
                  </div>

                  <!-- Debut promo -->
                  <div class="promoDiv"></div>
                  <!-- Fin de promo -->

                  <div class="col-xs-12">
                    <br>
                    <div class="submit-text">
                      <button class="button" name="addBtn"><i class="fa fa-plus"></i>&nbsp; <span>Ajouter ce produit</span></button>
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
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-12">
          <div class="footer-logo"><a href="index.php"><img src="images/footer-logo.png" alt="fotter logo"></a> </div>
          <p>Lorem Ipsum is simply dummy text of the print and typesetting industry. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet.</p>
          <div class="social">
            <ul class="inline-mode">
              <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google"></i></a></li>
              <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
              <li class="social-network linkedin"><a title="Connect us on Pinterest" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
              <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                <li><a href="#s">Delivery Information</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="sitemap.php">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="faq.php">FAQs</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
                <li><a href="sitemap.php"> Sites Map </a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Trends</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="#">My Orders</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li><a href="account_page.php">Account</a></li>
                <li><a href="wishlist.php">Wishlist</a></li>
                <li><a href="shopping_cart.php">Shopping Cart</a></li>
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Special</a></li>
                <li><a href="#">Lookbook</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Working hours<a class="expander visible-xs" href="#TabBlock-5">+</a></h3>
            <div class="tabBlock" id="TabBlock-5">
              <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
              <div class="footer-description"> <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                <b>Sunday:</b> Closed </div>
              <div class="payment">
                <ul>
                  <li><a href="#"><img title="Visa" alt="Visa" src="images/visa.png"></a></li>
                  <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                  <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                  <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
                </ul>
              </div>
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
  <a href="#" class="totop"> </a> </div>

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

  let Coul = document.getElementById("couleur")
  let Tail = document.getElementById('Taille')
  let Req = document.querySelector('.promoDiv')

  Coul.onmouseover = function () {
    Coul.disabled = true
  }
  window.onclick = function () {
    Coul.disabled = false
    Tail.disabled = false
  }

  Tail.onmouseover = function () {
    Tail.disabled = true
  }


  var Promo = document.getElementById("Promo").value;
  var CouleurValeur = document.getElementById("couleur").value;
  var TailleValeur = document.getElementById("Taille").value;
  function ColorControle() {
      if(document.querySelector(".ColorControl").style.display == "none"){
          document.querySelector(".ColorControl").style.display = "block";
      }
      else if (document.querySelector(".ColorControl").style.display == "block") {
        document.querySelector(".ColorControl").style.display = "none"
      }
  }

  function TailleControle() {
      if(document.querySelector(".TailleControle").style.display == "none"){
          document.querySelector(".TailleControle").style.display = "block";
      }
      else if (document.querySelector(".TailleControle").style.display == "block") {
        document.querySelector(".TailleControle").style.display = "none"
      }
  }
  function PromoControle() {
    if (Req.innerHTML == "") {
      Req.innerHTML = '<div class="col-sm-6">\
                    <div class="input-text">\
                      <input type="text" name="ReductionValeur" class="form-control" placeholder="% de reduction" required>\
                    </div>\
                  </div>\
                  <div class="col-sm-6">\
                    <div class="input-text">\
                      <input type="date" name="ReductionDelai" class="form-control" placeholder="Date d\'expiration" required>\
                    </div>\
                    <br>\
                  </div>\
                   <div class="col-sm-12 "  style="display: flex;">\
                      <select class="form-control" name="Emplacement">\
                        <!-- Charge les catégories dynamiquement -->\
                        <option>Choisir l\'emplacement sur la plateforme</option>\
                        <option>Les plus achetés</option> \
                      </select>\
                    </div>';
    }
    else{
       console.log("On vide les données")
       console.log(Req.innerHTML)
      Req.innerHTML = ""
    }
    
/*      if(document.querySelector(".promoDiv").style.display == "none"){
          document.querySelector(".promoDiv").style.display = "block";
      }
      else if (document.querySelector(".promoDiv").style.display == "block") {
        document.querySelector(".promoDiv").style.display = "none"
        Req.innerHTML = ""
      }*/
  }


  function ClearC() {
    document.getElementById("couleur").value = ""
    document.querySelector(".bleu").style.display="inline-block";
    document.querySelector(".marron").style.display="inline-block";
    document.querySelector(".orange").style.display="inline-block";
    document.querySelector(".noir").style.display="inline-block";
    document.querySelector(".jaune").style.display="inline-block";
    document.querySelector(".rose").style.display="inline-block";
    document.querySelector(".vert").style.display="inline-block";
    document.querySelector(".violet").style.display="inline-block";
    document.querySelector(".rouge").style.display="inline-block";
    document.querySelector(".blanc").style.display="inline-block";
    document.querySelector(".gris").style.display="inline-block";
    Padding = document.querySelectorAll(".colorStyle");
    for (var i = Padding.length - 1; i >= 0; i--) {
      Padding[i].style.padding = "2px";
    }
  }
  function ClearT() {
    document.getElementById("Taille").value = ""
    document.querySelector(".t_l").style.display="inline-block";
    document.querySelector(".t_m").style.display="inline-block";
    document.querySelector(".t_s").style.display="inline-block";
    document.querySelector(".t_xl").style.display="inline-block";
    document.querySelector(".t_xxl").style.display="inline-block";
    Padding = document.querySelectorAll(".colorStyle");
    for (var i = Padding.length - 1; i >= 0; i--) {
      Padding[i].style.padding = "2px";
    }
  }
  function getColor1() {
    var Couleur = document.querySelector(".bleu").innerHTML;
     if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".bleu").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".bleu").style.display="none";
    }
  }

 function getColor2() {
    var Couleur = document.querySelector(".rouge").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".rouge").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".rouge").style.display="none";
    }
  }

 function getColor3() {
    var Couleur = document.querySelector(".noir").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".noir").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".noir").style.display="none";
    }
  }
 function getColor4() {
    var Couleur = document.querySelector(".blanc").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".blanc").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".blanc").style.display="none";
    }
  }
 function getColor5() {
    var Couleur = document.querySelector(".vert").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".vert").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".vert").style.display="none";
    }
  }
 function getColor6() {
    var Couleur = document.querySelector(".orange").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".orange").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".orange").style.display="none";
    }
  }
 function getColor7() {
    var Couleur = document.querySelector(".jaune").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".jaune").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".jaune").style.display="none";
    }
  }
 function getColor8() {
    var Couleur = document.querySelector(".rose").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".rose").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".rose").style.display="none";
    }
  }
 function getColor9() {
    var Couleur = document.querySelector(".violet").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".violet").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".violet").style.display="none";
    }
  }
 function getColor10() {
    var Couleur = document.querySelector(".gris").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".gris").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".gris").style.display="none";
    }
  }
 function getColor11() {
    var Couleur = document.querySelector(".marron").innerHTML;
    if (document.getElementById("couleur").value == "") {
        document.getElementById("couleur").value = Couleur;
        document.querySelector(".marron").style.display="none";
    }
    else{
      document.getElementById("couleur").value = document.getElementById("couleur").value + "-"+Couleur;
      document.querySelector(".marron").style.display="none";
    }
  }
/*Taille*/
 function getTaille1(){
   var Couleur = document.querySelector(".t_s").innerHTML;
    if (document.getElementById("Taille").value == "") {
        document.getElementById("Taille").value = Couleur;
        document.querySelector(".t_s").style.display="none";
    }
    else{
      document.getElementById("Taille").value = document.getElementById("Taille").value + "-"+Couleur;
      document.querySelector(".t_s").style.display="none";
    }
 }

 function getTaille2(){
   var Couleur = document.querySelector(".t_l").innerHTML;
    if (document.getElementById("Taille").value == "") {
        document.getElementById("Taille").value = Couleur;
        document.querySelector(".t_l").style.display="none";
    }
    else{
      document.getElementById("Taille").value = document.getElementById("Taille").value + "-"+Couleur;
      document.querySelector(".t_l").style.display="none";
    }
 }
 function getTaille3(){
   var Couleur = document.querySelector(".t_m").innerHTML;
    if (document.getElementById("Taille").value == "") {
        document.getElementById("Taille").value = Couleur;
        document.querySelector(".t_m").style.display="none";
    }
    else{
      document.getElementById("Taille").value = document.getElementById("Taille").value + "-"+Couleur;
      document.querySelector(".t_m").style.display="none";
    }
 }
 function getTaille4(){
   var Couleur = document.querySelector(".t_xl").innerHTML;
    if (document.getElementById("Taille").value == "") {
        document.getElementById("Taille").value = Couleur;
        document.querySelector(".t_xl").style.display="none";
    }
    else{
      document.getElementById("Taille").value = document.getElementById("Taille").value + "-"+Couleur;
      document.querySelector(".t_xl").style.display="none";
    }
 }
 function getTaille5(){
   var Couleur = document.querySelector(".t_xxl").innerHTML;
    if (document.getElementById("Taille").value == "") {
        document.getElementById("Taille").value = Couleur;
        document.querySelector(".t_xxl").style.display="none";
    }
    else{
      document.getElementById("Taille").value = document.getElementById("Taille").value + "-"+Couleur;
      document.querySelector(".t_xxl").style.display="none";
    }
 }
</script>
</body>
</html>