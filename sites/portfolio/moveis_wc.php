<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Fabricamos todos os tipos de Moveis de casa de banho." />
		<meta name="keywords" content="Moveis,Moveis WC, casa de banho, casa banho, WC, portas" />

		<title >Materiare Moveis WC - Casa de Banho</title>

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
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_1.jpg" title="moveis WC 1">
								<img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_1.jpg" alt="moveis_wc " width="90" height="90" />
							</a>
							<div class="caption">
							</div>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_2.jpg" title="moveis WC 2"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_2.jpg" alt="moveis WC 2" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_3.jpg" title="moveis WC 3"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_3.jpg" alt="moveis WC 3" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_4.jpg" title="moveis WC 4"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_4.jpg" alt="moveis WC 4" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_5.jpg" title="moveis WC 5"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_5.jpg" alt="moveis WC 5" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_6.jpg" title="moveis WC 6"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_6.jpg" alt="moveis WC 6" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_7.jpg" title="moveis WC 7"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_7.jpg" alt="moveis WC 7" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_8.jpg" title="moveis WC 8"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_8.jpg" alt="moveis WC 8" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_9.jpg" title="moveis WC 9"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_9.jpg" alt="moveis WC 9" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_10.jpg" title="moveis WC 10"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_10.jpg" alt="moveis WC 10" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_11.jpg" title="moveis WC 11"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_11.jpg" alt="moveis WC 11" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_12.jpg" title="moveis WC 12"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_12.jpg" alt="moveis WC 12" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_13.jpg" title="moveis WC 13"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_13.jpg" alt="moveis WC 13" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_14.jpg" title="moveis WC 14"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_14.jpg" alt="moveis WC 14" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_15.jpg" title="moveis WC 15"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_15.jpg" alt="moveis WC 15" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_16.jpg" title="moveis WC 16"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_16.jpg" alt="moveis WC 16" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_17.jpg" title="moveis WC 17"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_17.jpg" alt="moveis WC 17" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_18.jpg" title="moveis WC 18"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_18.jpg" alt="moveis WC 18" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_19.jpg" title="moveis WC 19"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_19.jpg" alt="moveis WC 19" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_20.jpg" title="moveis WC 20"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_20.jpg" alt="moveis WC 20" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_21.jpg" title="moveis WC 21"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_21.jpg" alt="moveis WC 21" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_22.jpg" title="moveis WC 22"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_22.jpg" alt="moveis WC 22" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_23.jpg" title="moveis WC 23"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_23.jpg" alt="moveis WC 23" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_24.jpg" title="moveis WC 24"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_24.jpg" alt="moveis WC 24" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_25.jpg" title="moveis WC 25"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_25.jpg" alt="moveis WC 25" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_26.jpg" title="moveis WC 26"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_26.jpg" alt="moveis WC 26" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_27.jpg" title="moveis WC 27"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_27.jpg" alt="moveis WC 27" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_28.jpg" title="moveis WC 28"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_28.jpg" alt="moveis WC 28" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_29.jpg" title="moveis WC 29"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_29.jpg" alt="moveis WC 29" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_30.jpg" title="moveis WC 30"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_30.jpg" alt="moveis WC 30" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_31.jpg" title="moveis WC 31"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_31.jpg" alt="moveis WC 31" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_32.jpg" title="moveis WC 32"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_32.jpg" alt="moveis WC 32" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_33.jpg" title="moveis WC 33"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_33.jpg" alt="moveis WC 33" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_34.jpg" title="moveis WC 34"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_34.jpg" alt="moveis WC 34" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_35.jpg" title="moveis WC 35"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_35.jpg" alt="moveis WC 35" width="90" height="90" /> </a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/moveiswc/mo_wc_36.jpg" title="moveis WC 36"> <img src="/Materiare/images/portfolio/moveiswc/thumbs/mo_wc_36.jpg" alt="moveis WC 36" width="90" height="90" /> </a>
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