<!--Javascript for testing purposes-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(function (){
	var weatherObj,
		location,
		weatherDescription,
		weatherId,
		iconClass,
		temp,
		tempMin,
		tempMax,
		humidity;
	$.ajax({
		type: 'GET',
		url: './includes/weather.json',
		success: function(data) {
			weatherObj = data;
			location = weatherObj.name;
			weatherDescription = weatherObj.weather[0].description;
			weatherId = weatherObj.weather[0].id;
			iconClass = 'wi wi-owm-' + weatherId;
			temp = Math.floor(weatherObj.main.temp * 9/5 - 459.67);
			tempMin = Math.floor(weatherObj.main.temp_min * 9/5 - 459.67);
			tempMax = Math.floor(weatherObj.main.temp_max * 9/5 - 459.67);
			humidity = weatherObj.main.humidity;
			$('#weatherDisplay').addClass(iconClass);
			console.log(weatherObj);
			document.getElementById('temp').innerHTML = temp;
			document.getElementById('tempMin').innerHTML = tempMin;
			document.getElementById('tempMax').innerHTML = tempMax;
			document.getElementById('humidity').innerHTML = humidity;
			document.getElementById('weatherDescription').innerHTML = weatherDescription;
			document.getElementById('location').innerHTML = location;
		}
	});
});
</script>
</body>
</html>