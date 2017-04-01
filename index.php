<?php include "includes/header.php"; ?>
<form action="index.php" method="get">
    <input type="text" name="cityWeather" placeholder="City">
    <input type="submit" name="submit" value="Get Weather" id="submit">
</form>

<?php

if(isset($_GET['cityWeather'])) {
    // store the location submitted in a variable
    $location = $_GET['cityWeather'];
    
    // store the API key, for formatting purposes
    $appId = "fd031db11dc02956a02a1d1fd2980ebc";
    
    // create the URL
    $getWeatherAPI = "http://api.openweathermap.org/data/2.5/weather?q=$location&APPID=$appId";
    
    // store the contents of the request in a variable
    $response = file_get_contents($getWeatherAPI);
    
    // open the json doc
    $jsonDoc = fopen("./includes/weather.json", "w");
    
    // write the request contents in the json doc. 
    fwrite($jsonDoc, $response);
    
    // close the json doc.
    fclose($jsonDoc);
    
    if($_GET['cityWeather'] == $location) {
        ?>
        <div id="show-data">
        <div><span id="weatherDisplay"></span></div>
        <p>Location: <span id="location"></span></p>
        <p>Condition: <span id="weatherDescription"></span></p>
        <p>Current-Temp: <span id="temp"></span>&deg;F</p>
        <p>Temp-Min: <span id="tempMin"></span>&deg;F</p>
        <p>Temp-Max: <span id="tempMax"></span>&deg;F</p>
        <p>Humidity: <span id="humidity"></span>%</p>
        </div>
        <?php

    } else {
    
?>
    
    <div id="show-data"></div>
    
    <?php
    }
}

?>



<?php include "includes/footer.php"; ?>