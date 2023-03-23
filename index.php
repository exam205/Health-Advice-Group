<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
    <?php include 'modules/navbar.php'; ?>
    <div class="container py-4">
        <div class="p-5 mb-4 text-bg-dark border rounded-3">
            <div class="container-fluid py-5">
                <!-- Display an image in this container and add a text over it -->
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bold text-light">Welcome to the Health Advice Group Website</h1>
                        <p class="col-md-8 fs-4 text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/carousel/the-team.png" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <h2>Weather Forecast</h2>
                    <p>Get the local weather forecast.</p>
                    <form action="weather-forecast.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="forecastpostcode" placeholder="Enter your Postcode or City" aria-label="Enter your postcode" aria-describedby="button-addon2" value="<?php echo (isset($_SESSION['postcode']) ? $_SESSION['postcode']:"London")?>">
                            <button class="btn btn-outline-light" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <h2>Air Quality Data</h2>
                    <p>Get the local air quality data. Includes pollutant percentages!</p>
                    <form action="air-quality.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="airqualitypostcode" placeholder="Enter your Postcode or City" aria-label="Enter your postcode" aria-describedby="button-addon2" value="<?php echo (isset($_SESSION['postcode']) ? $_SESSION['postcode']:"London")?>">
                            <button class="btn btn-outline-light" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <h2>Advice Homepage</h2>
                    <p>Get health advice relating to weather and/or environmental issues</p>
                    <!-- Centered Button that goes to advice-main-page.php -->
                    <div class="text-center">
                        <a href="advice-main-page.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>