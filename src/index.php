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
	</head>
	<body> <!--Two column, one-page scroll website -->
		<div class="container-fluid">
			<div class="row">
				<!--Navigation section | Pinned to left side of page as user scrolls-->
				<div class="col-md-4 navigation">
					<ul class="col-md-4 center-block text-center">
						<li><a class="page-scroll" href="#top">Home</a></li>
						<li><a class="page-scroll" href="#about">About</a></li>
						<li><a class="page-scroll" href="#education">Education</a></li>
						<li><a class="page-scroll" href="#resume">Resume</a></li>
						<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
						<li><a class="page-scroll" href="#contact">Contact</a></li>
					</ul>
					<div class="social-links">
						<!--Social Links-->
					</div>
				</div>
				<!--Information section | Will be a full-page scroll-->
				<div class="col-md-8 info">
					<a name="top"></a>
					<div class="row" name="top">
						<h1>Steven Emanuel Roomberg</h1>
						<h2>Software Engineer</h2>
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
						<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
						<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
						<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
						<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
						<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.  </p>
					</div>
					<!--These divs will be removed once content is added--><div class="separator"></div>
					<a name="about"></a>
					<div class="row" name="about">
						<h2>About Me</h2>
						<p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
						<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
						<p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. </p>
						<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
						<p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
						<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.  </p>
					</div>
					<!--These divs will be removed once content is added--><div class="separator"></div>
					<a name="education"></a>
					<div class="row" name="education">
						<h2>Education</h2>
						<div id="resumeItem">
							<div class="col-md-8">
								<h3>University of Pittsburgh</h3>
								<h4>Bachelors of Science, Computer Science</h4>
							</div>
							<div class="col-md-4">
								<h4>Class of 2017</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>

								<p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>

								<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
							</div>
						</div>
					</div>
						
					<!--These divs will be removed once content is added--><div class="separator"></div>
					<a name="resume"></a>
					<div class="row" name="resume">
						<h2>Professional Experience</h2>
						<div id="resumeItem"><!--HMHS-->
							<div class="col-md-8">
								<h3>Undergraduate Intern</h3>
								<h4>HM Health Solutions &#124; Pittsburgh, PA</h4>
							</div>
							<div class="col-md-4">
								<h4>May 2017 - August 2017</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<ul>
									<li>
										Contributed to the eBusiness team in a full-stack development role working primarily with consumer and provider healthcare portals;
									</li>
									<li>
										Wrote services specifically designed to advise customers on money-saving strategies in regards to their healthcare treatments;
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div><!--/HMHS-->
						<div id="resumeItem"><!--Send Off App-->
							<div class="col-md-8">
								<h3>Founder</h3>
								<h4>Send Off App &#124; Pittsburgh, PA</h4>
							</div>
							<div class="col-md-4">
								<h4>September 2015 - January 2016</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<ul>
									<li>Accepted into the University of Pittsburgh’s startup accelerator, <em>Blast Furnace</em>;</li>
									<li>Worked to develop a mobile app to streamline the professional networking process;</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div><!--/Send Off App-->
						<div id="resumeItem"><!--TPN-->
							<div class="col-md-8">
								<h3>Online Editor (Manager)</h3>
								<h4>The Pitt News &#124; Pittsburgh, PA</h4>
							</div>
							<div class="col-md-4">
								<h4>June 2015 - December 2015</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<ul>
									<li>Hired and managed a team of qualified developers and designers on a per-project basis;</li>
									<li>Cultivated a branded WordPress theme and overall website with a focus on mobile design;</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div><!--/TPN-->
						<div id="resumeItem"><!--Mahlet Consulting-->
							<div class="col-md-8">
								<h3>Embedded Software Engineering Intern</h3>
								<h4>Mahlet Consulting &#124; Columbia, MD</h4>
							</div>
							<div class="col-md-4">
								<h4>May 2015 - August 2015</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<ul>
									<li>Embedded C code on a FPGA board in conjunction with a RESTful API to analyze large (>40 gigabytes) data packets in real-time;</li>
									<li>Designed and implemented a relational SQL database in conjunction with a NodeJS server to effectively organize amassed data;</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div><!--/Mahlet Consulting-->
						<div id="resumeItem"><!--Conva-->
							<div class="col-md-8">
								<h3>Software Developer</h3>
								<h4>Conva &#124; Pittsburgh, PA</h4>
							</div>
							<div class="col-md-4">
								<h4>August 2014 - October 2014</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<ul>
									<li>Directed a team of developers tasked to improve the Conva SAAS platform to present to potential clients and investors;</li>
									<li>Worked with company executives to implement a plan for Conva’s product development progression;</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div><!--/Conva-->
						<div id="resumeItem"><!--CRAFT-->
							<div class="col-md-8">
								<h3>Digital Intern</h3>
								<h4>CRAFT &#124; Media/Digital &#124; Washington, D.C.</h4>
							</div>
							<div class="col-md-4">
								<h4>January 2014 - June 2014</h4>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<ul>
									<li>Developed and maintained client websites and landing pages;</li>
									<li>Designed a WordPress plugin to showcase digital works to prospective clients;</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div><!--/CRAFT-->
					</div>
					<!--These divs will be removed once content is added--><div class="separator"></div>
					<a name="portfolio"></a>
					<div class="row" name="portfolio">
						<h2>Portfolio</h2>
						<!--This content will be added later-->
						<em>This content will be added later</em>
					</div>
					<!--These divs will be removed once content is added--><div class="separator"></div>
					<a name="contact"></a>
					<div class="row" name="contact">
						<h2>Contact</h2>
						<form class="contact-form" name="contact-form" role="form" method="post" action="index.php#contact">
							<div class="form-item">
								<label for="name" class="col-md-3 control-label">Name<span class="warning">*</span></label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="" />
									<?php echo '<p class="warning">'.(isset($err_name) ? $err_name : '').'</p>'; ?>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-item">
								<label for="email" class="col-md-3 control-label">Email<span class="warning">*</span></label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="" />
									<?php echo '<p class="warning">'.(isset($err_email) ? $err_email : '').'</p>'; ?>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-item">
								<label for="subject" class="col-md-3 control-label">Subject<span class="warning">*</span></label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Email Subject" value="" />
									<?php echo '<p class="warning">'.(isset($err_subject) ? $err_subject : '').'</p>'; ?>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-item">
								<label for="message" class="col-md-3 control-label">Message</label>
								<div class="col-md-9">
									<textarea name="message" form="contact-form" rows="10" cols="50" placeholder="Say hi!"></textarea>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-item">
								<div class="col-md-4 col-md-offset-8">
									<input type="submit" name="submit" id="submit" value="Send" class="btn btn-primary" />
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-item">
								<div class="col-md-4 col-md-offset-8">
									<?php echo (isset($result) ? $result : ''); ?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row" id="footer"></div>
		</div>
	</body>
	<!--JQuery--><script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<!--Bootstrap--><script type="text/javascript" src="<?php echo $script_root; ?>bootstrap.min.js"></script>
	<!--Custom js--><script type="text/javascript" src="<?php echo $script_root; ?>script.js"></script>
	<!--Smooth Scroll js--><script type="text/javascript" src="<?php echo $script_root; ?>smooth-scroll.js"></script>
</html>
