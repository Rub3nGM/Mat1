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
				<h1 class="center">Roupeiros</h1>

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
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_1.jpg" title="ro_cl_1">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_1.jpg" alt="ro_cl_1" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_2.jpg" title="ro_cl_2">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_2.jpg" alt="ro_cl_2" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_3.jpg" title="ro_cl_3">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_3.jpg" alt="ro_cl_3" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_4.jpg" title="ro_cl_4">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_4.jpg" alt="ro_cl_4" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_5.jpg" title="ro_cl_5">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_5.jpg" alt="ro_cl_5" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_6.jpg" title="ro_cl_6">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_6.jpg" alt="ro_cl_6" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_7.jpg" title="ro_cl_7">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_7.jpg" alt="ro_cl_7" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_8.jpg" title="ro_cl_8">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_8.jpg" alt="ro_cl_8" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_9.jpg" title="ro_cl_9">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_9.jpg" alt="ro_cl_9" width="90" height="90" />
							</a>
						</li>
						<li>
							<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_10.jpg" title="ro_cl_10">
								<img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_10.jpg" alt="ro_cl_10" width="90" height="90" />
							</a>
						</li>
						<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_11.jpg" title="ro_cl_11">
									 <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_11.jpg" alt="ro_cl_11" width="90" height="90" />
								 </a>
								<div class="caption">
									<div class="image-title">ro_cl_11</div>
									<div class="image-desc"><strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_12.jpg" title="ro_cl_12"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_12.jpg" alt="ro_cl_12" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_12
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_13.jpg" title="ro_cl_13"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_13.jpg" alt="ro_cl_13" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_13
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_14.jpg" title="ro_cl_14"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_14.jpg" alt="ro_cl_14" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_14
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_15.jpg" title="ro_cl_15"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_15.jpg" alt="ro_cl_15" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_15
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_16.jpg" title="ro_cl_16"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_16.jpg" alt="ro_cl_16" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_16
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_17.jpg" title="ro_cl_17"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_17.jpg" alt="ro_cl_17" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_17
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_18.jpg" title="ro_cl_18"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_18.jpg" alt="ro_cl_18" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_18
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_19.jpg" title="ro_cl_19"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_19.jpg" alt="ro_cl_19" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_19
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_20.jpg" title="ro_cl_20"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_20.jpg" alt="ro_cl_20" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_20
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_21.jpg" title="ro_cl_21"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_21.jpg" alt="ro_cl_21" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_21
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_22.jpg" title="ro_cl_22"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_22.jpg" alt="ro_cl_22" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_22
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_23.jpg" title="ro_cl_23"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_23.jpg" alt="ro_cl_23" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_23
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_24.jpg" title="ro_cl_24"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_24.jpg" alt="ro_cl_24" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_24
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_25.jpg" title="ro_cl_25"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_25.jpg" alt="ro_cl_25" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_25
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_26.jpg" title="ro_cl_26"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_26.jpg" alt="ro_cl_26" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_26
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_27.jpg" title="ro_cl_27"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_27.jpg" alt="ro_cl_27" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_27
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_28.jpg" title="ro_cl_28"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_28.jpg" alt="ro_cl_28" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_28
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_29.jpg" title="ro_cl_29"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_29.jpg" alt="ro_cl_29" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_29
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_30.jpg" title="ro_cl_30"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_30.jpg" alt="ro_cl_30" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_30
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_31.jpg" title="ro_cl_31"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_31.jpg" alt="ro_cl_31" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_31
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_32.jpg" title="ro_cl_32"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_32.jpg" alt="ro_cl_32" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_32
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_33.jpg" title="ro_cl_33"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_33.jpg" alt="ro_cl_33" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_33
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_34.jpg" title="ro_cl_34"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_34.jpg" alt="ro_cl_34" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_34
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_35.jpg" title="ro_cl_35"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_35.jpg" alt="ro_cl_35" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_35
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_36.jpg" title="ro_cl_36"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_36.jpg" alt="ro_cl_36" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_36
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_37.jpg" title="ro_cl_37"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_37.jpg" alt="ro_cl_37" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_37
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_38.jpg" title="ro_cl_38"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_38.jpg" alt="ro_cl_38" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_38
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_39.jpg" title="ro_cl_39"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_39.jpg" alt="ro_cl_39" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_39
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_40.jpg" title="ro_cl_40"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_40.jpg" alt="ro_cl_40" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_40
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_41.jpg" title="ro_cl_41"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_41.jpg" alt="ro_cl_41" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_41
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_42.jpg" title="ro_cl_42"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_42.jpg" alt="ro_cl_42" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_42
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_43.jpg" title="ro_cl_43"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_43.jpg" alt="ro_cl_43" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_43
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_44.jpg" title="ro_cl_44"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_44.jpg" alt="ro_cl_44" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_44
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_45.jpg" title="ro_cl_45"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_45.jpg" alt="ro_cl_45" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_45
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_46.jpg" title="ro_cl_46"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_46.jpg" alt="ro_cl_46" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_46
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_47.jpg" title="ro_cl_47"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_47.jpg" alt="ro_cl_47" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_47
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_48.jpg" title="ro_cl_48"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_48.jpg" alt="ro_cl_48" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_48
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_49.jpg" title="ro_cl_49"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_49.jpg" alt="ro_cl_49" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_49
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
							</li>
							<li>
								<a class="thumb" href="/Materiare/images/portfolio/roupeiros/ro_cl_50.jpg" title="ro_cl_50"> <img src="/Materiare/images/portfolio/roupeiros/thumbs/ro_cl_50.jpg" alt="ro_cl_50" width="90" height="90" /> </a>
								<div class="caption">
									<div class="image-title">
										ro_cl_50
									</div>
									<div class="image-desc">
										<strong></strong>
									</div>
								</div>
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