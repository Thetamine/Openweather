<!--Javascript for testing purposes-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">  
$(document).ready(function () {

        $.getJSON('http://localhost/openweather/includes/weather.json', function (data) {
            console.log(data);
        });
});
</script>
</body>
</html>