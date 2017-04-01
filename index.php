<?php include "includes/header.php"; ?>
<form action="index.php" method="get">
    <input type="text" name="cityWeather" placeholder="City" id="textEntry">
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
            <div id="locationSection">
                <h1>Weather in <span id="location"></span></h1>
            </div>
            <div id="container">
                <div id="iconSection"><span id="weatherDisplay"></span></div>
                <div id="weatherSection">
                    <h2><span id="weatherDescription"></span></h2>
                    <hr>
                    <br>
                    <div id="tempContainer">
                        <div class='tempTile'>
                            <p><span id="temp"></span>&deg;</p>
                            <p>current</p>
                        </div>
                        <div class='tempTile'>
                            <p><span id="tempMin"></span>&deg;</p>
                            <p>low</p>
                        </div>
                        <div class='tempTile'>
                            <p><span id="tempMax"></span>&deg;</p>
                            <p>high</p>
                        </div>
                    </div>
                    <!-- <p>Humidity: <span id="humidity"></span>%</p> -->
                    <div id="windHumidContainer">
                        <div class="windHumidTile">
                            <p>humidity</p>
                            <p><span id="humidity"></span>%</p>
                        </div>
                        <div class="windHumidTile">
                            <p>wind speed</p>
                            <p><span id="windSpeed"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

    } else {
    ?>
    <div id="show-data">
        <h1>Openweather App</h1>
        <p>Enter your city and click 'Get Weather' to check your local weather conditions.</p>
    </div>
    <?php
    }
}

?>



<?php include "includes/footer.php"; ?>