<?php include 'content/themes/header.php';?>
<div class="card-2 post" id="registered">
	<div class="card-padding clearfix">
		<h3>Registered</h3>
			<div class="note help-info"><strong>Tip:</strong> ลืมรหัสผ่านใช่ไหม? <a href="forgotpw">คลิกที่นี่</a></div>
			<?php
					date_default_timezone_set('Asia/Bangkok');
					$u_status = 1;
					$u_img = "start_avatar.png";
					$registered=date("Y-m-d H:i:s");
					if (isset($_POST['submit']))
					{
						if(trim($_POST["txt_username"] && $_POST["txt_password"] && $_POST["txt_email"]) == "")
						{
			?>
							<div class="note help-warning">กรอกข้อมูลไม่ครบถ้วน</div>
			<?php
						}
						else
						{
							$sql = "SELECT * FROM member_registered WHERE user_login = '".trim($_POST['txt_username'])."' ";
							$query = mysql_query($sql);
							$result = mysql_fetch_array($query);
							if($result)
							{
			?>
								<div class="note help-danger">มีชื่อผู้ใช้งานนี้อยู่แล้วในระบบ</div>
			<?php
							}
							else
							{
									$insert = "INSERT INTO member_registered (user_login,user_password,user_email,facebook,twitter) VALUES ('".$_POST["txt_username"]."','".$_POST["txt_password"]."','".$_POST["txt_email"]."','".$_POST["facebook"]."','".$_POST["twitter"]."')";
									$query_insert = mysql_query($insert);
									$insert2 = "INSERT INTO member_info (user_nickname,user_registered,user_status,user_img) VALUES ('".$_POST["txt_username"]."','$registered','$u_status','$u_img');";
									$query_insert2 = mysql_query($insert2);
			?>
									<div class="note help-success">สมัครสมาชิกสำเร็จ</div>
			<?php
							}
						}
					}
						mysql_close();
			?>
			<div class="from-pm">
							<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" />
					<fieldset class="form-group">
						<div class="col-sm col-sm-6 px1 mb1">
						<div class="form-group">
								<label>Username <span class="req">*</span></label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">@</span>
									<input name="txt_username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
								</div>
							</div>
							</div>
							<div class="col-sm col-sm-6 px1 mb1">
							<div class="form-group">
								<label>Password <span class="req">*</span></label>
								<input name="txt_password" type="password" class="form-control" placeholder="Password"/>
							</div>
							</div>
							<div class="col-sm col-sm-6 px1 mb1">
							<div class="form-group">
								<label>E-mail <span class="req">*</span></label>
								<input name="txt_email" type="email" class="form-control" placeholder="E-mail"/>
							</div>
							</div>
							<div class="col-sm col-sm-6 px1 mb1">
							<div class="form-group">
								<label>Facebook</label>
								<input name="facebook" type="text" class="form-control" placeholder="Facebook"/>
							</div>
							</div>
							<div class="col-sm col-sm-6 px1 mb1">
							<div class="form-group">
								<label>Twitter</label>
								<input name="twitter" type="text" class="form-control" placeholder="Twitter"/>
							</div>
							</div>
							<div class="col-sm col-sm-12 px1">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox">ยอมรับข้อตกลงการใช้งาน
									</label>
								</div>
							</div>
							</div>
							<div class="col-sm col-sm-12 px1">
								<button name="submit" type="submit" class="btn btn-success">ยืนยันสมัครสมาชิก</button>
							</div>	
					</fieldset>
				</form>	
						</div>
	</div><!--end:.card-padding-->
</div>
<?php include 'content/themes/footer.php';?>