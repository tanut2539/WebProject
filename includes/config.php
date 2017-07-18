<?php
/*
*   This Project CS319 Internet Programming
*	Powered by Tanut Leelaparsert
*/
		$host = "localhost";
		$user = "root";
		$db = "2thinfo";
		$connect = mysql_connect($host,$user);
		if(!$connect)
		{
			echo "<h3>ไม่สามารถเชื่อมต่อฐานข้อมูลได้</h3>";
			exit();
		}
		mysql_db_query($db,'SET NAMES UTF8');
?>