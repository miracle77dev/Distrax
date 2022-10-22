<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>A propos du produit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="vues/style.css">
</head>
<body class="product-page">
<!--[if lt IE 8]>
<p class="browserupgrade">Veuillez mettre à jour votre navigateur svp<a href="http://browsehappy.com/">upgrade your browser</a> pour ameliorer votre espériance sur notre site.</p>
<![endif]--> 

<!-- mobile menu -->

<!-- end mobile menu -->
<div id="page"> 
  
  <!-- Header -->
  <?php require 'include/head.php'; ?>
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Aller à la page d'accueil" href="index.php">Accueil</a><span>&raquo;</span></li>
            <li class=""> <a title="Aller sur la page de la mode" href="shop_grid.php">Mode</a><span>&raquo;</span></li>
            <li><strong>Style</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">- <?= $produit[0]->reduction?>%</div>
              <div class="large-image">
               <a href="admin/upload/<?= $produit[0]->img?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="admin/upload/<?= $produit[0]->img?>" alt="<?= $produit[0]->titre?>"> </a>
                </div>
              <div class="flexslider flexslider-thumb">
                <ul class="previews-list slides">
                  <li><a href='admin/upload/<?= $produit[0]->img?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?= $produit[0]->img?>' "><img src="admin/upload/<?= $produit[0]->img?>" alt = "<?= $produit[0]->titre?>"/></a>
                  </li>
                  <li>
                  <?php if (!empty($produit[0]->img2)):?>
                    <a href='admin/upload/<?= $produit[0]->img2?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?= $produit[0]->img2?>' "><img src="admin/upload/<?= $produit[0]->img2?>" alt = "<?= $produit[0]->titre?>"/></a>
                  <?php endif;?>
                  </li>
                  <li>
                  <?php if (!empty($produit[0]->img3)):?>
                     <a href='admin/upload/<?= $produit[0]->img3?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?= $produit[0]->img3?>' "><img src="admin/upload/<?= $produit[0]->img3?>" alt = "<?= $produit[0]->titre?>"/></a>
                  <?php endif;?>
                  </li>
                </ul>
              </div>
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h1><?= $produit[0]->titre?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Prix promo</span> <span class="price"><?= $produit[0]->prix_promo?> Fcfa</span> </p>
                <p class="old-price"> <span class="price-label">Prix:</span> <span class="price"><?= $produit[0]->prix?> Fcfa</span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="rating-links"> <a href="#">14 avis(s)</a> <span class="separator">|</span> <a href="#">Ajouter votre avis</a> </p>
                <p class="availability in-stock pull-right">disponibilité: <span>En Stock</span></p>
              </div>
              <div class="short-description">
                <h2>Vue global  </h2>
                <p><?= $produit[0]->descrip?>
                <p><?= $produit[0]->descrip?></p>
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
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton moin">
                        <i class="fa fa-minus">&nbsp;</i>
                      </div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton aug"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                  <button class="button pro-add-to-cart" title="ajouter au panier" type="button"><span><i class="fa fa-shopping-basket"></i><a href="ajouter.php?id=<?=$produit[0]->id?>">ajouter au panier</a></span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart-o"></i><span>Ajouter a ma liste des préférées</span></a></li>
                  <li><a href="#"><i class="fa fa-link"></i><span>Ajouter a la liste des comparaison</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i><span>Envoyer par mail à un ami</span></a></li>
                </ul>
              </div>
              <div class="pro-tags">
                <div class="pro-tags-title">Tags:</div>
                <a href="#">Keney</a>, <a href="#">Keneshy</a>, <a href="#">Au keney</a>, <a href="#">Au keneshy</a></div>
              <div class="share-box">
                <div class="title">Partager sur les reseaux sociaux</div>
                <div class="socials-box"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-overview-tab">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="product-tab-inner">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>
                    <li> <a href="#reviews" data-toggle="tab">Reviews</a> </li>
                    <li><a href="#product_tags" data-toggle="tab">Tags</a></li>
                    <li> <a href="#custom_tabs" data-toggle="tab">Custom Tab</a> </li>
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                      <div class="std">
                        <p>Proin lectus ipsum, gravida et mattis vulputate, 
                          tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in 
                          faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend 
                          laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla
                          luctus malesuada tincidunt. Nunc facilisis sagittis ullamcorper. Proin 
                          lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et 
                          lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et 
                          ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus 
                          adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada 
                          tincidunt. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, 
                          gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. 
                          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                          cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl 
                          ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                        <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                      </div>
                    </div>
                    <div id="reviews" class="tab-pane fade">
                      <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="reviews-content-left">
                          <h2>Customer Reviews</h2>
                          <div class="review-ratting">
                            <p><a href="#">Amazing</a> Review by Company</p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> Angela Mack<small> (Posted on 16/12/2015)</small> </p>
                          </div>
                          <div class="review-ratting">
                            <p><a href="#">Good!!!!!</a> Review by Company</p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> Lifestyle<small> (Posted on 20/12/2015)</small> </p>
                          </div>
                          <div class="review-ratting">
                            <p><a href="#">Excellent</a> Review by Company</p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> Jone Deo<small> (Posted on 25/12/2015)</small> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 col-lg-7 col-md-7">
                        <div class="reviews-content-right">
                          <h2>Write Your Own Review</h2>
                          <form>
                            <h3>You're reviewing: <span>Donec Ac Tempus</span></h3>
                            <h4>How do you rate this product?<em>*</em></h4>
                            <div class="table-responsive reviews-table">
                              <table>
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <th>1 star</th>
                                    <th>2 stars</th>
                                    <th>3 stars</th>
                                    <th>4 stars</th>
                                    <th>5 stars</th>
                                  </tr>
                                  <tr>
                                    <td>Quality</td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                  </tr>
                                  <tr>
                                    <td>Price</td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                  </tr>
                                  <tr>
                                    <td>Value</td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-area">
                              <div class="form-element">
                                <label>Nickname <em>*</em></label>
                                <input type="text">
                              </div>
                              <div class="form-element">
                                <label>Summary of Your Review <em>*</em></label>
                                <input type="text">
                              </div>
                              <div class="form-element">
                                <label>Review <em>*</em></label>
                                <textarea></textarea>
                              </div>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" type="submit"><span><i class="fa fa-thumbs-up"></i> &nbsp;Review</span></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="product_tags">
                      <div class="box-collateral box-tags">
                        <div class="tags">
                          <form id="addTagForm" action="#" method="get">
                            <div class="form-add-tags">
                              <div class="input-box">
                                <label for="productTagName">Add Your Tags:</label>
                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                <button type="button" title="Add Tags" class="button add-tags"><i class="fa fa-plus"></i> &nbsp;<span>Add Tags</span> </button>
                              </div>
                              <!--input-box--> 
                            </div>
                          </form>
                        </div>
                        <!--tags-->
                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom_tabs">
                      <div class="product-tabs-content-inner clearfix">
                        <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when 
                          an unknown printer took a galley of type and scrambled it to make a type
                          specimen book. It has survived not only five centuries, but also the 
                          leap into electronic typesetting, remaining essentially unchanged. It 
                          was popularised in the 1960s with the release of Letraset sheets 
                          containing Lorem Ipsum passages, and more recently with desktop 
                          publishing software like Aldus PageMaker including versions of Lorem 
                          Ipsum.</span></p>
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
  
  <!-- Main Container End --> 
  
  <!-- Produit Similaire -->
  
                  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="page-header">
            <h2>Produit Similaire</h2>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                  <?php $s=similaire($produit[0]->sous_categorie); 
                  foreach ($s as $value):?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area">
                          <a title="<?=$value->titre?>" href="produit-unique.php?id=<?=$value->id?>">
                          <figure> <img class="first-img" src="admin/upload/<?=$value->img?>" alt="<?=$value->titre?>"></figure>
                          </a>
                         </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="vue-rapide.php?id=<?=$value->id?>"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="<?=$value->titre?>" href="single_product.php"><?=$value->titre?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$value->prix?></span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span><a href="ajouter.php?id=<?=$value->id?>">ajouter au panier</a></span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <?php endforeach;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Product Slider End --> 
  
  <!-- Upsell Product Slider -->
  <section class="upsell-product-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-header">
            <h2>Produits au top de la vente</h2>
          </div>
          <div class="slider-items-products">
            <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">
                 <?php $v=plusVendu($produit[0]->categorie); 
                  foreach ($v as $value):?>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-sale-label sale-left">-<?=$value->reduction?>%</div>
                      <div class="icon-new-label new-right">Nouveau</div>
                      <div class="pr-img-area"> <a title="<?=$value->titre?>" href="produit-unique.php?id=<?=$value->id?>">
                        <figure> <img class="first-img" src="admin/upload/<?=$value->img?>" alt="<?=$value->titre?>"></figure>
                        </a> </div>
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"> <a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                          <div class="mt-button add_to_compare"> <a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                          <div class="mt-button quick-view"> <a href="vue-rapide.php?id=<?=$value->id?>"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="<?=$value->titre?>" href="produit-unique.php?id=<?=$value->id?>"><?=$value->titre?></a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price"><?=$value->prix?> Fcfa</span> </span> </div>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart"><span><a href="ajouter.php?id=<?=$value->id?>">ajouter au panier</a></span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Upsell Product Slider End --> 
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
                <p>25% on order over $199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
 <?php require 'include/footer.php'?>

<!-- End Footer --> 
<script type="text/javascript" src="vues/js/jquery.min.js"></script> 
<script type="text/javascript" src="vues/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="vues/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="vues/js/cloud-zoom.js"></script> 
<script type="text/javascript" src="vues/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="vues/js/mobile-menu.js"></script> 
<script type="text/javascript" src="vues/js/jquery-ui.js"></script> 
<script type="text/javascript" src="vues/js/main.js"></script> 
<script type="text/javascript" src="vues/js/countdown.js"></script>
</body>
</html>

