<?php
/*
 * Title:		Promotional Website
 * Author:		Steven Roomberg
 * Description:	This is a promo website I've developed for my CS1520 course at the Univ of Pittsburgh.
 * */
?>

<!DOCTYPE html>
<html>
	<head>
	  <title>Steven Roomberg</title>
	  <!--Custom css--><link rel="stylesheet" type="text/css" href="style/style.css">
	  <!--Bootstrap--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body> <!--Two column, one-page scroll website -->
		<div class="container-fluid">
			<div class="row">
				<!--Navigation section | Pinned to left side of page as user scrolls-->
				<div class="col-md-4 navigation">
					<ul>
						<li><a href="#top">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#resume">Resume</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
				<!--Information section | Will be a full-page scroll-->
				<div class="col-md-8 info">
					<div class="row" name="top">
						<h1>Steven Emanuel Roomberg</h1>
						<h2>Software Engineer</h2>
						<img src="" /><!--Here is where a picture of me will go-->
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb. </p>
						<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
					</div>
					<div class="row" name="about">
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<div class="row" name="resume">
						<div class="row">
							<h2>Education</h2>
							<div class="col-md-8">
								<h3>University of Pittsburgh</h3>
								<h4>Bachelors of Science, Computer Science</h4>
							</div>
							<div class="col-md-4">
								<h4>Class of 2017</h4>
							</div>
						</div>
						<div class="row">
							<h2>Professional Experience</h2>
							<!--Some work experience-->
						</div>
					</div>
					<div class="row" name="contact">
						<!--Contact form-->
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row" id="footer"></div>
		</div>
	</body>
	<!--Custom js--><script type="text/javascript" src="script/script.js"></script>
	<!--Bootstrap--><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--JQuery--><script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</html>
