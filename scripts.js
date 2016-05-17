function startTime(){
	var today = new Date();
	var h = checkTime(today.getHours());
	var m = checkTime(today.getMinutes());
	var s = checkTime(today.getSeconds());
        var d = today.getDate();
	var M = today.getMonth() + 1;
	var y = today.getFullYear();
	document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
	document.getElementById('date').innerHTML = d + "/" + M + "/" + y;
	var t = setTimeout(startTime, 500);

}
function checkTime(i) {
	if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
}

$(document).ready(function() {
	$.simpleWeather({
	zipcode: '',
	woeid: '13383',
	location: '',
	unit: 'c',
	success: function(weather) {
	document.getElementById('weatherB').innerHTML = weather.temp+'&deg;'+weather.units.temp +" "+ weather.currently;
},
});
});

$(document).ready(function() {
	$.simpleWeather({
	zipcode: '',
	woeid: '34420',
	location: '',
	unit: 'c',
	success: function(weather) {
	document.getElementById('weatherS').innerHTML = weather.temp+'&deg;'+weather.units.temp +" "+ weather.currently
	},
});
});
