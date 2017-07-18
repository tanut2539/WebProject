<?php
ob_start();

@session_start();
		if(isset($_POST['login']))
		{
			$sql = "SELECT * FROM member_registered WHERE ((user_login= '".$_POST["txt_username"]."') AND (user_password='".$_POST["txt_password"]."')) ";
			$temp = mysql_query($sql);
			$query = mysql_query($sql);
			$result = mysql_fetch_array($query);
				if(mysql_num_rows($temp)==1)
				{ 
					$_SESSION["id"] = $result["id"];
					$_SESSION["user_login"] = $result["user_login"];
					
						session_write_close();
						header('Location: '.$_SERVER['HTTP_REFERER']); 
				}
		}
?>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เข้าสู่ระบบ</h4>
      </div>
      <div class="modal-body">
	  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" />
							<div class="form-group">
								<label for="exampleInputEmail1">
									<i class="glyphicon glyphicon-user"></i> Username
								</label> 
									<input type="text" class="form-control" name="txt_username" placeholder="Username" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">
									<i class="glyphicon glyphicon-lock"></i> Password
								</label> 
									<input type="password" class="form-control" name="txt_password" placeholder="Password" />
							</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="login" class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> เข้าสู่ระบบ</button>
		<button type="submit" name="forgetpw" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-question-sign"></i> ลืมรหัสผ่าน</button>
	  </div>
	  </form>
    </div>
  </div>
</div>