<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Fabricamos todos os tipos de cozinhas." />
		<meta name="keywords" content="cozinhas, kitchen, roupeiros, portas, encastrar" />

		<title >Materiare - Cozinhas Branco</title>

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
				<h1>Cozinhas - Branco</h1>

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
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_1.jpg" title="ro_cl_1">
								<img src="/Materiare/images/portfolio/cozinhas/branco/thumbs/co_br_1.jpg" alt="ro_cl_1" width="90" height="90" />
							</a>
							<div class="caption">
							</div>
						</li>
					<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_2.jpg" title="Cozinha Portas2"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_2.jpg" alt="Cozinha branca 2" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_3.jpg" title="Cozinha Portas3"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_3.jpg" alt="Cozinha branca 3" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_4.jpg" title="Cozinha Portas4"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_4.jpg" alt="Cozinha branca 4" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_5.jpg" title="Cozinha Portas5"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_5.jpg" alt="Cozinha branca 5" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_6.jpg" title="Cozinha Portas6"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_6.jpg" alt="Cozinha branca 6" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_7.jpg" title="Cozinha Portas7"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_7.jpg" alt="Cozinha branca 7" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_8.jpg" title="Cozinha Portas8"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_8.jpg" alt="Cozinha branca 8" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_9.jpg" title="Cozinha Portas9"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_9.jpg" alt="Cozinha branca 9" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_10.jpg" title="Cozinha Portas10"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_10.jpg" alt="Cozinha branca 10" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_11.jpg" title="Cozinha Portas11"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_11.jpg" alt="Cozinha branca 11" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/cozinhas/branco/co_br_12.jpg" title="Cozinha Portas12"> <img src="/Materiare/images/portfolio/cozinhas/branco/co_br_12.jpg" alt="Cozinha branca 12" width="90" height="90" /> </a>
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