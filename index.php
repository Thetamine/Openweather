<?php include "includes/header.php"; ?>

<form action="index.php" method="get">
    <input type="text" name="cityWeather" placeholder="City" id="textEntry">
    <input type="submit" name="submit" value="Get Weather" id="submit">
</form>

<?php include "includes/weather.php"; ?>

<?php include "includes/footer.php"; ?>