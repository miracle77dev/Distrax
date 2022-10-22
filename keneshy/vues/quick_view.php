<?php
session_start();
require 'admin/modele/systeme_db.php';
require 'class/viewproduit.php';
require 'function/function.php';
 $produit=produitPanier($_GET['id']);
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Vue rapide</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- CSS Style -->
<link rel="stylesheet" href="vues/style.css">
</head>

<body class="cms-index-index">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<div id="page"> 
  
  <!-- Header -->

  <!-- end header -->
  
  
  <!-- Slideshow  -->
  <div class="main-slider" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img src="vues/images/banner-left.jpg" alt="banner"></div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
          <div id="jtv-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='vues/images/slider/slide-1.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Smooth, Rich & Loud Audio</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>headphone</div>
                      <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>World's Most advanced Wireless earbuds.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='72'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">EXPLORE NOW</a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='vues/images/slider/slide-2.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>
                      <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New Standard. under favorable smartwatches</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying </a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='vues/images/slider/slide-3.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='250'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Template for your business</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>Easy to modify</div>
                      <div class='tp-caption' data-x='310'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'>Perfect website solution for your</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='370'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Get Started</a> </div>
                    </div>
                  </li>
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                <p>On order over $99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>100% secure payments</h3>
                <p>Credit/ Debit Card/ Banking </p>
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
                <p>25% on order over $199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="inner-box">
    <div class="container">
      <div class="row"> 
        <!-- Banner -->
        <div class="col-md-3 top-banner hidden-sm">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="vues/images/sub1.jpg" alt="HTML template"></a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title"> Big Sale </div>
                  <div class="desc-text">Up to 55% off</div>
                  <span>Camera, Laptop & Mobile</span>
                  <p><a href="#" class="shop-now">Get it now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Best Sale -->
        <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Special Offers</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
                <div class="slider-items">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="vues/images/products/product-1.jpg" alt="HTML template"> <img class="hover-img" src="vues/images/products/product-2.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="vues/images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="vues/images/products/product-4.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="vues/images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="vues/images/products/product-6.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="vues/images/products/product-9.jpg" alt="HTML template"> <img class="hover-img" src="vues/images/products/product-8.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="vues/images/products/product-15.jpg" alt="HTML template"> <img class="hover-img" src="vues/images/products/product-10.jpg" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
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
        </div>
      </div>
    </div>
  </div>
  



  
  <!-- End Footer --> 
</div>
<div id="quick_view_popup-overlay"></div>
<div style="display: block;" id="quick_view_popup-wrap">
  <div id="quick_view_popup-outer">
    <div id="quick_view_popup-content">
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view-area">
          <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
            <div class="icon-sale-label sale-left">
              <?php if (isset($produit[0]->reduction)) {echo '-'.$produit[0]->reduction.' %';}?>
            </div>
            <div class="large-image"> <a href="admin/upload/<?=$produit[0]->img?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="admin/upload/<?=$produit[0]->img?>"> </a> </div>
            <div class="flexslider flexslider-thumb">
              <ul class="previews-list slides">
                <li>
                  <a href='admin/upload/<?=$produit[0]->img?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$produit[0]->img?>' "><img src="admin/upload/<?=$produit[0]->img?>" alt = "Le même produit"/>
                  </a>
                   </li>
                   <li>
                     <?php if (!empty($produit[0]->img2)):?>
                  <a href='admin/upload/<?=$produit[0]->img2?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$produit[0]->img2?>' "><img src="admin/upload/<?=$produit[0]->img2?>" alt = "Le même produit"/>
                  </a>
                  <?php endif;?>
                  </li>
                   <li>
                      <?php if (!empty($produit[0]->img3)):?>
                  <a href='admin/upload/<?=$produit[0]->img3?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$produit[0]->img3?>' "><img src="admin/upload/<?=$produit[0]->img3?>" alt = "Le même produit"/>
                  </a>
                      <?php endif;?>
                </li>
              </ul>
            </div>
            
            <!-- end: more-images --> 
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
            <div class="product-details-area">
              <div class="product-name">
                <h1><?=$produit[0]->titre?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Prix promo</span> <span class="price"><?=$produit[0]->prix_promo?> Fcfa</span> </p>
                <p class="old-price"> <span class="price-label">Prix:</span> <span class="price"><?=$produit[0]->prix?> Fcfa</span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="availability in-stock pull-right">Disponibilité: <span>En Stock</span></p>
              </div>
              <div class="short-description">
                <h2>Quittez la vue rapide</h2>
                <p><?=$produit[0]->descrip?></p>
              </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Couleur</h2>
                  <div class="color">
                    <ul>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Taille</h2>
                  <div class="size">
                    <ul>
                      <li><a href="#">S</a></li>
                      <li><a href="#">L</a></li>
                      <li><a href="#">M</a></li>
                      <li><a href="#">XL</a></li>
                      <li><a href="#">XXL</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    <label for="qty">Quantité:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                  <button class="button pro-add-to-cart" title="ajouter au panier" type="button"><span><i class="fa fa-shopping-basket"></i><a href="ajouter.php?id=<?=$produit[0]->id?>">ajouter au panier</a></span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i><span>Ajouter a mes préférés</span></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i><span>Ajouter à la liste de comparaison</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--product-view--> 
        
      </div>
    </div>
    <a style="display: inline;" id="quick_view_popup-close" href="index.php"><i class="icon pe-7s-close"></i></a> </div>
</div>

<script type="text/javascript" src="vues/js/jquery.min.js"></script> 

<!-- bootstrap vues/js --> 
<script type="text/javascript" src="vues/js/bootstrap.min.js"></script> 
<!-- Slider vues/js --> 
<script type="text/javascript" src="vues/js/revolution-slider.js"></script> 
<script type="text/javascript" src="vues/js/revolution-extension.js"></script> 
<!-- owl.carousel.min vues/js --> 
<script type="text/javascript" src="vues/js/owl.carousel.min.js"></script> 

<!-- jquery.mobile-menu vues/js --> 
<script type="text/javascript" src="vues/js/mobile-menu.js"></script> 

<!--jquery-ui.min vues/js --> 
<script type="text/javascript" src="vues/js/jquery-ui.js"></script> 

<!-- main vues/js --> 
<script type="text/javascript" src="vues/js/main.js"></script> 

<!-- countdown vues/js --> 
<script type="text/javascript" src="vues/js/countdown.js"></script> 
<!-- jquery.flexslider vues/js --> 
<script type="text/javascript" src="vues/js/jquery.flexslider.js"></script> 
<!-- Slider vues/js --> 
<script type="text/javascript" src="vues/js/revolution-slider.js"></script> 
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 865,
	            startheight: 450,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
					

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<!--cloud-zoom vues/js --> 
<script type="text/javascript" src="vues/js/cloud-zoom.js"></script>
</body>
</html>
