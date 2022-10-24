<!DOCTYPE html>
<html lang="fr">
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

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="vues/favicon.ico">

<!-- CSS Style -->
<link rel="stylesheet" href="vues/style.css">
</head>

<body class="product-page">
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 


<div id="page"> 
  
  <!-- Header -->
 
  <!-- end header -->
 
  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">DISTRAX</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="shop_grid.php">TUNIQUES HOMMES</a><span>&raquo;</span></li>
            <li><strong style="text-transform: uppercase;"><?=$Produit->NomProduit?></strong></li>
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
              <div class="icon-sale-label sale-left">Sale</div>
              
              <div class="large-image">
               <a href="admin/upload/<?=$Produit->ImagePrincipale ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="admin/upload/<?=$Produit->ImagePrincipale ?>" alt="pr img"/>
               </a>
              </div>

              <div class="flexslider flexslider-thumb">
                <ul class="previews-list slides">
                  <li>
                  <?php if (!empty($Produit->ImagePrincipale)):?>
                    <a href="admin/upload/<?=$Produit->ImagePrincipale ?>" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$Produit->ImagePrincipale ?>'"><img src="admin/upload/<?=$Produit->ImagePrincipale ?>" alt = "Thumbnail 2"/></a>
                  <?php endif;?>
                  </li>
                  <li>
                     <?php if (!empty($Produit->DeuxiemeImage)):?>
                    <a href='admin/upload/<?=$Produit->DeuxiemeImage ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$Produit->DeuxiemeImage ?>' "><img src="admin/upload/<?=$Produit->DeuxiemeImage ?>" alt = "Thumbnail 1"/></a>
                    <?php endif;?>
                  </li>
                  <li>
                     <?php if (!empty($Produit->TroisiemeImage)):?>
                    <a href='admin/upload/<?=$Produit->TroisiemeImage ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$Produit->TroisiemeImage ?>' "><img src="admin/upload/<?=$Produit->TroisiemeImage ?>" alt = "Thumbnail 1"/></a>
                    <?php endif;?>
                  </li>
                  <li>
                     <?php if (!empty($Produit->QuatriemeImage)):?>
                    <a href='admin/upload/<?=$Produit->QuatriemeImage ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'admin/upload/<?=$Produit->QuatriemeImage ?>' "><img src="admin/upload/<?=$Produit->QuatriemeImage ?>" alt = "Thumbnail 2"/></a>
                    <?php endif;?>
                  </li>
                </ul>
              </div>
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h1><?=$Produit->NomProduit?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?=$Produit->PrixProduit?> FCFA</span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $359.99 </span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                <p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>
              </div>
              <div class="short-description">
                <h2>Description rapide</h2>
                <p><?=$Produit->PetiteDescription?></p>
              </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                      <?php if (is_array($Couleur)) {
                        for ($i=0; $i <count($Couleur) ; $i++) { 
                          echo '<li><a href="#" style="background: <?=$Couleur[$i]->CodeRgb ?> ; width:20px; height: 19px; border:1px #d2dff4 solid;"></a></li>';
                        }
                      } ?>
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Size</h2>
                  <div class="size">
                    <ul>
                      <?php 
                        if (is_array($Taille) && count($Taille)!=0 && $Taille[0]!="") {
                            for ($i=0; $i <count($Taille) ; $i++) { 
                              echo "<li><a href='#'>$Taille[$i]</a></li>";
                            }
                        }
                       ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                  <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-basket"></i>Commandez maintenant</span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart-o"></i><span>Add to Wishlist</span></a></li>
                  <li><a href="#"><i class="fa fa-link"></i><span>Add to Compare</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                </ul>
              </div>
              <div class="pro-tags">
                <div class="pro-tags-title">Tags:</div>
                <a href="#">ecommerce</a>, <a href="#">bootstrap</a>, <a href="#">shopping</a>, <a href="#">fashion</a>, <a href="#">responsive</a> </div>
              <div class="share-box">
                <div class="title">Share in social media</div>
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
                        <p><?=$Produit->GrandeDescription?></p>
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
  
  <!-- Related Product Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="page-header">
            <h2>Related Products</h2>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="images/products/product-11.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-6.jpg" alt="HTML template"></figure>
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
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="images/products/product-15.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
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
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                          <figure> <img class="first-img" src="images/products/product-17.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
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
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="images/products/product-11.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-5.jpg" alt="HTML template"></figure>
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
                          <figure> <img class="first-img" src="images/products/product-8.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-2.jpg" alt="HTML template"></figure>
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
                          <figure> <img class="first-img" src="images/products/product-13.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
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
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="images/products/product-15.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-8.jpg" alt="HTML template"></figure>
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
                          <figure> <img class="first-img" src="images/products/product-16.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-6.jpg" alt="HTML template"></figure>
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
            <h2>UpSell Products</h2>
          </div>
          <div class="slider-items-products">
            <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                        <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
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
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                        <figure> <img class="first-img" src="images/products/product-12.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-9.jpg" alt="HTML template"></figure>
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
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                        <figure> <img class="first-img" src="images/products/product-3.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-16.jpg" alt="HTML template"></figure>
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
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                        <figure> <img class="first-img" src="images/products/product-12.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-4.jpg" alt="HTML template"></figure>
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
                      <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                        <figure> <img class="first-img" src="images/products/product-2.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-3.jpg" alt="HTML template"></figure>
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
                        <figure> <img class="first-img" src="images/products/product-5.jpg" alt="HTML template"> <img class="hover-img" src="images/products/product-6.jpg" alt="HTML template"></figure>
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
  <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> </div>

<!-- End Footer --> 

<!-- JS --> 

<!-- jquery js --> 
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