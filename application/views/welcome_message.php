
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Find it</title>
	<meta name="Home page Find it" content="text/html">
	<meta neme="AFind it">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome = 1">
	<meta name="viewport" content="width=480, initial-scale=0.65, maximum-scale=0.65, user-scalable=no">
    <meta name="keywords" content="FindIt,web page, lost things, ITESM">
    <meta name="copyright" content= "Elpipiripao">
    <meta name="author" content="Luis Pablo Morales Cruz">
    <!-- Image icon for the web tab -->
    <?php echo link_tag('assets/images/findicon.ico', 'shortcut icon', 'image/ico'); ?>
    <!-- Import style sheets -->
    <style> @import url('assets/fancybox/jquery.fancybox-v=2.1.5.css');</style>
    <style> @import url('assets/css/font-awesome.min.css');</style>
	<style> @import url('assets/css/style.css');</style>
    <!--Import bootstrap-->
    <style> @import url('assets/css/bootstrap.min.css'); </style>
    <!--Import other things -->
    <style> @import url('http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext'); </style>
    <?php echo link_tag('assets/images/zoom.png', 'prefetch'); ?>
</head>


<body>
	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">
		
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-user"></span> <span class="text">ABOUT US</span></a></li>
					<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-briefcase"></span> <span class="text">PORTFOLIO</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-gears"></span> <span class="text">PROCESS</span></a></li>
					<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#slide-5" title="Next Section"><span class="icon icon-heart"></span> <span class="text">CLIENTS</span></a></li>
					<li data-slide="6" class="col-12 col-sm-2"><a id="menu-link-6" href="#slide-6" title="Next Section"><span class="icon icon-envelope"></span> <span class="text">CONTACT</span></a></li>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->
	
	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">EL PIPIRIPAO <span class="font-thin">COMPANY</span></h1>
					<h4 class="font-thin">We are an <span class="font-semibold">independent company trying to get the neglected people </span> recover their stuff.</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4"><?php echo img('assets/images/s02.png'); ?></div><span>PROFESSIONAL</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="3"><?php echo img('assets/images/s01.png'); ?></div><span>FRIENDLY</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5"><?php echo img('assets/images/s03.png'); ?></div><span>SUITABLE</span></div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Contrary to popular belief, <span class="font-semibold">Lorem Ipsum</span> is not simply random text.</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-12 font-thin">This is what <span class="font-semibold">we do best</span></div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-eye-open"></i></p>
					<h2 class="font-thin">Visual <span class="font-semibold">Identity</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Web <span class="font-semibold">Design</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Mobile <span class="font-semibold">Apps</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-semibold">Development</h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->
	
	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">See us <span class="font-semibold">at work</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-bolt"></i></p>
					<h2 class="font-thin">Listening to<br><span class="font-semibold" >your needs</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cog"></i></p>
					<h2 class="font-thin">Project<br><span class="font-semibold">discovery</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cloud"></i></p>
					<h2 class="font-thin">Storming<br><span class="font-semibold">our brains</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-map-marker"></i></p>
					<h2 class="font-thin">Getting<br><span class="font-semibold">there</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-gift"></i></p>
					<h2 class="font-thin">Delivering<br><span class="font-semibold">the product</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->
	
	<!-- === Slide 5 === -->
	<div class="slide story" id="slide-5" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Clients</span> we’ve worked with</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br/><br/> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2"><img src="images/client01.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client02.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client03.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client04.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client05.png" alt=""></div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide5 -->
	
	<!-- === Slide 6 / Contact === -->
	<div class="slide story" id="slide-6" data-slide="6">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light">Leave us a <span class="font-semibold">message</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">You can find us literally anywhere, just push a button and we’re there</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div id="contact-row-4" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-phone"></i></a></p>
					<span class="hover-text font-light ">+44 4839-4343</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-envelope"></i></a></p>
					<span class="hover-text font-light ">munter@blacktie.co</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-home"></i></a></p>
					<span class="hover-text font-light ">London, England<br>zip code 98443</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-facebook"></i></a></p>
					<span class="hover-text font-light ">facebook/blacktie_co</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-twitter"></i></a></p>
					<span class="hover-text font-light ">@BlackTie_co</span></a>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Slide 6 -->
</body>

	<!-- SCRIPTS -->
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="assets/js/script.js"></script>
	
	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>

</html>