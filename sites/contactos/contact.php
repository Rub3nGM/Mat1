<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title >Materiare</title>

		<link rel="stylesheet" type="text/css" href="/Materiare/css/base.css"  />
		<link rel="stylesheet" type="text/css" href="/Materiare/css/contact.css"  />

		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
			function initialize() {
				var myLatlng = new google.maps.LatLng(38.542316, -9.069532);
				var map_canvas = document.getElementById('map_canvas');
				var map_options = {
					center : new google.maps.LatLng(38.542316, -9.069532),
					zoom : 11,
					mapTypeId : google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(map_canvas, map_options);
				var marker = new google.maps.Marker({
					position : myLatlng,
					map : map,
					title : 'Materiare'
				});
			}


			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<?php
	include ($_SERVER['DOCUMENT_ROOT'] . '/Materiare/header.html');
	?>
	<body>
		<div id="main">
			<div id="mainWrapper" >
				<table width="50%" border="0">
					<tbody>
						<tr>
							<td width="83" align="left" valign="top"><h3><strong>Morada:</strong></h3></td>
							<td width="345" align="left"><span class="black10">
								<br>
								Rua Ema Reis
								<br>
								1111-111  Pinhal General </span>
							<br>
							</td>
						</tr>
						<tr>
							<td align="left" valign="top"><h3><strong>Telefone:</strong></h3></td>
							<td align="left" class="black10">962 335 177
							<br>
							111 111 111 </td>
						</tr>
						<tr>
							<td align="left" valign="top"><h3><strong>Mail:</strong></h3></td>
							<td align="left" class="black10"><a href="mailto:materiare@gmail.com" style="text-decoration:none;color:#666">materiare@gmail.com</a>
							<br>
							<a href="mailto:dep.tecnico@tecniwater.com.pt" style="text-decoration:none;color:#666">dep.tecnico@tecniwater.com.pt
							<br>
							</a><a href="mailto:orcamentos@tecniwater.com.pt" style="text-decoration:none;color:#666">orcamentos@tecniwater.com.pt
							<br>
							</a><a href="mailto:dep.administrativo@tecniwater.com.pt" style="text-decoration:none;color:#666">dep.administrativo@tecniwater.com.pt</a></td>
						</tr>
					</tbody>
				</table>
				<div align="center" >
					<h2 >
						Onde estamos - Mapa
					</h2>
					<div id="map_canvas"  align="center">

					</div>

				</div>

			</div>
		</div>
		</div>

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/Materiare/footer.html');
		?>
	</body>
</html> -->