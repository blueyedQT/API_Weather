<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodingDojo Weather Report</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("form").submit(function() {
				$.get(
					$(this).attr('action')+"?callback=?",
					$(this).serialize(), 
					function(output) {
						console.log(output);
						city = '';
						if(output.data.request[0].query == '98055') {
							city = 'Renton, WA';
						}
						if(output.data.request[0].query == '89102') {
							city = 'Las Vegas, NV';
						}
						if(output.data.request[0].query == '84720') {
							city = 'Cedar City, UT';
						}
						tempF = output.data.current_condition[0].temp_F;
						tempC = output.data.current_condition[0].temp_C;
						wind = output.data.current_condition[0].windspeedMiles;
						description = output.data.current_condition[0].weatherDesc[0].value;
						src = output.data.current_condition[0].weatherIconUrl[0].value;
						$('.forcast').html("<h2>Weather for "+city+"</h2>"+
							"<p>Current Temp F: "+tempF+" degrees</p>"+
							"<p>Current Temp C: "+tempC+" degrees</p>"+
							"<p>Current Widnspeed: "+wind+" MPH</p>"+
							"<p>Weather Description: "+description+"</p>"+
							"<img alt='weather icon' src='"+src+"'' />"
							);
					}, "json"
				);
				return false;
			});
		});
	</script>
</head>
<body>
	<h1>The CodingDojo Weather Report!</h1>
	<form action="http://api.worldweatheronline.com/free/v2/weather.ashx" method="get">
		<select name="q">
			<option>Select a City</option>
			<option value="98055">Renton, WA</option>
			<option value="89102">Las Vegas, NV</option>
			<option value="84720">Cedar City, UT</option>
			<input type="hidden" name="format" value="json">
			<input type="hidden" name="key" value="fdb42bc9fbfaf5c150af110064a42">
			<input type="submit" name="submit" value="Get Weather!">
		</select>
	</form>
	<div class="forcast"></div>
</div>
</body>
</html>