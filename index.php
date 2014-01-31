<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title >Materiare</title>

		<link rel="stylesheet" type="text/css" href="/Materiare/css/base.css"  />
		<link rel="stylesheet" type="text/css" href="/Materiare/css/contentflow.css"/>
		<script type="text/javascript" src="/Materiare/js/contentflow.js" load="roundabout" ></script>
		<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
		<script>
			var myNewFlow = new ContentFlow('myFantasicFlow', {
				reflectionHeight : 0.3,
				scrollWheelSpeed : 0,
				scaleFactorLandscape: 0.98,
				// startItem : 0,
			});
		</script>
		
	</head>
		<?php include "header.html"; ?>
	<body>
		<div id="main">

			<div class="ContentFlow"  id="myFantasicFlow" >
				<div class="loadIndicator">
					<div class="indicator"></div>
				</div>
				<div class="flow">
					<img class="item" src="images/coverflow/portas.jpg" href="#" target="#" title="Portas" />
					<img class="item" src="images/coverflow/projectos.jpg" title="/Materiare/sites/portfolio/projectos.php"/>
					<img class="item" src="images/coverflow/moveis_wc.jpg" title="Moveis WC" href="/Materiare/sites/portfolio/moveis_wc.php"/>
					<img class="item" src="images/coverflow/cozinhas.jpg" title="Cozinhas" href="/Materiare/sites/portfolio/cozinhas.php" target="_top"/>
					<img class="item" src="images/coverflow/moveis_por_medida.jpg" title="Móveis por Medida" href="#" />
					<img class="item" src="images/coverflow/decoraçao_madeira.jpg" title="Decoração em Madeira"/>
					<img class="item" src="images/coverflow/locais_publicos_comercio.jpg" title="Locais Públicos e Comércio"/>
					<img class="item" src="images/coverflow/escadas.jpg" title="Escadas"/>
				</div>
				<div class="globalCaption">

				</div>
				<div class="scrollbar" >
					<div class="preButton">prev</div>
					<div class="nextButton">next</div>
					<div class="slider">
						<div class="position"></div>
					</div>
				</div>
			</div>
		</div>

	<?php include "footer.html"; ?>
	</body>
	
</html>