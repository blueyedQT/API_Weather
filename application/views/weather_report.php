<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodingDojo Weather Report</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			alert('js is working');
		})
	</script>
</head>
<body>
	<h1>The CodingDojo Weather Report!</h1>
	<form action="http://api.worldweatheronline.com/free/v2/weather.ashx?callback=?" method="get">
		<select name="q">
			<option>Select a City</option>
			<option value="98055">Renton, WA</option>
			<option value="89102">Las Vegas, NV</option>
			<option value="84720">Cedar City, UT</option>
			<input type="submit" name="submit" value="Get Weather!">
		</select>
	</form>
	<h2>Weather for (CITY)</h2>
	<p>Current Temp F: (TEMP) degrees</p>
	<p>Current Temp C: (TEMP) degrees</p>
	<p>Current Widnspeed: (WINDSPEED) MPH</p>
	<p>Weather Description: (WEATHER DESCRIPTION)</p>
</body>
</html>