<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> WatchBuddy - Homepage</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" type=text/css>
  <style>
    section {
      height: 700px;
    }
  </style>

  <style>
    footer {
      color: grey
    }
  </style>

</head>

<body>
  <section>

    <div class="container">
      <div class="navbar">
        <a href="homepage.html">
          <image src="images/logo.jpg" class="logo"></image>
        </a>
        <nav style="width:1000px" class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="homepage.html">Home</a>

            <!--dropdown menu for video categories-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Videos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Youtube</a></li>
                    <li><a class="dropdown-item" href="#">Anime</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">View All</a></li>
                  </ul>
                </li>
                <li>
                  <form class="d-flex">
                    <input style="width:400px" class="form-control me-2" type="search" placeholder="Search"
                      aria-label="Search">
                    <button style="width:100px" class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-2">
            <a href="Login.php">Login</a>
            &emsp;
            <a href="SignUp.php">Sign Up</a>
          </div>

        </nav>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-end">
        <div class="col-4">
          <h1>Chat and Watch<br>with your Buddies</h1>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-4">
          <p>
            Join us <u><a href="SignUp.php">here</a></u>
            to have a wonderful time with your loved ones without leaving your desk.
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php
        include('footer.php');
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>