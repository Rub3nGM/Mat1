document.write('<style>.noscript { display: none; }</style>');

// <script type="text/javascript" src="/Materiare/js/jquery-1.3.2.js"></script>
		// <script type="text/javascript" src="/Materiare/js/jquery.galleriffic.js" ></script>
		// <script type="text/javascript" src="/Materiare/js/jquery.opacityrollover.js"></script>
// 		
// 		
// 		
// function addJavascript(jsname,pos) {
// var th = document.getElementsByTagName(pos)[0];
// var s = document.createElement('script');
// s.setAttribute('type','text/javascript');
// s.setAttribute('src',jsname);
// th.appendChild(s);
// }


		
type = "text/javascript" > jQuery(document).ready(function($) {
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
		playLinkText : 'Iniciar',
		pauseLinkText : 'Pausar',
		prevLinkText : '&lsaquo; Anterior',
		nextLinkText : 'Seguinte  &rsaquo;',
		nextPageLinkText : 'Seg. &rsaquo;',
		prevPageLinkText : '&lsaquo; Prev.',
		enableHistory : false,
		autoStart : false,
		syncTransitions : true,
		defaultTransitionDuration : 1000,
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
