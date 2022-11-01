<?php 
require '../admin/models/db.php';
require '../admin/class/marchand.php';
$Marchand = new Marchand($Connexion);
if (isset($_POST['add'])&&!empty($_POST['Nom'])&&!empty($_POST['Numero'])&&!empty($_POST['Email'])&&!empty($_POST['Page'])) {
	extract($_POST);
	$x = rand(807,5789);
	$Code = rand(9999,999999);
	$CodeFinal = substr(str_shuffle($x*$Code),3);
	$Data = [$CodeFinal,$CodeFinal,htmlspecialchars($Nom),htmlspecialchars($Numero),htmlspecialchars($Email),htmlspecialchars($Page)];
	$Marchand->AddMarchand($Data);
}
?>

<!doctype html>
	<html lang="fr_FR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
		<title>i-Land Africa</title>
		<meta name='robots' content='max-image-preview:large' />
		<noscript><style>#preloader{display:none;}</style></noscript><link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
		<link rel='dns-prefetch' href='http://s.w.org/' />
		<link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
		<link rel="alternate" type="application/rss+xml" title="My site &raquo; Лента" href="http://uruf.ru/feed/" />
		<link rel="alternate" type="application/rss+xml" title="My site &raquo; Лента комментариев" href="http://uruf.ru/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/uruf.ru\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.8"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>
		<link rel='stylesheet' id='wp-block-library-css'  href='./wp-includes/css/dist/block-library/style.mind988.css?ver=5.7.8' type='text/css' media='all' />
		<link rel='stylesheet' id='wp-block-library-theme-css'  href='./wp-includes/css/dist/block-library/theme.mind988.css?ver=5.7.8' type='text/css' media='all' />
		<link rel='stylesheet' id='wc-block-vendors-style-css'  href='./wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-stylee100.css?ver=4.7.2' type='text/css' media='all' />
		<link rel='stylesheet' id='wc-block-style-css'  href='./wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stylee100.css?ver=4.7.2' type='text/css' media='all' />
		<link rel='stylesheet' id='contact-form-7-css'  href='./wp-content/plugins/contact-form-7/includes/css/styles91d5.css?ver=5.4' type='text/css' media='all' />
		<link rel='stylesheet' id='rs-plugin-settings-css'  href='./wp-content/plugins/revslider/public/assets/css/rs6b7f2.css?ver=6.4.8' type='text/css' media='all' />
		<style id='rs-plugin-settings-inline-css' type='text/css'>
			#rs-demo-id {}
		</style>
		<link rel='stylesheet' id='woocommerce-layout-css'  href='./wp-content/plugins/woocommerce/assets/css/woocommerce-layout6619.css?ver=5.2.5' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='./wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen6619.css?ver=5.2.5' type='text/css' media='only screen and (max-width: 767px)' />
		<link rel='stylesheet' id='woocommerce-general-css'  href='./wp-content/plugins/woocommerce/assets/css/woocommerce6619.css?ver=5.2.5' type='text/css' media='all' />
		<style id='woocommerce-inline-inline-css' type='text/css'>
			.woocommerce form .form-row .required { visibility: visible; }
		</style>
		<link rel='stylesheet' id='jquery-colorbox-css'  href='./wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox13ac.css?ver=1.4.21' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='./wp-content/plugins/woocommerce/assets/css/prettyPhoto005e.css?ver=3.1.6' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery-selectBox-css'  href='./wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-icons-css'  href='./wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min21f9.css?ver=5.11.0' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-animations-css'  href='./wp-content/plugins/elementor/assets/lib/animations/animations.mindeae.css?ver=3.2.1' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='./wp-content/plugins/elementor/assets/css/frontend-legacy.mindeae.css?ver=3.2.1' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-frontend-css'  href='./wp-content/plugins/elementor/assets/css/frontend.mindeae.css?ver=3.2.1' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-global-css'  href='./wp-content/uploads/elementor/css/global8b2b.css?ver=1587730441' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-post-2787-css'  href='./wp-content/uploads/elementor/css/post-278738bd.css?ver=1588145297' type='text/css' media='all' />
		<link rel='stylesheet' id='digeco-gfonts-css'  href='http://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%7CRoboto%3A300%2C400%2C500%2C700%2C900&amp;ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-css'  href='./wp-content/themes/digeco/assets/css/bootstrap.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='flaticon-digeco-css'  href='./wp-content/themes/digeco/assets/fonts/flaticon-digeco/flaticon3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='nivo-slider-css'  href='./wp-content/themes/digeco/assets/css/nivo-slider.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='magnific-popup-css'  href='./wp-content/themes/digeco/assets/css/magnific-popup3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='./wp-content/themes/digeco/assets/css/font-awesome.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<style id='font-awesome-inline-css' type='text/css'>
			[data-font="FontAwesome"]:before {font-family: 'FontAwesome' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
		</style>
		<link rel='stylesheet' id='animate-css'  href='./wp-content/themes/digeco/assets/css/animate.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='select2-css'  href='./wp-content/plugins/woocommerce/assets/css/select26619.css?ver=5.2.5' type='text/css' media='all' />
		<link rel='stylesheet' id='meanmenu-css'  href='./wp-content/themes/digeco/assets/css/meanmenu3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='digeco-default-css'  href='./wp-content/themes/digeco/assets/css/default3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='digeco-elementor-css'  href='./wp-content/themes/digeco/assets/css/elementor3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='digeco-rtanimation-css'  href='./wp-content/themes/digeco/assets/css/rtanimation3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel='stylesheet' id='digeco-style-css'  href='./wp-content/themes/digeco/assets/css/style3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<style id='digeco-style-inline-css' type='text/css'>

			.entry-banner {
				background-color: #f8f8f8;
			}

			.entry-banner .entry-banner-content {
				text-align: center;
			}

			.footer-top-area {
				background: url(./wp-content/themes/digeco/assets/img/footer1_bg.png) no-repeat scroll center center / cover;
			}

			.footer-style-2 .footer-area {
				background: url(./wp-content/themes/digeco/assets/img/footer2_bg.png) no-repeat scroll center bottom;
			}

			.content-area {
				padding-top: 0px; 
				padding-bottom: 0px;
			}
			#page {
				background: url(  );
				background-color: #ffffff;
			}
			.single-digeco_team #page {
				background-image: none;
				background-color: transparent;
			}
			.single-digeco_team .site-main {
				background-image: url(  );
				background-color: #ffffff;
			}

			.error-page-area {		 
				background-color: #ffffff;
			}




		</style>
		<link rel='stylesheet' id='jquery-timepicker-css'  href='./wp-content/themes/digeco/assets/css/jquery.timepicker.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
		<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:500,400%7CPoppins:600&amp;display=swap&amp;ver=1619423486" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500,400%7CPoppins:600&amp;display=swap&amp;ver=1619423486" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500,400%7CPoppins:600&amp;display=swap&amp;ver=1619423486" /></noscript>

		<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='./wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='./wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
		<script type='text/javascript' src='./wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
		<script type='text/javascript' src='./wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
		<script data-wp-optimize-escape="/jquery.js"type='text/javascript' src='./wp-content/plugins/revslider/public/assets/js/rbtools.min75e4.js?ver=6.4.5' id='tp-tools-js'></script>
		<script data-wp-optimize-escape="/jquery.js"type='text/javascript' src='./wp-content/plugins/revslider/public/assets/js/rs6.minb7f2.js?ver=6.4.8' id='revmin-js'></script>
		<link rel="https://api.w.org/" href="http://uruf.ru/wp-json/" /><link rel="alternate" type="application/json" href="http://uruf.ru/wp-json/wp/v2/pages/2787" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://uruf.ru/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://uruf.ru/wp-includes/wlwmanifest.xml" /> 
		<meta name="generator" content="WordPress 5.7.8" />
		<meta name="generator" content="WooCommerce 5.2.5" />
		<link rel="canonical" href="index.html" />
		<link rel='shortlink' href='http://uruf.ru/?p=2787' />
		<link rel="alternate" type="application/json+oembed" href="http://uruf.ru/wp-json/oembed/1.0/embed?url=http%3A%2F%2Furuf.ru%2Fhome2-one-page%2F" />
		<link rel="alternate" type="text/xml+oembed" href="http://uruf.ru/wp-json/oembed/1.0/embed?url=http%3A%2F%2Furuf.ru%2Fhome2-one-page%2F&amp;format=xml" />
		<meta name="framework" content="Redux 4.1.26" /><link rel='preload' href='http://uruf.ru/wp-content/themes/digeco/assets/webfonts/fa-brands-400.woff2' as='font' type='font/woff2' crossorigin /><link rel='preload' href='http://uruf.ru/wp-content/themes/digeco/assets/webfonts/fa-regular-400.woff2' as='font' type='font/woff2' crossorigin /><link rel='preload' href='http://uruf.ru/wp-content/plugins/revslider/public/assets/fonts/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0' as='font' type='font/woff2' crossorigin /><link rel='preload' href='http://uruf.ru/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2' as='font' type='font/woff2' crossorigin /><link rel='preconnect' href='https://fonts.gstatic.com/' />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
		<meta name="generator" content="Powered by Slider Revolution 6.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
		<link rel="icon" href="./wp-content/uploads/2020/02/cropped-favicon-100x100.png" sizes="32x32" />
		<link rel="icon" href="./wp-content/uploads/2020/02/cropped-favicon-300x300.png" sizes="192x192" />
		<link rel="apple-touch-icon" href="./wp-content/uploads/2020/02/cropped-favicon-300x300.png" />
		<meta name="msapplication-TileImage" content="http://uruf.ru/wp-content/uploads/2020/02/cropped-favicon-300x300.png" />
		<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
							e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

							var nl = new Array(e.rl.length),
						ix = 0,						
						sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
							sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
							var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		};</script>
	</head>
	<body class="page-template-default page page-id-2787 wp-embed-responsive theme-digeco woocommerce-no-js header-style-2 footer-style-2 trheader no-sidebar right-sidebar product-grid-view elementor-default elementor-kit-2504 elementor-page elementor-page-2787">

		<div id="preloader" class="tlp-preloader">
			<div class="animation-preloader">
				<div class="tlp-spinner"></div>
				<img src="./wp-content/themes/digeco/assets/img/preloder.png" alt="preloader">
			</div>
		</div>
		<div id="page" class="site">		
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<header id="masthead" class="site-header">			
				<div id="header-2" class="header-area header-fixed ">

					<div class="masthead-container header-controll" id="sticker">
						<div class="container-fluid">
							<div class="menu-full-wrap">
								<div class="site-branding">
									<a class="dark-logo" href="http://uruf.ru/"><img src="./wp-content/themes/digeco/assets/img/logo.png" alt="My site"></a>
									<a class="light-logo" href="http://uruf.ru/"><img src="./wp-content/themes/digeco/assets/img/logo2.png" alt="My site"></a>
								</div>
								<div class="menu-wrap">
									<div id="site-navigation" class="main-navigation">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</header>		

			<div id="meanmenu"></div>
			<div id="header-area-space"></div>

			<div id="content" class="site-content">	
				<div id="primary" class="content-area">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-12">
								<main id="main" class="site-main">


									<article id="post-2787" class="post-2787 page type-page status-publish hentry">

										<div class="entry-content">
											<div data-elementor-type="wp-page" data-elementor-id="2787" class="elementor elementor-2787" data-elementor-settings="[]">
												<div class="elementor-inner">
													<div class="elementor-section-wrap">
														<section class="elementor-section elementor-top-section elementor-element elementor-element-8e0b37e elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="8e0b37e" data-element_type="section" id="hometop" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-row">
																	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2dca9d7" data-id="2dca9d7" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-3de9d70 elementor-widget elementor-widget-shortcode" data-id="3de9d70" data-element_type="widget" data-widget_type="shortcode.default">
																					<div class="elementor-widget-container">
																						<div class="elementor-shortcode">
																							<!-- START Slider home 2 REVOLUTION SLIDER 6.4.8 --><p class="rs-p-wp-fix"></p>
																							<rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
																								<rs-module id="rev_slider_4_1" style="" data-version="6.4.8">
																									<rs-slides>
																										<rs-slide data-key="rs-4" data-title="Slide" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
																											<img src="./wp-content/plugins/revslider/public/assets/assets/transparent.png" alt="Slide" title="Home2 (One Page)" class="rev-slidebg tp-rs-img" data-parallax="off" data-no-retina>
<!--
--><rs-layer
id="slider-4-slide-4-layer-0" 
data-type="image"
data-rsp_ch="on"
data-xy="x:l,l,l,c;xo:745px,495px,376px,0;yo:205px,136px,103px,30px;"
data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
data-dim="w:730px,485px,368px,391px;h:563px,374px,284px,301px;"
data-sba="so:0ms"
data-frame_0="x:right;"
data-frame_1="e:sine.out;st:3000;sp:1200;"
data-frame_999="y:50,33,25,15;o:0;st:w;sp:1000;"
style="z-index:13;"
><img loading="lazy" src="./wp-content/uploads/2020/02/illustration2.png" alt="illustration2" class="tp-rs-img" width="807" height="622" data-no-retina> 
							</rs-layer><!--

							--><h1
							id="slider-4-slide-4-layer-1" 
							class="rs-layer"
							data-type="text"
							data-color="#1d2124"
							data-rsp_ch="on"
							data-xy="x:l,l,l,c;xo:30px,19px,20px,0;yo:370px,246px,155px,425px;"
							data-text="w:normal;s:60,44,40,40;l:70,56,48,50;fw:700;a:left,left,left,center;"
							data-frame_0="y:50,33,25,15;"
							data-frame_1="e:sine.in;st:3500;sp:500;"
							data-frame_999="o:0;st:w;"
							style="z-index:17;font-family:Poppins;"
							>Vendez rapidement<br> <span style="color:#5a49f8">Vendez 17 x plus</span> 
							</h1><!--

							--><rs-layer
							id="slider-4-slide-4-layer-2" 
							data-type="text"
							data-color="#5a49f8"
							data-rsp_ch="on"
							data-xy="x:l,l,l,c;xo:30px,19px,20px,0;yo:325px,216px,115px,390px;"
							data-text="w:normal;s:16,16,16,15;l:25,22,22,26;ls:4px,2px,2px,1px;fw:500;"
							data-frame_0="y:50,33,25,15;"
							data-frame_1="e:sine.in;st:3000;sp:500;"
							data-frame_999="o:0;e:power4.inOut;st:w;sp:1200;"
							data-frame_999_sfx="se:blocktotop;"
							style="z-index:18;font-family:Roboto;"
							>iLand Africa 
							</rs-layer><!--

							--><p
							id="slider-4-slide-4-layer-3" 
							class="rs-layer"
							data-type="text"
							data-color="#1d2124"
							data-rsp_ch="on"
							data-xy="x:l,l,l,c;xo:30px,19px,20px,0;yo:530px,378px,268px,540px;"
							data-text="w:normal;s:18,14,16,15;l:30,26,26,24;a:left,left,left,center;"
							data-frame_0="y:50,33,25,15;"
							data-frame_1="e:sine.in;st:4000;sp:500;"
							data-frame_999="o:0;st:w;"
							style="z-index:16;font-family:Roboto;"
							>Grursus mal suada faci lisis Lorem ipsum dolarorit mor ametion<br> the consectetur nec odio aea the dumm text. 
							</p><!--

							--><rs-layer
							id="slider-4-slide-4-layer-6" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-350px,-232px,-176px,-108px;yo:-4px,-2px,-1px,0;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:863px,573px,435px,268px;h:471px,313px,237px,146px;"
							data-frame_0="x:left;"
							data-frame_1="e:sine.in;sp:2000;"
							data-frame_999="o:0;st:w;"
							style="z-index:12;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element4.png" alt="element4" class="tp-rs-img" width="863" height="471" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-7" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-215px,-142px,-107px,-66px;yo:230px,152px,115px,70px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:505px,335px,254px,156px;h:688px,457px,347px,214px;"
							data-frame_0="x:left;"
							data-frame_1="e:sine.in;st:300;sp:2000;"
							data-frame_999="o:0;st:w;"
							style="z-index:11;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element5.png" alt="element5" class="tp-rs-img" width="505" height="688" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-8" 
							data-type="text"
							data-rsp_ch="on"
							data-xy="x:l,l,l,c;xo:230px,210px,210px,0;y:t,t,t,b;yo:635px,460px,345px,30px;"
							data-text="w:normal;s:16,16,12,16;l:30,30,22,18;a:left,left,left,center;"
							data-vbility="t,t,t,f"
							data-frame_0="y:50,33,25,15;"
							data-frame_1="e:sine.in;st:4800;sp:500;"
							data-frame_999="o:0;st:w;"
							style="z-index:14;font-family:Roboto;"
							><a class="btn-ghost btn-dark" href="#">En savoir plus</a> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-9" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-215px,-142px,-107px,-66px;yo:300px,199px,151px,93px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:448px,297px,225px,138px;h:574px,381px,289px,178px;"
							data-frame_0="x:left;"
							data-frame_1="e:sine.in;st:400;sp:2000;"
							data-frame_999="o:0;st:w;"
							style="z-index:10;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element6.png" alt="element6" class="tp-rs-img" width="448" height="574" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-10" 
							data-type="text"
							data-rsp_ch="on"
							data-xy="x:l,l,l,c;xo:33px,20px,20px,0;y:t,t,t,b;yo:635px,460px,345px,85px;"
							data-text="w:normal;s:16,16,12,16;l:30,30,22,18;a:left,left,left,center;"
							data-frame_0="y:50,33,25,15;"
							data-frame_1="e:sine.in;st:4500;sp:500;"
							data-frame_999="o:0;st:w;"
							style="z-index:15;font-family:Roboto;"
							><a class="button-gradient-1" href="#contact">S'inscrire<i class="flaticon-next"></i></a> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-11" 
							class="slider2_animate1"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:278px,184px,139px,85px;yo:126px,83px,63px,38px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:21px,13px,9px,5px;h:21px,13px,9px,5px;"
							data-frame_0="sX:0.9;sY:0.9;"
							data-frame_1="e:sine.in;st:400;sp:1000;"
							data-frame_999="o:0;st:w;"
							style="z-index:19;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element23.png" alt="element23" class="tp-rs-img" width="21" height="21" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-12" 
							class="slider2_animate2"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:542px,360px,273px,168px;yo:241px,160px,121px,74px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:14px,9px,6px,3px;h:14px,9px,6px,3px;"
							data-frame_0="sX:0.9;sY:0.9;"
							data-frame_1="e:sine.in;st:400;sp:1000;"
							data-frame_999="o:0;st:w;"
							style="z-index:20;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element24.png" alt="element24" class="tp-rs-img" width="14" height="14" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-13" 
							class="slider2_animate3"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:761px,506px,384px,236px;yo:157px,104px,79px,48px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:19px,12px,9px,5px;h:20px,13px,9px,5px;"
							data-frame_0="sX:0.9;sY:0.9;"
							data-frame_1="e:sine.in;st:400;sp:1000;"
							data-frame_999="o:0;st:w;"
							style="z-index:21;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element25.png" alt="element25" class="tp-rs-img" width="19" height="20" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-14" 
							class="slider2_animate4"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:407px,270px,205px,126px;yo:613px,407px,309px,190px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:19px,12px,9px,5px;h:20px,13px,9px,5px;"
							data-frame_0="sX:0.9;sY:0.9;"
							data-frame_1="e:sine.in;st:400;sp:1000;"
							data-frame_999="o:0;st:w;"
							style="z-index:22;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element26.png" alt="element26" class="tp-rs-img" width="19" height="20" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-15" 
							class="slider2_animate5"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:534px,355px,269px,165px;yo:735px,488px,370px,228px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:8px,5px,3px,1px;h:8px,5px,3px,1px;"
							data-frame_0="sX:0.9;sY:0.9;"
							data-frame_1="e:sine.in;st:400;sp:1000;"
							data-frame_999="o:0;st:w;"
							style="z-index:23;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element27.png" alt="element27" class="tp-rs-img" width="8" height="8" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-16" 
							class="slider2_animate6"
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:833px,553px,420px,259px;yo:739px,491px,373px,230px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:14px,9px,6px,3px;h:14px,9px,6px,3px;"
							data-frame_0="sX:0.9;sY:0.9;"
							data-frame_1="e:sine.in;st:400;sp:1000;"
							data-frame_999="o:0;st:w;"
							style="z-index:24;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element28.png" alt="element28" class="tp-rs-img" width="14" height="14" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-17" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:-210px,-139px,-105px,-64px;yo:-12px,-7px,-5px,-3px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:499px,331px,251px,154px;h:234px,155px,117px,72px;"
							data-frame_0="x:left;"
							data-frame_1="e:sine.in;st:900;sp:2000;"
							data-frame_999="o:0;st:w;"
							style="z-index:9;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element57.png" alt="element57" class="tp-rs-img" width="499" height="234" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
							id="slider-4-slide-4-layer-18" 
							data-type="image"
							data-rsp_ch="on"
							data-xy="xo:750px,498px,378px,233px;"
							data-text="w:normal;s:20,13,9,5;l:0,16,12,7;"
							data-dim="w:972px,646px,490px,302px;h:940px,625px,474px,292px;"
							data-frame_0="x:right;"
							data-frame_1="e:sine.in;st:1100;sp:2000;"
							data-frame_999="o:0;st:w;"
							style="z-index:7;"
							><img loading="lazy" src="./wp-content/uploads/2020/02/element58.png" alt="element58" class="tp-rs-img" width="972" height="940" data-no-retina> 
							</rs-layer><!--
							-->						</rs-slide>
						</rs-slides>
					</rs-module>
					<script type="text/javascript">
						setREVStartSize({c: 'rev_slider_4_1',rl:[1240,1024,778,480],el:[920,668,500,750],gw:[1540,1024,778,480],gh:[920,668,500,750],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
						var	revapi4,
						tpj;
						function revinit_revslider41() {
							jQuery(function() {
								tpj = jQuery;
								revapi4 = tpj("#rev_slider_4_1");
								if(revapi4==undefined || revapi4.revolution == undefined){
									revslider_showDoubleJqueryError("rev_slider_4_1");
								}else{
									revapi4.revolution({
										sliderLayout:"fullwidth",
										visibilityLevels:"1240,1024,778,480",
										gridwidth:"1540,1024,778,480",
										gridheight:"920,668,500,750",
										spinner:"spinner0",
										perspectiveType:"local",
										editorheight:"920,668,500,750",
										responsiveLevels:"1240,1024,778,480",
										progressBar:{disableProgressBar:true},
										navigation: {
											onHoverStop:false
										},
										parallax: {
											levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
											type:"scroll",
											origo:"slideCenter",
											speed:0
										},
										scrolleffect: {
											set:true,
											multiplicator:1.3,
											multiplicator_layers:1.3
										},
										sbtimeline: {
											set:true
										},
										fallbacks: {
											allowHTML5AutoPlayOnAndroid:true
										},
									});
								}

							});
					} // End of RevInitScript
					var once_revslider41 = false;
					if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider41 ) { once_revslider41 = true; revinit_revslider41();}});} else {once_revslider41 = true; revinit_revslider41();}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-89ac830 elementor-section-stretched elementor-section-full_width elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-height-default" data-id="89ac830" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e455746" data-id="e455746" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4411d53 elementor-widget elementor-widget-rt-shape" data-id="4411d53" data-element_type="widget" data-widget_type="rt-shape.default">
							<div class="elementor-widget-container">
								<div class="default-animate animate-shape-style2">
									<div class="animated-shape">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="682px" height="624px" data-parallax='{"x" : 150, "y" : -400}'>
											<path fill-rule="evenodd"  fill="rgb(249, 251, 255)" d="M129.861,445.151 C135.817,359.733 165.631,309.507 69.925,231.284 C-48.622,134.391 1.806,7.438 100.124,2.487 C180.263,-1.549 184.232,52.109 291.793,81.829 C351.092,98.213 363.911,86.655 391.662,45.581 C442.752,-30.034 518.868,-4.403 507.727,69.983 C496.050,147.952 503.636,232.416 606.763,223.993 C707.036,215.803 714.686,361.609 582.959,374.723 C481.641,384.808 441.418,364.086 368.153,540.352 C316.484,664.660 114.605,663.966 129.861,445.151 Z"/>
										</svg>
									</div>
								</div>		</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-bb698d7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bb698d7" data-element_type="section" id="services" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-row">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f14316c" data-id="f14316c" data-element_type="column">
					<div class="elementor-column-wrap elementor-element-populated">
						<div class="elementor-widget-wrap">
							<div class="elementor-element elementor-element-e033bc5 elementor-widget elementor-widget-rt-title" data-id="e033bc5" data-element_type="widget" data-widget_type="rt-title.default">
								<div class="elementor-widget-container">
									<div class="section-default-style section-title-style2">
										<div class="section-title-holder no-animation">	
											<div class="translate-bottom-50 opacity-animation transition-50 transition-delay-100">
												<div class="sub-title">FEATURES</div>
											</div>
											<div class="translate-bottom-50 opacity-animation transition-50 transition-delay-600">
												<h2 class="rtin-title">Let’s Check Our Services</h2>
											</div>
											<div class="translate-bottom-50 opacity-animation transition-50 transition-delay-1100">
												<p class="sub-text">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industrys standard dummy text ever since</p>
											</div>
										</div>
									</div>		</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-6f98fdd9 elementor-section-stretched elementor-section-full_width responsive-991-1199 elementor-section-height-default elementor-section-height-default" data-id="6f98fdd9" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1cb2b30" data-id="1cb2b30" data-element_type="column">
						<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
								<div class="elementor-element elementor-element-55420be elementor-widget elementor-widget-rt-info-box" data-id="55420be" data-element_type="widget" data-widget_type="rt-info-box.default">
									<div class="elementor-widget-container">
										<div class="no-animation">
											<div class="translate-left-10 opacity-animation transition-100 transition-delay-100">
												<div class="info-box-default info-box-style3">
													<div class="rtin-item rtin-icon">
														<div class="rtin-media">
															<div class="rtin-icon">			

																<i class=" flaticon-filter"></i>
															</div>
														</div>
														<div class="rtin-content">
															<h3 class="rtin-title"><a href="#">Market Research</a></h3>
															<div class="rtin-text">Grursus mal suada faci ipsum to and the and dolarorit ametion consectetur elitto more bulum that odio</div>
															<div class="info-box-button"><a class="button-1" href="#">Read More<i class="flaticon-next"></i></a></div>		
														</div>
													</div>
												</div>
											</div>
										</div>		</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-55b87de1" data-id="55b87de1" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-6063cac elementor-widget elementor-widget-rt-info-box" data-id="6063cac" data-element_type="widget" data-widget_type="rt-info-box.default">
										<div class="elementor-widget-container">
											<div class="no-animation">
												<div class="translate-left-10 opacity-animation transition-100 transition-delay-400">
													<div class="info-box-default info-box-style3">
														<div class="rtin-item rtin-icon">
															<div class="rtin-media">
																<div class="rtin-icon">			

																	<i class=" flaticon-layers-1"></i>
																</div>
															</div>
															<div class="rtin-content">
																<h3 class="rtin-title"><a href="#">Creative Layout</a></h3>
																<div class="rtin-text">Grursus mal suada faci ipsum to and the and dolarorit ametion consectetur elitto more bulum that odio</div>
																<div class="info-box-button"><a class="button-1" href="#">Read More<i class="flaticon-next"></i></a></div>		
															</div>
														</div>
													</div>
												</div>
											</div>		</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-6a940356" data-id="6a940356" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-74ea6b05 elementor-widget elementor-widget-rt-info-box" data-id="74ea6b05" data-element_type="widget" data-widget_type="rt-info-box.default">
											<div class="elementor-widget-container">
												<div class="no-animation">
													<div class="translate-left-10 opacity-animation transition-100 transition-delay-700">
														<div class="info-box-default info-box-style3">
															<div class="rtin-item rtin-icon">
																<div class="rtin-media">
																	<div class="rtin-icon">			

																		<i class=" flaticon-speaker"></i>
																	</div>
																</div>
																<div class="rtin-content">
																	<h3 class="rtin-title"><a href="#">Digital Marketing</a></h3>
																	<div class="rtin-text">Grursus mal suada faci ipsum to and the and dolarorit ametion consectetur elitto more bulum that odio</div>
																	<div class="info-box-button"><a class="button-1" href="#">Read More<i class="flaticon-next"></i></a></div>		
																</div>
															</div>
														</div>
													</div>
												</div>		</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-17f81360" data-id="17f81360" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-245111ab elementor-widget elementor-widget-rt-info-box" data-id="245111ab" data-element_type="widget" data-widget_type="rt-info-box.default">
												<div class="elementor-widget-container">
													<div class="no-animation">
														<div class="translate-left-10 opacity-animation transition-100 transition-delay-1000">
															<div class="info-box-default info-box-style3">
																<div class="rtin-item rtin-icon">
																	<div class="rtin-media">
																		<div class="rtin-icon">			

																			<i class=" flaticon-chart"></i>
																		</div>
																	</div>
																	<div class="rtin-content">
																		<h3 class="rtin-title"><a href="#">SEO &amp; Backlinks</a></h3>
																		<div class="rtin-text">Grursus mal suada faci ipsum to and the and dolarorit ametion consectetur elitto more bulum that odio</div>
																		<div class="info-box-button"><a class="button-1" href="#">Read More<i class="flaticon-next"></i></a></div>		
																	</div>
																</div>
															</div>
														</div>
													</div>		</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-421472fc" data-id="421472fc" data-element_type="column">
										<div class="elementor-column-wrap elementor-element-populated">
											<div class="elementor-widget-wrap">
												<div class="elementor-element elementor-element-73e3fb62 elementor-widget elementor-widget-rt-info-box" data-id="73e3fb62" data-element_type="widget" data-widget_type="rt-info-box.default">
													<div class="elementor-widget-container">
														<div class="no-animation">
															<div class="translate-left-10 opacity-animation transition-100 transition-delay-1300">
																<div class="info-box-default info-box-style3">
																	<div class="rtin-item rtin-icon">
																		<div class="rtin-media">
																			<div class="rtin-icon">			

																				<i class=" flaticon-graph"></i>
																			</div>
																		</div>
																		<div class="rtin-content">
																			<h3 class="rtin-title"><a href="#">Development</a></h3>
																			<div class="rtin-text">Grursus mal suada faci ipsum to and the and dolarorit ametion consectetur elitto more bulum that odio</div>
																			<div class="info-box-button"><a class="button-1" href="#">Read More<i class="flaticon-next"></i></a></div>		
																		</div>
																	</div>
																</div>
															</div>
														</div>		</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-cf65945 elementor-section-stretched elementor-section-full_width shape-content elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-height-default" data-id="cf65945" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b542c5a" data-id="b542c5a" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-3ea1768 shape-content elementor-widget elementor-widget-rt-shape" data-id="3ea1768" data-element_type="widget" data-widget_type="rt-shape.default">
														<div class="elementor-widget-container">
															<div class="default-animate animate-shape-style4">
																<div class="has-animation">
																	<ul class="animated-shape-big">
																		<li class="translate-right-75 opacity-animation transition-200 transition-delay-1500">
																			<img width="440px" height="641px" loading="lazy" src="./wp-content/themes/digeco/assets/element/element21.png" alt="Animated Figure">
																		</li>
																		<li class="translate-right-75 opacity-animation transition-200 transition-delay-2000">
																			<img width="348px" height="641px" loading="lazy" src="./wp-content/themes/digeco/assets/element/element22.png" alt="Animated Figure">
																		</li>
																	</ul>
																	<div class="opacity-animation transition-200 transition-delay-3500">
																		<ul class="animated-shape-small">
																			<li>
																				<img width="15px" height="15px" loading="lazy" src="./wp-content/themes/digeco/assets/element/element29.png" alt="Animated Figure">
																			</li>
																			<li>
																				<img width="14px" height="14px" loading="lazy" src="./wp-content/themes/digeco/assets/element/element30.png" alt="Animated Figure">
																			</li>
																			<li>
																				<img width="19px" height="20px" loading="lazy" src="./wp-content/themes/digeco/assets/element/element31.png" alt="Animated Figure">
																			</li>
																		</ul>
																	</div>
																</div>
															</div>		</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>



								<section class="elementor-section elementor-top-section elementor-element elementor-element-24e0beb elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="24e0beb" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-row">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf29248" data-id="bf29248" data-element_type="column">
												<div class="elementor-column-wrap elementor-element-populated">
													<div class="elementor-widget-wrap">
														<div class="elementor-element elementor-element-62be580 elementor-widget elementor-widget-rt-About-image-text" data-id="62be580" data-element_type="widget" data-widget_type="rt-About-image-text.default">
															<div class="elementor-widget-container">
																<div class="about-image-text about-layout-style3">
																	<div class="rtin-item right-image has-animation">
																		<div class="row">
																			<div class="col-lg-6 col-12 order-lg-2">
																				<div class="translate-right-75 opacity-animation transition-150 transition-delay-200">
																					<div class="about-image">
																						<a href="#"><img width="562" height="408" src="./wp-content/uploads/2020/01/feature5.png" class="attachment-full size-full" alt="" loading="lazy" /></a>				
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-6 col-12 order-lg-1">
																				<div class="about-content">
																					<h2 class="rtin-title">Getting The Maximum Out Of Any Business Company.</h2>
																					<div class="rtin-content"><p>Grursus mal suada faci lisis Lorem ipsum dolarorit ametion the at dumm consectetur elit. Vesti at bulum nec the at odio aea the dumm ipsum on that at dolocons rsus mal suada and fadolorit to the consectetur elit. All the this Lorem generators on the Internet tend ready making. Lorem ipsum more dolarorit ametion the at dumm consectetur elit. Lorem ipsum dolarorit is ametion the at dumm consectetur elit. Lorem ipsum dolarorit is the at ametion the at dumm  the at consectetur elit.</p></div>
																					<div class="rtin-button"><a class="button-gradient-1" href="#">Read More<i class="flaticon-next"></i></a></div>
																				</div>
																			</div>			
																		</div>
																	</div>
																</div>		</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>




									<section class="elementor-section elementor-top-section elementor-element elementor-element-4570db6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4570db6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-row">
												<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ad3d56" data-id="4ad3d56" data-element_type="column">
													<div class="elementor-column-wrap elementor-element-populated">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-a3c123e elementor-widget elementor-widget-rt-About-image-text" data-id="a3c123e" data-element_type="widget" data-widget_type="rt-About-image-text.default">
					<div class="elementor-widget-container">
						<div class="about-image-text about-layout-style2">
							<div class="rtin-item left-image has-animation">
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="translate-left-75 opacity-animation transition-150 transition-delay-200">
											<div class="about-image">
					<a href="#"><img width="543" height="399" src="./wp-content/uploads/2020/01/feature4.png" class="attachment-full size-full" alt="" loading="lazy" /></a>				
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<div class="about-content">
															<h2 class="rtin-title">The Next Generation Of The Our Marketing</h2>
					<div class="rtin-content"><p>Grursus mal suada faci lisis Lorem ipsum dolarorit ametion the at dummy consectetur elit. Vesti at bulum nec odio aea the dumm ipsum on that at to dolocons rsus mal suada and fadolorit to the consectetur elit. All the more Lorem Ipsum generators on the Internet tend to repeat chunks as dummy necessary making. All the more Lorem Ipsum generators on the Internet tend to repeat chunks as dummy necessary making.</p></div>
												<div class="rtin-button"><a class="button-gradient-1" href="#">Read More<i class="flaticon-next"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="elementor-section elementor-top-section elementor-element elementor-element-9d0c3f7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9d0c3f7" data-element_type="section" id="contact" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6155f6a" data-id="6155f6a" data-element_type="column">
				<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-257f07b elementor-widget elementor-widget-rt-text-with-button" data-id="257f07b" data-element_type="widget" data-widget_type="rt-text-with-button.default">
							<div class="elementor-widget-container">
								<div class="no-animation">
									<div class="section-title-holder no-animation">
										<div class="title-text-button title-text-style1">		
											<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
								<h2 class="rtin-title">Créer un compte <span style="color:orangered; font-family: Monotype Corsiva;font-weight: bold; font-size: 42px;">i</span> Land</h2>
							</div>
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1000">
								<div class="rtin-content">
									<p>Et commencez à vendre aujourd'hui même avec Facebook ! <br>C’est rapide et facile.</p>
								</div>
							</div>

						</div>
					</div>
				</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1b70d8b elementor-widget elementor-widget-shortcode" data-id="1b70d8b" data-element_type="widget" data-widget_type="shortcode.default">
					<div class="elementor-widget-container">
						<div class="elementor-shortcode"><div role="form" class="wpcf7" id="wpcf7-f1711-p2787-o1" lang="en-US" dir="ltr">
							<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>


							<form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">

								<div class="help-form">
									<div class="row gutters-10">
										<div class="col-sm-12">
											<div class="form-group">
												<span class="wpcf7-form-control-wrap text-665">
													<input type="text" name="Nom" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nom complet*" required />
												</span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="wpcf7-form-control-wrap text-665">
													<input type="text" name="Numero" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Numéro*" required />
												</span>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group"><span class="wpcf7-form-control-wrap email-706"><input type="email" name="Email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Adresse Email*" required /></span></div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="wpcf7-form-control-wrap text-665">
													<input type="text" name="Page" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nom de votre Page Facebook*" required />
												</span>
											</div>
										</div>
										
										
										<div class="col-sm-6">
											<div class="form-group text-left"><button type="submit" name="add" class="wpcf7-submit button-gradient-1">S'inscrire maintenant</button></div>
										</div>
										<div class="col-sm-12">
											<div class="wpcf7-response-output" aria-hidden="true"></div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fe06a38" data-id="fe06a38" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
				<div class="elementor-widget-wrap">
					<div class="elementor-element elementor-element-5ee51b7 elementor-widget elementor-widget-image" data-id="5ee51b7" data-element_type="widget" data-widget_type="image.default">
					<div class="elementor-widget-container">
						<div class="elementor-image">
							<img width="669" height="504" src="./wp-content/uploads/2020/01/illustration21.png" class="attachment-full size-full" alt="" loading="lazy" srcset="http://uruf.ru/wp-content/uploads/2020/01/illustration21.png 669w, http://uruf.ru/wp-content/uploads/2020/01/illustration21-300x226.png 300w, http://uruf.ru/wp-content/uploads/2020/01/illustration21-530x400.png 530w, http://uruf.ru/wp-content/uploads/2020/01/illustration21-600x452.png 600w" sizes="(max-width: 669px) 100vw, 669px" />														</div>
						</div>
					</div>
				</div>
			</div>
																</div>
															</div>
														</div>
													</section>
												</div>
											</div>
										</div>
									</div>
								</article>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div><!--#content-->

		<footer>
			<div id="footer-2" class="footer-area has-animation">

				<div class="footer-bottom-area">
					<div class="container">
						<div class="copyright_wrap">
							<div class="copyright">&copy; 2020 digeco. All Rights Reserved by <a target="_blank" rel="nofollow" href="http://radiustheme.com/">RadiusTheme</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a><link href="https://fonts.googleapis.com/css?family=Roboto:400%2C500%7CPoppins:700" rel="stylesheet" property="stylesheet" media="all" type="text/css" >


	<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops..</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
				err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
	</script>
	<link rel='stylesheet' id='owl-carousel-css'  href='./wp-content/themes/digeco/assets/css/owl.carousel.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
	<link rel='stylesheet' id='owl-theme-default-css'  href='./wp-content/themes/digeco/assets/css/owl.theme.default.min3e0d.css?ver=1.7.3' type='text/css' media='all' />
	<script type='text/javascript' src='./wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0' id='jquery-selectBox-js'></script>
	<script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
		/* <![CDATA[ */
		var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"http:\/\/uruf.ru\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"}};
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.mina13e.js?ver=3.0.21' id='jquery-yith-wcwl-js'></script>
	<script type='text/javascript' src='./wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
	<script type='text/javascript' id='wp-polyfill-js-after'>
		( 'fetch' in window ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="./wp-includes/js/dist/vendor/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>' );
	</script>
	<script type='text/javascript' src='./wp-includes/js/dist/hooks.minc5c2.js?ver=d0188aa6c336f8bb426fe5318b7f5b72' id='wp-hooks-js'></script>
	<script type='text/javascript' src='./wp-includes/js/dist/i18n.min802d.js?ver=6ae7d829c963a7d8856558f3f9b32b43' id='wp-i18n-js'></script>
	<script type='text/javascript' id='wp-i18n-js-after'>
		wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
	</script>
	<script type='text/javascript' src='./wp-includes/js/dist/vendor/lodash.mind1d1.js?ver=4.17.21' id='lodash-js'></script>
	<script type='text/javascript' id='lodash-js-after'>
		window.lodash = _.noConflict();
	</script>
	<script type='text/javascript' src='./wp-includes/js/dist/url.min7657.js?ver=7c99a9585caad6f2f16c19ecd17a86cd' id='wp-url-js'></script>
	<script type='text/javascript' id='wp-api-fetch-js-translations'>
		( function( domain, translations ) {
			var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
			localeData[""].domain = domain;
			wp.i18n.setLocaleData( localeData, domain );
		} )( "default", {"translation-revision-date":"2022-10-17 19:50:50+0000","generator":"GlotPress\/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);","lang":"ru"},"You are probably offline.":["\u0412\u043e\u0437\u043c\u043e\u0436\u043d\u043e, \u0447\u0442\u043e \u043f\u043e\u0434\u043a\u043b\u044e\u0447\u0435\u043d\u0438\u0435 \u043a \u0441\u0435\u0442\u0438 \u043d\u0435\u0434\u043e\u0441\u0442\u0443\u043f\u043d\u043e."],"Media upload failed. If this is a photo or a large image, please scale it down and try again.":["\u0417\u0430\u0433\u0440\u0443\u0437\u043a\u0430 \u043c\u0435\u0434\u0438\u0430\u0444\u0430\u0439\u043b\u0430 \u043d\u0435 \u0443\u0434\u0430\u043b\u0430\u0441\u044c. \u0415\u0441\u043b\u0438 \u044d\u0442\u043e \u0444\u043e\u0442\u043e\u0433\u0440\u0430\u0444\u0438\u044f \u0438\u043b\u0438 \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435 \u0431\u043e\u043b\u044c\u0448\u043e\u0433\u043e \u0440\u0430\u0437\u043c\u0435\u0440\u0430, \u0443\u043c\u0435\u043d\u044c\u0448\u0438\u0442\u0435 \u0435\u0433\u043e \u0438 \u043f\u043e\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0441\u043d\u043e\u0432\u0430."],"An unknown error occurred.":["\u041f\u0440\u043e\u0438\u0437\u043e\u0448\u043b\u0430 \u043d\u0435\u0438\u0437\u0432\u0435\u0441\u0442\u043d\u0430\u044f \u043e\u0448\u0438\u0431\u043a\u0430."],"The response is not a valid JSON response.":["\u041e\u0442\u0432\u0435\u0442 \u043d\u0435 \u044f\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u0434\u043e\u043f\u0443\u0441\u0442\u0438\u043c\u044b\u043c \u043e\u0442\u0432\u0435\u0442\u043e\u043c JSON."]}},"comment":{"reference":"wp-includes\/js\/dist\/api-fetch.js"}} );
	</script>
	<script type='text/javascript' src='./wp-includes/js/dist/api-fetch.minaef8.js?ver=25cbf3644d200bdc5cab50e7966b5b03' id='wp-api-fetch-js'></script>
	<script type='text/javascript' id='wp-api-fetch-js-after'>
		wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "http://uruf.ru/wp-json/" ) );
		wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "a98a4bbc2d" );
		wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
		wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
		wp.apiFetch.nonceEndpoint = "http://uruf.ru/wp-admin/admin-ajax.php?action=rest-nonce";
	</script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = [];
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/plugins/contact-form-7/includes/js/index91d5.js?ver=5.4' id='contact-form-7-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70' id='jquery-blockui-js'></script>
	<script type='text/javascript' id='wc-add-to-cart-js-extra'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"\u041f\u0440\u043e\u0441\u043c\u043e\u0442\u0440 \u043a\u043e\u0440\u0437\u0438\u043d\u044b","cart_url":"http:\/\/uruf.ru\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min6619.js?ver=5.2.5' id='wc-add-to-cart-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js'></script>
	<script type='text/javascript' id='woocommerce-js-extra'>
		/* <![CDATA[ */
		var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min6619.js?ver=5.2.5' id='woocommerce-js'></script>
	<script type='text/javascript' id='wc-cart-fragments-js-extra'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_cac668a0e1a069648644c39947fcf1c8","fragment_name":"wc_fragments_cac668a0e1a069648644c39947fcf1c8","request_timeout":"5000"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min6619.js?ver=5.2.5' id='wc-cart-fragments-js'></script>
	<script type='text/javascript' id='yith-woocompare-main-js-extra'>
		/* <![CDATA[ */
		var yith_woocompare = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","actionreload":"yith-woocompare-reload-product","added_label":"\u0414\u043e\u0431\u0430\u0432\u043b\u0435\u043d\u043e","table_title":"\u0421\u0440\u0430\u0432\u043d\u0435\u043d\u0438\u0435 \u0442\u043e\u0432\u0430\u0440\u043e\u0432","auto_open":"yes","loader":"http:\/\/uruf.ru\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"Compare","cookie_name":"yith_woocompare_list","close_label":"Close"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min0875.js?ver=2.5.0' id='yith-woocompare-main-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min13ac.js?ver=1.4.21' id='jquery-colorbox-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6' id='prettyPhoto-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/isotope.pkgd.min3e0d.js?ver=1.7.3' id='isotope-pkgd-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/popper3e0d.js?ver=1.7.3' id='popper-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/bootstrap.min3e0d.js?ver=1.7.3' id='bootstrap-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/woocommerce/assets/js/select2/select2.full.minfa0c.js?ver=4.0.3' id='select2-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.meanmenu.min3e0d.js?ver=1.7.3' id='jquery-meanmenu-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.nav.min3e0d.js?ver=1.7.3' id='jquery-nav-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.countdown.min3e0d.js?ver=1.7.3' id='jquery-countdown-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.nivo.slider.min3e0d.js?ver=1.7.3' id='nivo-slider-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/theia-sticky-sidebar.min3e0d.js?ver=1.7.3' id='theia-sticky-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.timepicker.min3e0d.js?ver=1.7.3' id='jquery-timepicker-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/tilt.jquery3e0d.js?ver=1.7.3' id='tilt-jquery-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.parallax-scroll3e0d.js?ver=1.7.3' id='parallax-scroll-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/jquery.magnific-popup.min3e0d.js?ver=1.7.3' id='magnific-popup-js'></script>
	<script type='text/javascript' src='./wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script type='text/javascript' src='./wp-includes/js/masonry.min3a05.js?ver=4.2.2' id='masonry-js'></script>
	<script type='text/javascript' id='digeco-main-js-extra'>
		/* <![CDATA[ */
		var digecoObj = {"stickyMenu":"1","meanWidth":"992","siteLogo":"<a href=\"http:\/\/uruf.ru\/\" alt=\"My site\"><img class=\"logo-small\" src=\"http:\/\/uruf.ru\/wp-content\/themes\/digeco\/assets\/img\/logo.png\" \/><\/a><a class=\"button-btn\" target=\"_self\" href=\"#\">Get A Quote<\/a>\r\n<a class=\"barsearch\" href=\"#header-search\" title=\"Search\">\r\n\t<i class=\"flaticon-search\"><\/i>\r\n<\/a>","extraOffset":"70","extraOffsetMobile":"52","rtl":"no","ajaxURL":"http:\/\/uruf.ru\/wp-admin\/admin-ajax.php","nonce":"a631c452db"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/main3e0d.js?ver=1.7.3' id='digeco-main-js'></script>
	<script type='text/javascript' src='./wp-includes/js/wp-embed.mind988.js?ver=5.7.8' id='wp-embed-js'></script>
	<script type='text/javascript' src='./wp-content/themes/digeco/assets/js/owl.carousel.min3e0d.js?ver=1.7.3' id='owl-carousel-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/js/webpack.runtime.mindeae.js?ver=3.2.1' id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/js/frontend-modules.mindeae.js?ver=3.2.1' id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='./wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/lib/share-link/share-link.mindeae.js?ver=3.2.1' id='share-link-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
	<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Facebook","shareOnTwitter":"\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f \u0432 Twitter","pinIt":"\u0417\u0430\u043f\u0438\u043d\u0438\u0442\u044c","download":"\u0421\u043a\u0430\u0447\u0430\u0442\u044c","downloadImage":"\u0421\u043a\u0430\u0447\u0430\u0442\u044c \u0438\u0437\u043e\u0431\u0440\u0430\u0436\u0435\u043d\u0438\u0435","fullscreen":"\u0412\u043e \u0432\u0435\u0441\u044c \u044d\u043a\u0440\u0430\u043d","zoom":"\u0423\u0432\u0435\u043b\u0438\u0447\u0435\u043d\u0438\u0435","share":"\u041f\u043e\u0434\u0435\u043b\u0438\u0442\u044c\u0441\u044f","playVideo":"\u041f\u0440\u043e\u0438\u0433\u0440\u0430\u0442\u044c \u0432\u0438\u0434\u0435\u043e","previous":"\u041d\u0430\u0437\u0430\u0434","next":"\u0414\u0430\u043b\u0435\u0435","close":"\u0417\u0430\u043a\u0440\u044b\u0442\u044c"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"\u0422\u0435\u043b\u0435\u0444\u043e\u043d","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"\u041f\u043b\u0430\u043d\u0448\u0435\u0442","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.1","is_static":false,"experimentalFeatures":[],"urls":{"assets":"http:\/\/uruf.ru\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2787,"title":"Home2%20%28One%20Page%29%20%E2%80%93%20My%20site","excerpt":"","featuredImage":false}};
	</script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/js/frontend.mindeae.js?ver=3.2.1' id='elementor-frontend-js'></script>
	<script type='text/javascript' src='./wp-content/plugins/elementor/assets/js/preloaded-modules.mindeae.js?ver=3.2.1' id='preloaded-modules-js'></script>
</body>
</html>