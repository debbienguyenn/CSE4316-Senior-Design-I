<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> WatchBuddy - Homepage</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" type=text/css>
  <style>
    footer {
      color: grey
    }
  </style>

</head>

<body>
  <section>

    <?php
      include('navbar.php');
    ?>

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

