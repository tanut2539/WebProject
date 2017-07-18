<?php 
		$post = "SELECT * FROM db_forums  WHERE qid = '".$_GET["qid"]."'";
		$post_query = mysql_query($post);
		$post_result = mysql_fetch_array($post_query);
		$navtitle = $post_result["title"];
		include 'content/themes/header.php';
?>
<div class="wide">
<div class="card post" id="<?=$post_result["qid"];?>">
	<div class="card-padding clearfix">
		<header class="clearfix">
			<p class="date"><?php echo date('F d, Y', strtotime($post_result["createdate"])); ?> <?php if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == true) {?><a href="edit-post-<?=$post_result["qid"];?>.html">Edit Post</a><?php }?></p>
			<h2><?=$post_result["title"];?></h2>
			<em class="x2">by <a href="<?=$post_result["user_post"];?>"><?=$post_result["user_post"];?></a></em>
		</header>
		<div class="excerpt">
			<p><?=$post_result["details"];?></p>
			<div class="entry-meta">
<div data-href="http://2th.info/post-<?=$post_result["qid"];?>.html" class="fb-comments" data-width="100%" data-numposts="5"></div>
			</div>
	</div>
	</div><!--end:.card-padding-->
</div>
</div>
<?php include 'content/themes/footer.php';?>