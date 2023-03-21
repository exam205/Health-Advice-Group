<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Quality</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
<?php include 'modules/navbar.php'; ?>
<?php 
if (isset($_GET['forecastpostcode'])){ // If the user has searched for a postcode
    $temppostcode = $_GET['forecastpostcode'];
    $weather_data = Common::getWeatherData($temppostcode);
}
else if (isset($_SESSION["loggedin"]) && $_SESSION==True){ // If the user is logged in
    $weather_data = Common::getWeatherData($_SESSION['postcode']);
    $temppostcode = $_SESSION['postcode'];
}
if (isset($weather_data) == False){ // If the user has not searched for a postcode or logged in
    $weather_data = Common::getWeatherData("London");
    $temppostcode = "London";
}

//Change the aqi background colour based on how high it is
$aqi_value = (int)$weather_data["aqi"];
if ($aqi_value >=1 && $aqi_value <=3){
    $aqi_colour = "green";
    $advice_text_all = "Enjoy your usual outdoor activities.";
}elseif ($aqi_value >=4 && $aqi_value <=6){
    $aqi_colour = "#DEC20B";
    $advice_text_all = "Enjoy your usual outdoor activities.";
    $advice_text_at_risk = "Adults and children with lung problems, and adults with heart problems, who experience symptoms, should consider reducing strenuous physical activity, particularly outdoors.";
}elseif ($aqi_value >=7 && $aqi_value <10){
    $aqi_colour = "#ff8c00";
    $advice_text_all = "Anyone experiencing discomfort such as sore eyes, cough or sore throat should consider reducing activity, particularly outdoors.";
    $advice_text_at_risk = "Adults and children with lung problems, and adults with heart problems, should reduce strenuous physical exertion, particularly outdoors, and particularly if they experience symptoms. People with asthma may find they need to use their reliever inhaler more often. Older people should also reduce physical exertion.";
}elseif ($aqi_value >=10){
    $aqi_colour = "#800000";
    $advice_text_all = "Reduce physical exertion, particularly outdoors, especially if you experience symptoms such as cough or sore throat.";
    $advice_text_at_risk = "Adults and children with lung problems, adults with heart problems, and older people, should avoid strenuous physical activity. People with asthma may find they need to use their reliever inhaler more often.";
}
$bgcolour = $aqi_colour;

?>
<!-- Search -->
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col">
            <form action="air-quality.php" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="forecastpostcode" placeholder="Enter your Postcode or City" aria-label="Enter your postcode" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Search -->
<!-- AQI -->
<div class="divider mb-0"></div>
<div class="container bg-dark px-4 py-5 text-light" style="max-width:100% !important">
    <div class="row">
        <div class="col lg-6">
            <h1>Air Quality Data for <?php echo $weather_data["location"]; ?> At: <?php echo $weather_data["local_time"]?></h1>
        </div>
        <div class="col lg-6">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">            
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" style="--bs-btn-border-color:<?php echo $bgcolour?>;pointer-events: none;background:<?php echo $bgcolour?>">Air Quality Index: <?php echo $weather_data["aqi"]; ?></button>
                <a href="https://uk-air.defra.gov.uk/air-pollution/daqi" class="btn btn-outline-info btn-lg px-4 me-md-2" role="button">Learn more</a>
            </div>
        </div>
    </div>
    <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
        </div>
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Advice for everyone</h4>
                <p><?php echo $advice_text_all; ?></p>
            </div>
        </div>
        <div class="col-lg-6">
            <?php if (isset($advice_text_at_risk)){?>
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Advice for people at risk</h4>
                <p><?php echo $advice_text_at_risk; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End AQI -->
<div class="divider mb-0"></div>
<!-- Pollutants -->
<div class="container bg-dark px-4 py-5 text-light" style="max-width:100% !important">
    <div class="row">
        <div class="col">
            <h1>Pollutants</h1>
        </div>
    </div>
    <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-lg-6">
            <h2>PM10</h2>
            <p>PM10 is particulate matter with a diameter of 10 micrometres or less. It causes irritation of the eyes, ears, nose, and throat.</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($weather_data["pm10"] / 101) * 100?>%" aria-valuenow="<?php echo $weather_data["pm10"]?>" aria-valuemin="0" aria-valuemax="101"></div>
            </div>
            <h3><?php echo round($weather_data["pm10"],3)?>µg/m³</h3>
        </div>
        <div class="col-lg-6">
            <h2>PM2.5</h2>
            <p>PM2.5 is particulate matter with a diameter of 2.5 micrometres or less. It can cause irritation of the eyes, ears, nose, and throat.</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($weather_data["pm2_5"] / 71) * 100?>%" aria-valuenow="<?php echo $weather_data["pm25"]?>" aria-valuemin="0" aria-valuemax="71"></div>
            </div>
            <h3><?php echo round($weather_data["pm2_5"],3)?>µg/m³</h3>
        </div>
        <div class="col-lg-6">
            <h2>CO</h2>
            <p>CO is carbon monoxide. It can cause headaches, dizziness, and nausea. It can also cause heart problems.</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($weather_data["co"] / 10000) * 100?>%" aria-valuenow="<?php echo $weather_data["co"]?>" aria-valuemin="0" aria-valuemax="10000"></div>
            </div>
            <h3><?php echo round($weather_data["co"],3)?>µg/m³</h3>
        </div>
        <div class="col-lg-6">
            <h2>NO2</h2>
            <p>NO2 is nitrogen dioxide. It can cause shortness of breath and cough. It also inflames the lining in your lungs leading to issues such as chest infections or bronchitis</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($weather_data["no2"] / 601)* 100?>%" aria-valuenow="<?php echo $weather_data["no2"]?>" aria-valuemin="0" aria-valuemax="601"></div>
            </div>
            <h3><?php echo round($weather_data["no2"],3)?>µg/m³</h3>
        </div>
        <div class="col-lg-6">
            <h2>SO2</h2>
            <p>SO2 is sulphur dioxide. It can cause irritation of the nose and throat.</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($weather_data["so2"] / 1065) * 100?>%" aria-valuenow="<?php echo $weather_data["so2"]?>" aria-valuemin="0" aria-valuemax="1065"></div>
            </div>
            <h3><?php echo round($weather_data["so2"],3)?>µg/m³</h3>
        </div>
        <div class="col-lg-6">
            <h2>O3</h2>
            <p>O3 is ozone. It can trigger inflammation of the respiratory tract, eyes, nose and throat as well as asthma attacks.</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo ($weather_data["o3"] / 241) * 100?>%" aria-valuenow="<?php echo $weather_data["o3"]?>" aria-valuemin="0" aria-valuemax="241"></div>
            </div>
            <h3><?php echo round($weather_data["o3"],3)?>µg/m³</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="text-muted">Pollutant bars percentage based on UK DEFRA Guidelines</p>
        </div>
    </div>
</div>
<!-- End pollutants -->
<div class="divider mb-0"></div>
</body>
</html>