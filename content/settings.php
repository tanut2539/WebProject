<?php include 'content/themes/header.php';?>
<?php include 'sidebar.php';?>
<?php
		$uid = $_SESSION["id"];
		$s = "SELECT *FROM member_registered WHERE id = $uid";
		$sq = mysql_query($s);
		$sr = mysql_fetch_array($sq);
?>
<div class="primary-content wide">
<div class="zt">
<div class="bn mx">
<div class="Pk">
		<div class="Cj">
			<div class="Il"></div>
				<div class="jE">
					<div class="nx">
						<div class="ut">
							<h5 class="px">Username</h5>
						</div>
							<div class="qx">
								<div class="Dna">
									<span class="de"><?=$sr["user_login"];?></span>
								</div>
							</div>
					</div>
				</div>
		</div>
</div>
<div class="Pk">
	<a href="" class="ox">
		<div class="Cj">
			<div class="Il"></div>
				<div class="jE">
					<div class="nx">
						<div class="ut">
							<h5 class="px">E-mail</h5>
						</div>
							<div class="qx">
								<div class="Dna">
									<span class="de"><?=$sr["user_email"];?></span>
								</div>
							</div>
					</div>
				</div>
		</div>
	</a>
</div>
<div class="Pk">
	<a href="" class="ox">
		<div class="Cj">
			<div class="Il"></div>
				<div class="jE">
					<div class="nx">
						<div class="ut">
							<h5 class="px">Password</h5>
						</div>
							<div class="qx">
								<div class="Dna">
									<span class="de">คลิกเพื่อตั้งค่ารหัสความปลอดภัย</span>
								</div>
							</div>
					</div>
				</div>
		</div>
	</a>
</div>
</div>
</div>
</div>
</section>
<?php include 'content/themes/footer.php';?>