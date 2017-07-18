<?php include 'includes/signup.php';?>
<section class="two-columns clearfix">
<div class="secondary-content narrow">
<aside class="card-2 sidebar">
<?php
		if(isset($_POST['login']))
		{
			if(trim($_POST["txt_username"] && $_POST["txt_password"]) != "")
			{
				if(mysql_num_rows($temp)==0)
				{
			?>
					<div class="msg_error">รหัสหรือผู้ใช้งานไม่ถูกต้อง</div>
			<?php
				}
			}
		}
		?>
<div class="card-padding2">
<div class="card-user center">
		<?php
				if(isset($_SESSION["user_login"]) == "")
				{
		?>
					<!--- GUEST --->
					<div class="u_menu"><notice class="center"><a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success" >Sign Up</a> or <a href="registered" class="btn btn-default">Registered</a> </notice></div>
		<?php
				}
				else
				{
					$login_id = $_SESSION["id"];
					$data = "SELECT * FROM member_info WHERE id = $login_id";
					$query2 = mysql_query($data);
					$result2 = mysql_fetch_array($query2);
		?>
					<!--- User -->
					<div class="image">
						<img src="data/cache/u/avatar/<?php echo $result2["user_img"]; ?>">
						<h3><a href="<?php echo $result2["user_nickname"]; ?>"><?php echo $result2["user_nickname"]; ?></a></h3>
					</div>
						<a href="new-post" class="new-post" title="โพสต์"></a>
						<a href="settings" class="settings" title="ตั้งค่าส่วนตัว"></a>
						<a href="logout" class="logout" title="ออกจากระบบ"></a>
		<?php
				}
		?>
</div>
</div>
</aside>
</div>