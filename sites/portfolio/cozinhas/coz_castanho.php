<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Fabricamos todos os tipos de cozinhas." />
		<meta name="keywords" content="cozinhas, kitchen, roupeiros, portas, encastrar" />

		<title >Materiare - Cozinhas Castanho</title>

		<link rel="stylesheet" type="text/css" href="/Materiare/css/base.css"  />
		<link rel="stylesheet" href="/Materiare/css/gallerific_base.css" type="text/css" />
		<link rel="stylesheet" href="/Materiare/css/galleriffic-2.css" type="text/css" />
		<script type="text/javascript" src="/Materiare/js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="/Materiare/js/jquery.galleriffic.js" ></script>
		<script type="text/javascript" src="/Materiare/js/jquery.opacityrollover.js"></script>
		
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
		
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({
					'width' : '350px',
					'float' : 'left'
				});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity : onMouseOutOpacity,
					mouseOverOpacity : 1.0,
					fadeSpeed : 'fast',
					exemptionSelector : '.selected'
				});

				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay : 2500,
					numThumbs : 15,
					preloadAhead : 10,
					enableTopPager : true,
					enableBottomPager : true,
					maxPagesToShow : 7,
					imageContainerSel : '#slideshow',
					controlsContainerSel : '#controls',
					captionContainerSel : '#caption',
					loadingContainerSel : '#loading',
					renderSSControls : true,
					renderNavControls : true,
					playLinkText : 'Play Slideshow',
					pauseLinkText : 'Pause Slideshow',
					prevLinkText : '&lsaquo; Previous Photo',
					nextLinkText : 'Next Photo &rsaquo;',
					nextPageLinkText : 'Next &rsaquo;',
					prevPageLinkText : '&lsaquo; Prev',
					enableHistory : false,
					autoStart : false,
					syncTransitions : true,
					defaultTransitionDuration : 900,
					onSlideChange : function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children().eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end().eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut : function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn : function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>

	</head>
	<body>
		 <?php include($_SERVER['DOCUMENT_ROOT'].'/Materiare/header.html'); ?>
		
		<div id="main">
		<!-- <div id="page"> -->
			<div id="container">
				<h1 >Cozinhas - Castanho</h1>

				<div id="gallery" class="content">
					<div id="controls" class="controls">
					</div>
					<div class="slideshow-container">
						<div id="loading" class="loader">
						</div>
						<div id="slideshow" class="slideshow">
						</div>
					</div>
					<div id="caption" class="caption-container">
					</div>
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
					<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_1.jpg" title="Cozinha 1"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_1.jpg" alt="Cozinha Wengue1" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_2.jpg" title="Cozinha 2"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_2.jpg" alt="Cozinha Wengue2" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_3.jpg" title="Cozinha 3"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_3.jpg" alt="Cozinha Wengue3" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_4.jpg" title="Cozinha 4"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_4.jpg" alt="Cozinha Wengue4" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_5.jpg" title="Cozinha 5"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_5.jpg" alt="Cozinha Wengue5" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_6.jpg" title="Cozinha 6"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_6.jpg" alt="Cozinha Wengue6" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_7.jpg" title="Cozinha 7"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_7.jpg" alt="Cozinha Wengue7" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_8.jpg" title="Cozinha 8"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_8.jpg" alt="Cozinha Wengue8" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_9.jpg" title="Cozinha 9"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_9.jpg" alt="Cozinha Wengue9" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_10.jpg" title="Cozinha 10"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_10.jpg" alt="Cozinha Wengue10" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_11.jpg" title="Cozinha 11"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_11.jpg" alt="Cozinha Wengue11" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_12.jpg" title="Cozinha 12"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_12.jpg" alt="Cozinha Wengue12" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_13.jpg" title="Cozinha 13"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_13.jpg" alt="Cozinha Wengue13" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_14.jpg" title="Cozinha 14"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_14.jpg" alt="Cozinha Wengue14" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_15.jpg" title="Cozinha 15"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_15.jpg" alt="Cozinha Wengue15" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_16.jpg" title="Cozinha 16"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_16.jpg" alt="Cozinha Wengue16" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_17.jpg" title="Cozinha 17"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_17.jpg" alt="Cozinha Wengue17" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_18.jpg" title="Cozinha 18"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_18.jpg" alt="Cozinha Wengue18" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_19.jpg" title="Cozinha 19"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_19.jpg" alt="Cozinha Wengue19" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_20.jpg" title="Cozinha 20"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_20.jpg" alt="Cozinha Wengue20" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_21.jpg" title="Cozinha 21"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_21.jpg" alt="Cozinha Wengue21" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_22.jpg" title="Cozinha 22"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_22.jpg" alt="Cozinha Wengue22" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_23.jpg" title="Cozinha 23"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_23.jpg" alt="Cozinha Wengue23" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_24.jpg" title="Cozinha 24"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_24.jpg" alt="Cozinha Wengue24" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_25.jpg" title="Cozinha 25"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_25.jpg" alt="Cozinha Wengue25" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_26.jpg" title="Cozinha 26"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_26.jpg" alt="Cozinha Wengue26" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_27.jpg" title="Cozinha 27"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_27.jpg" alt="Cozinha Wengue27" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_28.jpg" title="Cozinha 28"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_28.jpg" alt="Cozinha Wengue28" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_29.jpg" title="Cozinha 29"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_29.jpg" alt="Cozinha Wengue29" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_30.jpg" title="Cozinha 30"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_30.jpg" alt="Cozinha Wengue30" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_31.jpg" title="Cozinha 31"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_31.jpg" alt="Cozinha Wengue31" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_32.jpg" title="Cozinha 32"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_32.jpg" alt="Cozinha Wengue32" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_33.jpg" title="Cozinha 33"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_33.jpg" alt="Cozinha Wengue33" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_34.jpg" title="Cozinha 34"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_34.jpg" alt="Cozinha Wengue34" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_35.jpg" title="Cozinha 35"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_35.jpg" alt="Cozinha Wengue35" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_36.jpg" title="Cozinha 36"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_36.jpg" alt="Cozinha Wengue36" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_37.jpg" title="Cozinha 37"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_37.jpg" alt="Cozinha Wengue37" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_38.jpg" title="Cozinha 38"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_38.jpg" alt="Cozinha Wengue38" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_39.jpg" title="Cozinha 39"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_39.jpg" alt="Cozinha Wengue39" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_40.jpg" title="Cozinha 40"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_40.jpg" alt="Cozinha Wengue40" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_41.jpg" title="Cozinha 41"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_41.jpg" alt="Cozinha Wengue41" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_42.jpg" title="Cozinha 42"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_42.jpg" alt="Cozinha Wengue42" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_43.jpg" title="Cozinha 43"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_43.jpg" alt="Cozinha Wengue43" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_44.jpg" title="Cozinha 44"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_44.jpg" alt="Cozinha Wengue44" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_45.jpg" title="Cozinha 45"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_45.jpg" alt="Cozinha Wengue45" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_46.jpg" title="Cozinha 46"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_46.jpg" alt="Cozinha Wengue46" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_47.jpg" title="Cozinha 47"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_47.jpg" alt="Cozinha Wengue47" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_48.jpg" title="Cozinha 48"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_48.jpg" alt="Cozinha Wengue48" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_49.jpg" title="Cozinha 49"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_49.jpg" alt="Cozinha Wengue49" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_50.jpg" title="Cozinha 50"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_50.jpg" alt="Cozinha Wengue50" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_51.jpg" title="Cozinha 51"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_51.jpg" alt="Cozinha Wengue51" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/castanho/co_ca_52.jpg" title="Cozinha 52"> <img src="/Materiare/images/portfolio/cozinhas/castanho/thumbs/co_ca_52.jpg" alt="Cozinha Wengue52" width="90" height="90" /> </a>
						</li>		
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		<!-- </div> -->
		</div>

		 <?php include($_SERVER['DOCUMENT_ROOT'].'/Materiare/footer.html'); ?>
	</body>
</html>