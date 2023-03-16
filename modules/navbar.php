<?php
include_once 'modals/login-modal.php';
include_once 'modals/signup-modal.php';
include_once 'modals/account-details-modal.php';

$page = $_SERVER['PHP_SELF'];

if (isset($_SESSION['error']) && isset($_SESSION['error_loc'])){ // If error is set for a modal, display it
    echo "<script>
    $(document).ready(function(){
        $('#{$_SESSION['error_loc']}').modal('show');
    });
    </script>";
    unset($_SESSION['error']);
    unset($_SESSION['error_loc']);
}
if (isset($_SESSION['error'])){//If error is set and there is no location, display it
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>' . $_SESSION['error'] . '</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <br >
  ';
  unset($_SESSION['error']);
}
if (isset($_SESSION['success']) && isset($_SESSION['success_loc'])){ // If success is set for a modal, display it
    echo "<script>
    $(document).ready(function(){
        $('#{$_SESSION['success_loc']}').modal('show');
    });
    </script>";
    unset($_SESSION['success']);
    unset($_SESSION['success_loc']);
}
if (isset($_SESSION['success'])){ //If success is set and there is no location, display it
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>' . $_SESSION['success'] . '</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <br >
  ';
  unset($_SESSION['success']);
}


?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Health Advice Group</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo $page=="/projects/Health-Advice-Group/index.php" ? "active" : ""?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $page=="/projects/Health-Advice-Group/weather-forecast.php" ? "active" : ""?>"href="weather-forecast.php">Weather Forecast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $page=="/projects/Health-Advice-Group/air-quality.php" ? "active" : ""?>"href="air-quality.php">Air Quality Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Advice</a>
        </li>
        <?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { //If user logged in then display these links ?> 
            <li class="nav-item">
                <a class="nav-link" href="#">Health Tracker</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link" href="#">My Account</a>
            </li>
            <li class="nav-item">
              <form action="functions/logout-action.php" method="POST">
                <a class="nav-link" href="functions/logout-action.php">Log Out</a>
              </form>
            </li>

        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login / Sign Up</a>
            </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->