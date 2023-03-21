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
<?php 
if (isset($_GET['forecastpostcode'])){ // If the user has searched for a postcode
    $temppostcode = $_GET['forecastpostcode'];
    $weather_data = Common::getWeatherData($temppostcode);
    $alerts = $weather_data["alerts"];
}
else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==True){ // If the user is logged in
    $weather_data = Common::getWeatherData($_SESSION['postcode']);
    $temppostcode = $_SESSION['postcode'];
    $alerts = $weather_data["alerts"];
}
if (isset($weather_data) == False){ // If the user has not searched for a postcode or logged in
    $weather_data = Common::getWeatherData("London");
    $temppostcode = "London";
    $alerts = $weather_data["alerts"];
}
?>

<!-- Weather forecast search bar -->
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col">
            <form action="weather-forecast.php" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="forecastpostcode" placeholder="Enter your Postcode or City" aria-label="Enter your postcode" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End weather forecast search bar -->
<!-- Weather forecast -->
<div class="divider mb-0"></div>
<div class="container bg-dark px-4 py-5 text-light" style="max-width:100% !important">
    <div class="row">
        <div class="col">
            <h1>Forecast for <?php echo $weather_data["location"]; ?> At: <?php echo $weather_data["local_time"]?></h1>
        </div>
    </div>
    <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?php echo $weather_data["weather_icon"];?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="300" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $weather_data["weather"]; ?></h1>
            <p class="lead">Air Quality Index: <?php echo $weather_data["aqi"]; ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="pointer-events: none;">Temperature: <?php echo $weather_data["temperature"]; ?>°C</button>
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
<!-- End weather forecast -->
<div class="divider mb-0"></div>
<div class="container bg-dark px-4 py-5 text-light" style="max-width:100% !important">
    <div class="row flex-lg-row g-5 py-5">
        <div class="col-lg-6">
            <?php if ($weather_data["uv"] < 3) { // UV level if statements ?>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">UV Level: <?php echo $weather_data["uv"] ?></h4>
                    <p>Low risk of harm from unprotected sun exposure.</p>
                </div>
            <?php } else if ($weather_data["uv"] < 6) { ?>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">UV Level: <?php echo $weather_data["uv"] ?></h4>
                    <p>Moderate risk of harm from unprotected sun exposure. Protective measures, such as shade, clothing, and sunscreen, are recommended.</p>
                </div>
            <?php } else if ($weather_data["uv"] < 8) { ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">UV Level: <?php echo $weather_data["uv"] ?></h4>
                    <p>High risk of harm from unprotected sun exposure. Take extra precautions because unprotected skin and eyes will be damaged and can burn quickly. Only go outside if required</p>
                </div>
            <?php } else if ($weather_data["uv"] < 11) { ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">UV Level: <?php echo $weather_data["uv"] ?></h4>
                    <p>Very high risk of harm from unprotected sun exposure. Take all precautions because unprotected skin and eyes can burn in minutes. Try to avoid sun exposure between 10 a.m. and 4 p.m.</p>
                </div>
            <?php } else if ($weather_data["uv"] > 11) { ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">UV Level: <?php echo $weather_data["uv"] ?></h4>
                    <p>Extreme risk of harm from unprotected sun exposure. Take all precautions because unprotected skin and eyes can burn in minutes. Try to avoid sun exposure between 10 a.m. and 4 p.m.</p>
                </div>
            <?php }?>
        </div>
        <div class="col-lg-6">
            <?php
            //  Create boxes for each alerts
            $tempheadline = "";
            if ($alerts["alerts"] == "No alerts"){
                echo "<div class='alert alert-success' role='alert'>No Alerts</div>";
            }else{
            foreach ($alerts["alerts"]["alert"] as $alert)  {
                if ($tempheadline == $alert["headline"]) {
                    continue;
                }
                $effective = strtotime($alert["effective"]);
                $expires = strtotime($alert["expires"]);
                $now = strtotime(date("Y-m-d H:i:s"));
                //break up the date and time on the effective and expires
                $effective = explode("T", $alert["effective"]);
                $expires = explode("T", $alert["expires"]);

                ?>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading"><?php echo $alert["headline"]; ?></h4>
                    <p><?php echo $alert["desc"]; ?></p>
                    <hr>
                    <p class="mb-0">Start: <?php echo $effective[0]." ".$effective[1] ?></p>
                    <p class="mb-0">End: <?php echo $expires[0]." ".$expires[1]; ?></p>
                </div>
            <?php $tempheadline = $alert["headline"];}} ?>
        </div>
    </div>
</div>
<div class="divider mb-0"></div>
</body>
</html>