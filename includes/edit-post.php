<?php
				$q = "SELECT * FROM db_forums  WHERE qid = '".$_GET["qid"]."'";
				$qs = mysql_query($q);
				$qr = mysql_fetch_array($qs);
		?>
		<?php
			if(isset($_POST['edit-post']))
			{
				if(trim($_POST['forum-title'] && $_POST['text-details'] && $_POST['text-feeds']) == "")
				{
		?>
					<div class="msg_error">กรุณากรอกข้อมูลให้ครบถ้วน</div>
		<?php
				}
				else
				{
						$up = $_SESSION["user_login"];
						$insert = "UPDATE db_forums ";
						$insert .="SET ";
						$insert .="user_post = '$up',title = '".$_POST["forum-title"]."',details = '".$_POST["text-details"]."',details_index = '".$_POST["text-feeds"]."'";
						$insert .="WHERE qid = '".$_GET["qid"]."'";
						$query = mysql_query($insert);
						header('Location:post-'.$_GET["qid"].'.html');
				}
			}
			if(isset($_POST['delete']))
			{
				$delete = "DELETE FROM db_forums WHERE qid = '".$_GET["qid"]."'"; 
				$query = mysql_query($delete);
				header('Location: index');
			}
		?>