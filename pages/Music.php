<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:Login.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <link rel="stylesheet" href="../css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type=text/css>
    <title>Available Videos</title>
    
</head>
<body>
    <section>
    <?php
      include('navbar.php');
    ?>

    <form class="form-container" action="../processing/SaveVideo.php" method="post">
        <h1> Music Videos</h1>
        <div class="container">
            

            <!--
            <div class="row justify-content-center">
                <div class="col-sm" align="center">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" src="https://www.youtube.com/embed/DODLEX4zzLQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                    </div>
                    <div>
                        <input class="btn btn-success"
                        type="submit"
                        name="id" value="001"><i class = "fa fa-save"></i></input>
                    </div>
                </div>
                <div class="col-sm" align="center">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" src="https://www.youtube.com/embed/FFLTU9eIijw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                    </div>
                    <div>
                        <input class="btn btn-success"
                        type="submit"
                        name="id" value="002">
                    </div>

                </div>
                <div class="col-sm" align="center">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" src="https://www.youtube.com/embed/2acZIOSV9LY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                    </div>
                    <div>
                        <input class="btn btn-success"
                        type="submit"
                        name="id" value="003">
                    </div>
                </div>
            </div>
            
            <br>
            <div class="row justify-content-center">
                <div class="col-sm" align="center">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" src="https://www.youtube.com/embed/XJ2hd2cKAJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                    </div>
                    <div>
                        <input class="btn btn-success"
                        type="submit"
                        name="id" value="004">
                    </div>
                </div>
                <div class="col-sm" align="center">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" src="https://www.youtube.com/embed/CmomQkOau7c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                    </div>
                    <div>
                        <input class="btn btn-success"
                        type="submit"
                        name="id" value="005">
                    </div>
                </div>
                <div class="col-sm" align="center">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" src="https://www.youtube.com/embed/HeGVeBWECu8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                    </div>
                    <div>
                        <input class="btn btn-success"
                        type="submit"
                        name="id" value="006">
                    </div>
                </div>


        </div>
                        -->
        
        <div class="row justify-content-center">
            <?php
                include('../processing/db.php');
                //get video ID and link list
                mysqli_select_db($conn, 'videos');
                $username = $_SESSION['username'];
                $video_query = "SELECT videoID, link from videos where Name = 'music'";
                $video_result = mysqli_query($conn, $video_query);
                $video_list = array();
                if(mysqli_num_rows($video_result)>0)
                {
                    while($list = mysqli_fetch_assoc($video_result))
                    {
                        $video_list[] = $list;
                    }
                }
                
                
                //display each link onto profile page
                foreach($video_list as $video)
                {
                    $link = $video['link'];
                    $videoID = $video['videoID'];
                    $html = '<div class="col-3">
                    <div class="card">
                        <div class = "iframe-container">
                        <iframe width="400" height="240" 
                        src="'.$link.'"title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>';
                    echo $html;
                    echo "<div><a href = ../processing/SaveVideo.php?id=".$videoID."><img src=../images/icons/save.png style='width:40px'></a></div></div>
                    &emsp;";
                }
                // <div>
                //         <label for="button"><img src=../images/icons/save.png style="width:40px"></label>
                //         <input class="btn btn-success"
                //         type="submit" id="button"
                //         name="id" value="'.$videoID.'" style="display:none">
                //     </div>
               
            ?>
        </div>
     </form>
    </section>
    <?php
        include('footer.php');
    ?>
