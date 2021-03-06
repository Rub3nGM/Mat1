<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title >Materiare</title>

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
					'width' : '300px',
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
		<div id="page">
			<div id="container">
				<h1><a href="index.html">Galleriffic</a></h1>
				<h2>Thumbnail rollover effects and slideshow crossfades</h2>

				<!-- Start Advanced Gallery Html Containers -->
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
							<a class="thumb" name="leaf" href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015.jpg" title="Title #0AHHA"> <img src="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg" alt="Title #0AAAA" /> </a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
								</div>
								<div class="image-title">
									Title #0
								</div>
								<div class="image-desc">
									Description
								</div>
							</div>
						</li>

						<li>
							<a class="thumb" name="drop" href="http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9.jpg" title="Title #1"> <img src="http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9_s.jpg" alt="Title #1" /> </a>
							<div class="caption">
								Any html can be placed here ...
							</div>
						</li>

						<li>
							<a class="thumb" name="bigleaf" href="http://farm3.static.flickr.com/2093/2538168854_f75e408156.jpg" title="Title #2"> <img src="http://farm3.static.flickr.com/2093/2538168854_f75e408156_s.jpg" alt="Title #2" /> </a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2093/2538168854_f75e408156_b.jpg">Download Original</a>
								</div>
								<div class="image-title">
									Title #2
								</div>
								<div class="image-desc">
									Description
								</div>
							</div>
						</li>

					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		</div>

		 <?php include($_SERVER['DOCUMENT_ROOT'].'/Materiare/footer.html'); ?>
	</body>
</html>