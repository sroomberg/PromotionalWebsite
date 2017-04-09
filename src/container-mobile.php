<!-- I am including the style here so I don't have to call the js more than once. -->
<style type="text/css">
	<?php include($style_root . 'responsive.css'); ?>
</style>
<div class="container-fluid mobile-container">
	<div class="row">
		<ul class="nav nav-tabs">
			<li class="dropdown" role="presentation">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Menu <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<?php include('nav.php'); ?>
				</ul>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="info">
			<?php include('content.php'); ?>
		</div>
	</div>
</div>