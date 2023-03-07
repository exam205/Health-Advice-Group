<?php 
include_once 'modals/login-modal.php';
include_once 'modals/signup-modal.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Health Advice Group</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Weather Forecast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Air Quality Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Advice</a>
        </li>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?> <!-- If user is logged in navbar changes -->
            <li class="nav-item">
                <a class="nav-link" href="#">Health Tracker</a>
            </li>            
            <li class="nav-item">
                <a class="nav-link" href="#">My Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
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