// $.getJSON('http://localhost/openweather/includes/weather.json', function (data) {
//             console.log(data);
// });

// document.getElementById('zipSubmit').addEventListener('click', function(){
// 	userZip = document.getElementById('zipEntry').value;
// 	// var url = 'http://api.openweathermap.org/data/2.5/weather?q=' + userZip + '&APPID=fd031db11dc02956a02a1d1fd2980ebc';
// 	// var ajax = $.ajax({
// 	// 	dataType: "json",
//  //  		url: url,
//  //  		data: null,
//  //  		success: null
// 	// });
// 	// $.getJSON(ajax, function(data){
// 	// 	var jsonObj = $.parseJSON(data);
// 	// });
// });

// console.log(jsonObj);

$(function (){
	var jsonObj = null;
	// var weatherObj = null;
	// document.getElementById('zipSubmit').addEventListener('click', function() {
	// 	var userZip = document.getElementById('zipEntry').value;
	// 	var url = 'http://api.openweathermap.org/data/2.5/weather?q=' + userZip + '&APPID=fd031db11dc02956a02a1d1fd2980ebc';
		$.ajax({
			type: 'GET',
			url: 'http://weather-app-com.stackstaging.com/includes/weather.json',
			success: function(data) {
				// jsonObj = data;
				// console.log(jsonObj);
				jsonObj = $.parseJSON(data);
				console.log(jsonObj);
			}
		});
	// });
});