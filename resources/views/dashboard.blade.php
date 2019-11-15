<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link href="{{ ('css/dashboard.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--  -->
</head>
<body style="background-image: url('{{ ('images/bg1.jpg') }}'); background-position: center;">
	<div class="tile_container">
		<!-- <div class="page_heading">Start</div> -->
		<div class="square_small tile_one square_common"></div>
		<div class="square_small tile_six square_common"></div>
		<div class="square_medium tile_two square_common"></div>
		<div class="rectangle tile_three square_common" ></div>
		<a href="{{ url('weather') }}">
		<div class="square_big tile_four square_common">
			<div class="tile_four_container">
				<div class="tile_four_image">
					<img src="{{ ('images/sun.png') }}" style="height: 150px; width: 150px;">
				</div>
				<div class="tile_four_label">
					Weather
				</div>
			</div>
		</div>
		</a>
		<div class="square_medium tile_five square_common"></div>
		<div class="square_medium tile_two square_common"></div>

	</div>

</body>
</html>

