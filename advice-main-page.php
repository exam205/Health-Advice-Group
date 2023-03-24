<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advice Home Page</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
    <?php include 'modules/navbar.php'; ?>
    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <h2 class="text-center">Weather Health Advice</h2>
                    <p class="text-center">Get health advice relating to weather issues</p>
                    <!-- Centered Button that goes to weather-health-advice.php -->
                    <div class="text-center">
                        <a href="weather-health-advice.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <h2 class="text-center">Environmental Health Advice</h2>
                    <p class="text-center">Get health advice relating environmental issues</p>
                    <!-- Centered Button that goes to environmental-health-advice.php -->
                    <div class="text-center">
                        <a href="environmental-health-advice.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Visited Advice Pieces -->
        <div class="p-5 mt-4 text-bg-dark border rounded-3">
            <div class="container-fluid py-5">
                <div class="row">
                    <h1 class="display-5 fw-bold text-light text-center">Most Visited Advice Pieces</h1>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <div class="h-100 p-5 text-bg-dark border-bottom rounded-3">
                            <h2 class="text-center">Title</h2>
                            <p class="text-center">Description</p>
                            <div class="text-center">
                                <a href="advice-main-page.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="h-100 p-5 text-bg-dark border-bottom rounded-3">
                            <h2 class="text-center">Title</h2>
                            <p class="text-center">Description</p>
                            <div class="text-center">
                                <a href="advice-main-page.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <div class="h-100 p-5 text-bg-dark border-bottom rounded-3">
                            <h2 class="text-center">Title</h2>
                            <p class="text-center">Description</p>
                            <div class="text-center">
                                <a href="advice-main-page.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="h-100 p-5 text-bg-dark border-bottom rounded-3">
                            <h2 class="text-center">Title</h2>
                            <p class="text-center">Description</p>
                            <div class="text-center">
                                <a href="advice-main-page.php"><button type="button" class="btn btn-outline-light btn-lg">Take Me There!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>