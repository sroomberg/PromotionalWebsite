
<div class="container-fluid">
	<div class="row">
		<!--Navigation section | Pinned to left side of page as user scrolls-->
		<div class="col-md-4 navigation">
			<ul class="col-md-4 center-block text-center">
				<li>
					<div id=proPic>
						<img src="<?php echo $img_root; ?>ProfilePicture.jpg" rel="profile_picture" />
					</div>
				</li>
				<?php include('nav.php'); ?>
				<li>
					<div class="row center-block" id="socialLinks">
						<div class="col-md-4">
							<a href="mailto:stevenroomberg@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</div>
						<div class="col-md-4">
							<a href="https://www.linkedin.com/in/sroomberg/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
						<div class="col-md-4">
							<a href="https://github.com/sroomberg" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!--Information section | Will be a full-page scroll-->
		<div class="col-md-8 info">
			<?php include('content.php'); ?>
		</div>
	</div>
	<div class="clearfix"></div>
</div>