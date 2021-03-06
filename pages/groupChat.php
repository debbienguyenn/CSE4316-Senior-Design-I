<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Chat</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container"> 
        <div class="chat-page">
            <div class="row">
                <!-- Videos section -->
                <div class="col-3">
                    <button id="stream" style="background-color: red; width:100px">Stream</button>
                    <?php
                        $group = true;

                        include("../processing/db.php");
                        mysqli_select_db($conn, 'rooms');
                        $key = $_GET['key'];
                        $buddies_query = "SELECT username from rooms where roomID = '$key'";
                        $buddies_result = mysqli_query($conn, $buddies_query);
                        $buddies_list = array();
                        if(mysqli_num_rows($buddies_result)>0)
                        {
                            while($list = mysqli_fetch_assoc($buddies_result))
                            {
                                $buddies_list[] = $list;
                            }
                        }
                        
                        foreach($buddies_list as $buddy ){
                            $username = $buddy['username'];
                            echo '<h3>'.$username.'</h3>';
                            echo '<pre></pre>';
                            include '../processing/displayVideos.php';
                        }

                    ?>

                    <?php
                        mysqli_query($conn,"UPDATE groupchat SET chat_status=1 WHERE username!='$username' AND roomID='$key'");
                    ?>

                </div>

                <!-- <script>
                    function playVideo(link)
                    {
                        let videoBox = document.querySelector('#video-box');
                        videoBox.innerHTML = 
                        `<div class = "iframe-container"><iframe width="400" height="240" src="${link}?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;                    
                    }
                </script> -->

                <!-- -->

                <!-- message box -->
                <div class="col-9">
                    <div class="row">
                        <div class="msg-header">
                            <div class="profile-pic">
                                <img src="../images/groupchat.png" alt="">
                            </div>
                            <div class="active">
                                <?php
                                    
                                    echo '<p>';
                                    foreach($buddies_list as $buddy ){
                                        if($buddy['username'] != $_SESSION['username'])
                                        echo $buddy['username'].', ';
                                    }
                                    echo '</p>';
                                ?>
                            </div>
                        </div>
                        
                        <div class="card" id="video-box"></div>

                        <div class="msg-inbox">
                            <div class="chats">
                                <div class="msg-page">
                                    <div class="received-chats">
                                        <div class="received-chats-img"></div>
                                    <div class="received-msg-inbox">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="outgoing-chats">
                                    <div class="outgoing-chats-msg">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Typing area -->
                        <form action="#" class='typing-area' method= "POST" autocomplete="off">   
                            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['username']; ?>" hidden>
                            <input type="text" name="key" value="<?php echo $key; ?>" hidden>
                            <input type="text" name="message" class="input-field" placeholder="Type here.....">
                            <button type="submit" class="button" style="width: 150px" ;>Send</button>
                        </form>
                    </div>
                </div>
                 <!-- -->
            </div>
                
            </div>
            
        </div>
    </div>

    <script> opener.location.reload(); </script>
    <script src="../processing/group-chat.js"></script>
    <script src="../processing/play-video.js"></script>
</body>
</html>

