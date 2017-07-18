<?php 
	$navtitle = "Edit-post";
	include 'content/themes/header.php';
?>
<?php include 'sidebar.php';?>
<div class="primary-content wide">
<div class="card-2 post">
	<?php include 'includes/edit-post.php';?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" />
	<div class="card-padding remove-padding-bottom clearfix">
		<header>
			<fieldset class="form-group">
				<div class="col-md col-md-12">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">@Subject</span>
						<input name="forum-title" type="text" class="form-control" placeholder="Subject" value="<?=($qr["title"]);?>" aria-describedby="basic-addon1">
					</div>
				</div>
			</fieldset>
		</header>
		<div class="excerpt">
			<div class="form-group">
				<div class="col-md col-md-12">
				  <div class="form-group">
				  <label for="exampleInputEmail1">Topics Feeds</label>
					<textarea name="text-feeds" class="form-control" placeholder="Details"  rows="5"><?=($qr["details_index"]);?></textarea>
					 </div>
				</div>
				</div>
		</div>
		<div class="excerpt">
			<div class="form-group">
				<div class="col-md col-md-12">
				  <div class="form-group">
				  <label for="exampleInputEmail1">Details All</label>
					<textarea name="text-details" class="form-control" placeholder="Details"  rows="10"><?=($qr["details"]);?></textarea>
					 </div>
					 <div class="form-group">
						<button name="edit-post" type="submit" class="btn btn-primary">Save</button> <button name="delete" type="submit" class="btn btn-danger">Delete</button>
					</div>
				</div>
				</div>
		</div>
	</div><!--end:.card-padding-->
</form>
</div>
<!--end:.card.post-->
</div>
</section>
<?php include 'content/themes/footer.php';?>