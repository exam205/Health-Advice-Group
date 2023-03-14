<?php
session_start();
include_once 'functions/api-calls.php';
include_once 'classes/common-functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
    <?php include 'modules/navbar.php'; ?>
</body> 

<?php 
if (isset($_GET['forecastpostcode'])){
    $temppostcode = $_GET['forecastpostcode'];
    $weather_data = Common::getWeatherData($temppostcode);
    $air_quality = Common::getAirQuality($temppostcode);
}
else if (isset($_SESSION["loggedin"]) && $_SESSION==True){
    $weather_data = Common::getWeatherData($_SESSION['postcode']);
    $air_quality = Common::getAirQuality($_SESSION['postcode']);
    $temppostcode = $_SESSION['postcode'];
}
?>
<!-- Create a weather forecast search bar -->
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col">
            <form action="weather-forecast.php" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="forecastpostcode" placeholder="Enter your postcode" aria-label="Enter your postcode" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Display the weather forecast -->
<div class="divider mb-0"></div>
<div class="container bg-dark col-xxl-8 px-4 py-5 text-light">
    <div class="row">
        <div class="col">
            <h1>Forecast for <?php echo $temppostcode; ?> At: <?php echo $weather_data["time"]?></h1>
        </div>
    </div>
    <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="images/weather-icons/weather-icons-png/<?php echo $weather_data["weather_icon"]; ?>.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="300" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $weather_data["weather"]; ?></h1>
            <p class="lead"><?php echo $weather_data["weather_desc"]; ?></p>
            <!-- Display the air quality -->
            <p class="lead">Air Quality Index: <?php echo $air_quality["aqi"]; ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="pointer-events: none;">Temperature: <?php echo $weather_data["temp"]; ?>°C</button>
                <button type="button" class="btn btn-outline-info btn-lg px-4" style="pointer-events: none;">Feels like: <?php echo $weather_data["feels_like"]; ?>°C</button>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="pointer-events: none;">Humidity: <?php echo $weather_data["humidity"]; ?>%</button>
                <button type="button" class="btn btn-outline-info btn-lg px-4" style="pointer-events: none;">Wind Speed: <?php echo $weather_data["wind_speed"]; ?>m/s</button>  
            </div>
        </div>
    </div>
</div>
<div class="divider mb-0"></div>
<div class="container bg-dark col-xxl-8 px-4 py-5 text-light">
    <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">

        </div>
        <div class="col-lg-6">

        </div>
    </div>
</div>
<div class="divider mb-0"></div>
</html>