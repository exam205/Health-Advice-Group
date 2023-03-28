<?php

$page = $_SERVER['PHP_SELF'];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $user = new User($_SESSION['uid'],$_SESSION['email'],$_SESSION['firstname'],$_SESSION['surname'],$_SESSION['postcode']);
}
if ($page == "/projects/Health-Advice-Group/edit-account.php"){
  if (isset($user)){
    $details = $user->getDetails(); 
  }
  else{
    $_SESSION['error'] = "You must be logged in to view this page!";
    header ("Location: index.php");
  }
}
include_once 'modals/login-modal.php';
include_once 'modals/signup-modal.php';
include_once 'modals/account-details-modal.php';
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand d-none d-sm-block" href="index.php"><h3><strong>Health Advice Group</strong></h3></a>
    <a class="navbar-brand d-block d-sm-none"><h3><strong>Health Advice Group</strong></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fs-5" id="navbarNav">
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
        <li class="nav-item dropdown">
          <!-- set active if one of the advice pages is active -->
          <a class="nav-link dropdown-toggle 
          <?php echo $page=="/projects/Health-Advice-Group/advice-main-page.php" || $page=="/projects/Health-Advice-Group/weather-health-advice.php" || $page=="/projects/Health-Advice-Group/environmental-health-advice.php" ? "active" : ""?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Health Advice
          </a>
          <ul class="dropdown-menu" style="background-color: #f5f5f5;">
            <li><a class="dropdown-item <?php echo $page=="/projects/Health-Advice-Group/advice-main-page.php" ? "active" : ""?>" href="advice-main-page.php">Advice Homepage</a></li>
            <li><a class="dropdown-item <?php echo $page=="/projects/Health-Advice-Group/weather-health-advice.php" ? "active" : ""?>" href="weather-health-advice.php">Weather Health Advice</a></li>
            <li><a class="dropdown-item <?php echo $page=="/projects/Health-Advice-Group/environmental-health-advice.php" ? "active" : ""?>" href="environmental-health-advice.php">Environmental Health Advice</a></li>
          </ul>
        </li>
        <?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { //If user logged in then display these links ?> 
            <li class="nav-item">
                <a class="nav-link" href="#">Health Tracker</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link <?php echo $page=="/projects/Health-Advice-Group/edit-account.php" ? "active" : ""?>" href="edit-account.php">My Account</a>
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

<?php
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