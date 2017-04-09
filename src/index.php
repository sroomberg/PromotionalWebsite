<?php
/*
 * Title:		Promotional Website
 * Author:		Steven Roomberg
 * Description:	This is a promo website I've developed for my CS1520 course at the Univ of Pittsburgh.
 * */

// project variables
$project_root = './';
$style_root = $project_root . 'style/';
$script_root = $project_root . '/script/';
$img_root = $project_root . 'img/';
$font_root = $style_root . 'fonts/';
$include_root = $project_root . 'inc/';

// include
include($include_root . 'contact.php');

?>

<!DOCTYPE html>
<html>
	<head>
	  <title>Steven Roomberg</title>
	  <!--Favicon--><link rel="icon" href="<?php echo $img_root; ?>favicon.ico" type="image/x-icon">
	  <!--Custom css--><link rel="stylesheet" type="text/css" href="<?php echo $style_root; ?>style.css">
	  <!--Bootstrap--><link rel="stylesheet" type="text/css" href="<?php echo $style_root; ?>bootstrap.min.css">
	  <!--Font Awesome--><link rel="stylesheet" type="text/css" href="<?php echo $font_root; ?>font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<script type="text/javascript">
			$(document).ready(function() {
				var width = $(window).width();
				if (width > 1024) {
					<?php include('container.php'); ?>
				}
				else {
					<?php include('container-mobile.php'); ?>
				}
			});
		</script>
	</body>
	<!--JQuery--><script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<!--Bootstrap--><script type="text/javascript" src="<?php echo $script_root; ?>bootstrap.min.js"></script>
	<!--Custom js--><script type="text/javascript" src="<?php echo $script_root; ?>script.js"></script>
	<!--Smooth Scroll js--><script type="text/javascript" src="<?php echo $script_root; ?>smooth-scroll.js"></script>
</html>
