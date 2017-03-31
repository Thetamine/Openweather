<?php 

include "includes/header.php";


// if the form has been submitted, begin making the appropriate requests 
if(isset($_POST['submit'])) {
    
    // store the location submitted in a variable
    $location = $_POST['cityWeather'];
    
    // store the API key, for formatting purposes
    $appId = "fd031db11dc02956a02a1d1fd2980ebc";
    
    // create the URL
    $getWeatherAPI = "http://api.openweathermap.org/data/2.5/weather?q=$location&APPID=$appId";
    
    // store the contents of the request in a variable
    $response = file_get_contents($getWeatherAPI);
    
    // open the json doc
    $jsonDoc = fopen("includes/weather.json", "w");
    
    // write the request contents in the json doc. 
    fwrite($jsonDoc, $response);
    
    // close the json doc.
    fclose($jsonDoc);
}

?>
<form action="" method="post">
    <input type="text" name="cityWeather" placeholder="City">
    <input type="submit" name="submit" value="Get Weather">
</form>
<div id="show-data"></div>


<?php include "includes/footer.php"; ?>