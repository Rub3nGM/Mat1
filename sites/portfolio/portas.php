<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Materiare - Profissionais de  Montagem de portas" />
		<meta name="keywords" content="Portas, portas interior, interior, Aduelas" />

		<title >Materiare Portas </title>

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
				<h1 class="center">Cozinhas - Branco</h1>

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
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_1.jpg" title="Portas 1"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_1.jpg" alt="Porta 1" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_2.jpg" title="Portas 2"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_2.jpg" alt="Porta 2" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_3.jpg" title="Portas 3"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_3.jpg" alt="Porta 3" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_4.jpg" title="Portas 4"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_4.jpg" alt="Porta 4" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_5.jpg" title="Portas 5"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_5.jpg" alt="Porta 5" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_6.jpg" title="Portas 6"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_6.jpg" alt="Porta 6" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_7.jpg" title="Portas 7"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_7.jpg" alt="Porta 7" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_8.jpg" title="Portas 8"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_8.jpg" alt="Porta 8" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_9.jpg" title="Portas 9"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_9.jpg" alt="Porta 9" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_10.jpg" title="Portas 10"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_10.jpg" alt="Porta 10" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_11.jpg" title="Portas 11"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_11.jpg" alt="Porta 11" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_12.jpg" title="Portas 12"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_12.jpg" alt="Porta 12" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_13.jpg" title="Portas 13"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_13.jpg" alt="Porta 13" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_14.jpg" title="Portas 14"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_14.jpg" alt="Porta 14" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_15.jpg" title="Portas 15"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_15.jpg" alt="Porta 15" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_16.jpg" title="Portas 16"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_16.jpg" alt="Porta 16" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/portas/po_fe_17.jpg" title="Portas 17"> <img src="/Materiare/images/portfolio/portas/thumbs/po_fe_17.jpg" alt="Porta 17" width="90" height="90" /> </a>
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