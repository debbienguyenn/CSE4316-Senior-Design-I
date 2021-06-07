<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css" type=text/css>
  <title>Login - WatchBuddy</title>
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
            <a href="Login.html">Login</a>
            &emsp;
            <a href="SignUp.html">Sign Up</a>
          </div>

        </nav>
      </div>
    </div>
    <form class="form-container" action="Validation.php" method="post">
      <div class="container-xxl bg">
        <h1 style="color:grey"> WatchBuddy Login</h1>
        <div class="mb-3">
          <label style="color:grey" for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" style="width: 400px" ; required>
        </div>
        <div class="mb-3">
          <label style="color:grey" for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" style="width: 400px" ; required>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label style="color:grey" class="form-check-label" for="exampleCheck1">Keep me logged in</label>
        </div>
        <button type="submit" class="btn btn-success" style="width: 150px" ;>Log In</button>
        <a class="btn btn-danger" href="ForgotPass.html" role="button">Forgot Password</a>
        <label style="color:grey"> Doesn't have an account?</label>
        <a class="btn btn-primary" href="SignUp.html" role="button">Register Here</a>


      </div>
    </form>
  </section>
  <?php
        include('footer.php');
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>