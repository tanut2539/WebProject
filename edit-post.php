<?php 
/*
*   This Project CS319 Internet Programming
*	Powered by Tanut Leelaparsert
*/

/* include file edit-post*/
require('./includes/config.php');
require('./content/edit-post.php');
if($_SESSION['user_login'] == "")
{
	header("Location:index");
}
?>