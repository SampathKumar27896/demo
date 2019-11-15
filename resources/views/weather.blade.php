<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link href="{{ ('css/dashboard.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<!--  -->
</head>
<body style="background-image: url('{{ ('images/bg1.jpg') }}');">
	
	<div class="weather_container">
		<a  href="{{ url('/') }}">
			<img src="{{ ('images/back.jpg') }}" style="height: 50px; width: 50px; float: left;">
		</a>
		<div style="font-size: 100px; float: left;">58&#176;C</div>
		<div style="font-size: 30px; clear: both;">Mostly Cloudy</div>
		<div style="font-size: 100px;">Redmond, USA</div>
	</div>
</body>
</html>

