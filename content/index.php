<?php include 'content/themes/header.php';?>
<?php include 'sidebar.php';?>
<div class="primary-content wide">
<?php
		$forum = "SELECT * FROM db_forums";
		$forum .= " WHERE pin_Post = 1";
		$forum .=" order by qid DESC LIMIT 5";
		$forum_query = mysql_query($forum);
		while($forum_result = mysql_fetch_array($forum_query))
		{	
?>
<div class="card post" id="<?=$forum_result["qid"];?>">
	<div class="card-padding remove-padding-bottom clearfix">
	<div class="tag-top-stories">
		<div class="tag-top-stories-inner">
			เนื้อหาปักหมุด		</div>
	</div>
		<header>
			<p class="date"><?php echo date('F d, Y', strtotime($forum_result["createdate"])); ?></p>
			<h2><a href="post-<?=$forum_result["qid"];?>.html"><?=$forum_result["title"];?></a></h2>
		</header>
		<div class="excerpt">
			<?=$forum_result["details_index"];?> <a href="post-<?=$forum_result["qid"];?>.html">อ่านเพิ่มเติม</a>
		</div>
	</div><!--end:.card-padding-->
</div>
<!--end:.card.post-->
<?php }?>
</div>
</section>
<?php include 'content/themes/footer.php';?>