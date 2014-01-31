<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title >Materiare</title>

		<link rel="stylesheet" type="text/css" href="/Materiare/css/base.css"  />
		<?php
			include ($_SERVER['DOCUMENT_ROOT'] . '/Materiare/config.php');
		?>

		<link rel="stylesheet" href="/Materiare/css/gallerific_base.css" type="text/css" />
		<link rel="stylesheet" href="/Materiare/css/galleriffic-2.css" type="text/css" />
		<script type="text/javascript" src="/Materiare/js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="/Materiare/js/jquery.galleriffic.js" ></script>
		<script type="text/javascript" src="/Materiare/js/jquery.opacityrollover.js"></script>

		<script type="text/javascript" src="/Materiare/teste.js"></script>
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<!-- <script type="text/javascript">
		document.write('<style>.noscript { display: none; }</style>');
		</script> -->
		
	</head>
	<body>
		<?php
		// include($_SERVER['DOCUMENT_ROOT'].'/Materiare/header.html');
		include (mRoot . '/Materiare/header.html');
		?>
		<div id="main">

			<div id="gallery" class="content">
				<div id="controls" class="controls"></div>
				<div class="slideshow-container">
					<div id="loading" class="loader"></div>
					<div id="slideshow" class="slideshow"></div>
				</div>
				<div id="caption" class="caption-container"></div>
			</div>
			<div id="thumbs" class="navigation">
				<ul class="thumbs noscript">
					<?php
					$localFile = $_SERVER['SCRIPT_NAME'];

					$imageDir = str_replace("sites", "images", $localFile);
					$imageDir = str_replace(".php", "", $imageDir);

					$files = glob(mRoot . $imageDir . "/*.jpg*");
					$thumbs = glob(mRoot . $imageDir . "/thumbs/*.jpg*");

					$filesNumber = count($files);

					for ($i = 0; $i < $filesNumber; $i++) {
						$image = $files[$i];
						$image = str_replace(mRoot, "", $image);

						$thumb = $thumbs[$i];
						$thumb = str_replace(mRoot, "", $thumb);
						echo '<li><a class="thumb" href="' . $image . '" title="ro_cl_1"><img src="' . $thumb . '" alt="ro_cl_1" width="90" height="90" /></a></li>';
					}
					?>
				</ul>
			</div>
			<div style="clear: both;"></div>

		</div>

		<?php
	include (mRoot . '/Materiare/footer.html');
		?>
	</body>
</html>