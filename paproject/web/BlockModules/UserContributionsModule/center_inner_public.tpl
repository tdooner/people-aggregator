<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<link href="/Themes/Default/jquery-ui-1.8.5.custom.css" type="text/css" media="screen" rel="stylesheet" />
<script src="/Themes/Default/javascript/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		$("#tabs-contributions").tabs();
	});
</script>
<style type="text/css">
div.participation {
	background-color:#FFF;
	margin-bottom:10px;
	padding:4px;
}
div.participation img {
	float:left;
	margin:0 13px 5px;
}
div.participation h2 {
	text-decoration:underline;
}
div.participation div.below {
	clear:both;
	padding:5px;
}
</style>
<?php global  $login_uid;?>

<div id="tabs-contributions">
	<ul>
		<li><a href="#tabs-contributions-1">Contributions</a></li>
		<li><a href="#tabs-contributions-2">Thoughts</a></li>
	</ul>
<?php if(count($contributions) > 0){ ?>	
	<div id="tabs-contributions-1">
	<?php foreach($contributions  as $contribution){ ?>
		<div class="participation">
			<div class="above">
				<?php if(isset($contribution['parent_image'])){ 
					$width = 100;
					$height = 100;
					if(isset($contribution['parent_image_width']) && is_Numeric($contribution['parent_image_width'])){
						$width = $contribution['parent_image_width'];
					}
					if(isset($contribution['parent_image_height']) && is_Numeric($contribution['parent_image_height'])){
						$height = $contribution['parent_image_height'];
					}
				?>
					<img src="<?php echo $contribution['parent_image']; ?>" alt="contribution image" style="width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;"/>
				<?php } ?>
				<h2><a href="<?php echo $contribution['parent_url'] ?>" title="View"><?php echo $contribution['parent_title']; ?></a></h2>
				<p><?php echo $contribution['comment']; ?></p>
			</div>
			<div class="below">
				<a href="#"><?php echo $contribution['participant_count']; ?> Participants</a> | <a href="#"><?php echo $contribution['contribution_count']; ?> Contributions</a>
			</div>
		</div>
	<?php } // end foreach ?>
		<div class="tab-links">
			<a href="<?php echo CC_APPLICATION_URL . CC_ROUTE_CONTRIBUTIONS; ?>">View All</a>
		</div>
	</div>
<?php } // end if ?>	
<?php if(count($thoughts) > 0){ ?>	
	<div id="tabs-contributions-2">
	<?php foreach($thoughts  as $thought){ ?>
		<div class="participation">
			<div class="above">
				<?php if(isset($thought['image'])){ ?>
					<img src="<?php echo $thought['image']; ?>" alt="thought image" style="width:100px;height:100px;" />
				<?php } ?>
				<h2><a href="#"><?php echo $thought['title']; ?></a></h2>
				<p><?php echo $thought['summary']; ?></p>
			</div>
			<div class="below">
				<a href="#"> thoughts</a>
			</div>
		</div>
	<?php } // end foreach ?>
		<div class="tab-links">
			<a href="<?php echo CC_APPLICATION_URL . CC_ROUTE_THOUGHTS; ?>">View All</a>
		</div>
	</div>
  </div>
<?php } // end if ?>	