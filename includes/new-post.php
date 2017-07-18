<?php
			if(isset($_POST['new-post']))
			{
				if(trim($_POST['forum-title'] && $_POST['text-details'] && $_POST['text-feeds']) == "")
				{
		?>
					<div class="msg_error">กรุณากรอกข้อมูลให้ครบถ้วน</div>
		<?php
				}
				else
				{
						date_default_timezone_set('Asia/Bangkok');
						$up = $_SESSION["user_login"];
						$insert = "INSERT INTO db_forums ";
						$insert .="(createdate,user_post,title,details,details_index) ";
						$insert .="VALUES ";
						$insert .="('".date("Y-m-d H:i:s")."','$up','".$_POST["forum-title"]."','".$_POST["text-details"]."','".$_POST["text-feeds"]."')";
						$query = mysql_query($insert);
						header("location: index");
				}
			}
?>