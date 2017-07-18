<?php 
/*
*   This Project CS319 Internet Programming
*	Powered by Tanut Leelaparsert
*/

/* include file settings*/
$navtitle = "Settings";
require('./includes/config.php');
require('./content/settings.php');
if($_SESSION['user_login'] == "")
{
	header("Location:index");
}
?>