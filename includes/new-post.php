<?php
        if(isset($_POST['new-post']))
        {
            if(trim($_POST['forum-title'] == "" && $_POST['text-details'] == "" && $_POST['text-feeds']) == "")
            {
                echo "<div class=\"msg_error\">กรุณากรอกข้อมูลให้ครบถ้วน</div>";
            }
            else
            {
                    date_default_timezone_set('Asia/Bangkok');
                    $forumTitle = mysql_real_escape_string($_POST["forum-title"]);
                    $textDetail = mysql_real_escape_string($_POST["text-details"]);
                    $textFeed = mysql_real_escape_string($_POST["text-feeds"]);
                    $up = $_SESSION["user_login"];
                    $insert = "INSERT INTO db_forums 
                                (createdate,user_post,title,details,details_index)
                               VALUES
                                ('".date("Y-m-d H:i:s")."','$up','".$forumTitle."',
                                '".$textDetail."','".$textFeed."')
                    ";
                    $query = mysql_query($insert);
                    header("location: index");
            }
        }
?>
