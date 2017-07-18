<?php 
/*
*   This Project CS319 Internet Programming
*	Powered by Tanut Leelaparsert
*/

/* include file new-post*/
$navtitle = "Post";
require('./includes/config.php');
require('./content/new-post.php');
if($_SESSION['user_login'] == "")
{
	header("Location:index");
}
?>