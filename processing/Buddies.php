<?php
  session_start();

  if(isset($_POST["addBuddiesbtn"]))
  {
    $search_query = preg_replace("#[^a-z 0-9?!]#i", "", $_POST["buddy"]);

    header('location:processing/searchBuddies.php?query='.urlencode($search_query).'');
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> WatchBuddy - Buddies Page</title>
  <link rel="stylesheet" href="css-bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="pages/style.css" type=text/css>
  <style>
    footer {
      color: grey
    }
  </style>
</head>

<body>
    <section>
        <?php
            include('pages/navbar.php');
        ?>
      <form class="form-container" action="processing/search_action.php" method="post">
        <div class="container">
            <div class="row justify-content-center">
              <h2 align="center">Add Buddies!</h2>
              <label style="color:grey" for="buddy" class="col-6">Enter Buddy's Username</label>
              <div class="row justify-content-center">
                <input style="width:600px" class="form-control me-2" type="text" placeholder="Search for buddies.."
                          name="buddy" id="buddy">
                <button style="width:300px" class="btn btn-outline-success" type="submit" id="addBuddiesbtn" name="addBuddiesbtn">Add Buddy</button>
              <div id="buddiesList"></div>
            </div>
        </div>
      </form>

      <form class="form-container" action="deletebuddy_action.php" method="post">
        <div class="container">
            <div class="row justify-content-center">
              <label style="color:grey" for="buddy" class="col-6">Enter Buddy's Username</label>
              <div class="row justify-content-center">
                <input style="width:600px" class="form-control me-2" type="text" placeholder="Search for buddies.."
                          name="delete" id="delete">
                <button style="width:300px" class="btn btn-outline-danger" type="submit" id="deleteBuddiesbtn" name="deleteBuddiesbtn">Remove Buddy</button>
            </div>
        </div>
      </form>
    </section>

</body>

<!--
script for searching for a buddy using autocomplete search textbox
<script>  
 $(document).ready(function(){  
      $('#buddy').keyup(function(){  
           var query = $(this).val();
           $_SESSION['query'] = query;  
           if(query != '' || query != 8 || query != 46)  
           {  
                $.ajax({  
                     url:"search_action.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          /*comment by Debbie: not fading out when search is empty after typing something. FIX*/
                          //fixed: 06/18/2021
                          if($('#buddy').val() == '')
                          {
                            $('#buddiesList').fadeOut(); 
                          }
                          else
                          {
                            $('#buddiesList').fadeIn();  
                            $('#buddiesList').html(data);
                          } 
                     }  
                });  
           }

      });  
      //$(document).on('click', 'button', function()
      $(document).on('click', 'li', function()
      {  
          /*When user searches and clicks buddy name on results, it changes the text in search-bar to the button name for now*/
          /*Change and add to this portion - connect to database to add/delete friends*/
           $('#buddy').val($(this).text());
           $('#buddiesList').fadeOut();  
      }); 
      
 });  
 </script> -->
</html>
