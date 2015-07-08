<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" / >
		<title><?php echo $title; ?></title>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/datepicker/js/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/datepicker/css/datepicker.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styles.css">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fonts.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/flexslider.css">
	</head>
	<body class="home">
		<div id="page" class="hfeed site">
			<div class="page-decoration">
				<header id="masthead" class="site-header" role="banner">
					<div class="container_12">
						<div class="grid_6 branding">
							<div id="logo" class="logo fleft">
								<img width="60" height="60" alt="Logo" src="<?php echo base_url();?>images/logo.png">
							</div>
							<div class="fleft">
								<h1 id="site-title"><a href="index.html" title="FitnessLife" rel="home">Fitness Life</a></h1>
								<h2 id="site-description">Health and Fitness Center</h2>
							</div>
						</div>
						<div class="grid_6 no-m-t lang">
							<ul class="language-menu right">
								<li>
									<a href="" style="display:none;">EN</a>
								</li>
								<li>
									<a class="current" href="" style="display:none;">FR</a>
								</li>
							</ul>
							<div class="clear"></div>
							<div class="callus"><a href="tel:+1 (514) 000-000">Call Us: +1 (514) 000-000</a></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="main-menu-section">
						<div class="container_12">
							<nav class="site-navigation main-navigation" role="navigation">
								<ul class="menu">
									<li><a href="index.html" title="Home">Home</a></li>
									<li><a href="classes-list.html" title="Classes">Classes</a>
										<ul class="sub-menu">
											<li class="menu-item"><a href="classes-grid.html" title="Classes Grid">Classes Grid</a></li>
											<li class="menu-item"><a href="classes-single.html" title="Classes Single">Classes Single</a></li>
										</ul>
									</li>
									<li><a href="trainer-list.html" title="Trainers">Trainers</a>
										<ul class="sub-menu">
											<li class="menu-item"><a href="trainer-single.html" title="Trainer single">Trainers singe</a></li>
										</ul>
									</li>
									<li><a href="membership.html" title="Membership">Membership</a></li>
									<li><a href="news-list.html" title="News">News</a>
										<ul class="sub-menu">
											<li class="menu-item"><a href="news-grid.html" title="News Grid">News Grid</a></li>
											<li class="menu-item"><a href="news-single.html" title="Single News">Single News</a></li>
										</ul>
									</li>
									<li><a href="page-about-us.html" title="Pages">Pages</a>
										<ul class="sub-menu">
											<li class="menu-item"><a href="page-about-us.html" title="Single News">About Us</a></li>
											<li class="menu-item"><a href="page-full-width.html" title="News Grid">Page Full Width</a></li>
											<li class="menu-item"><a href="page-404.html" title="Single News">404 error Page</a></li>
											<li class="menu-item"><a href="https://wplook.com/theme/fitnesslife" title="Buy me">Buy Me</a></li>
										</ul>
									</li>
									<li><a href="page-contact-us.html" title="Contact">Contact</a></li>
									<li><a href="https://wplook.com/theme/fitnesslife/?utm_source=Menu-URL-HTML&amp;utm_medium=link&amp;utm_campaign=FitnessLife" title="Fitness WordPress Theme">WordPress Theme</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
				<?php $this->load->view($underHeader); ?>
			</div>
			<div class="container_12 clearfix">
				<?php $this->load->view($main); ?>
			</div>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="widget-area container_12" role="complementary">
				</div>
				<div class="container_12">
					<nav class="grid_12 no-m-b footer-navigation">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li><a href="classes-list.html" title="Classes">Classes</a></li>
							<li><a href="trainer-list.html" title="Trainers">Trainers</a></li>
							<li><a href="membership.html" title="Membership">Membership</a></li>
							<li><a href="news-grid.html" title="News">News</a></li>
							<li><a href="page-about-us.html" title="Services">Pages</a></li>
							<li><a href="page-contact-us.html" title="Contact">Contact</a></li><li><a href="https://wplook.com/theme/fitnesslife/?utm_source=Menu-URL-HTML&amp;utm_medium=link&amp;utm_campaign=FitnessLife" title="Fitness WordPress Theme">WordPress Theme</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="site-info">
					<div class="container_12">
					<div class="grid_6">
						<span class="theme-copyrights">Copyright &copy; 2013. All Rights reserved.</span>
					</div>
					<div class="clear"></div>
				</div>
				</div>
			</footer>
		</div>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/masonry.pkgd.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.meanmenu.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/base.js"></script>
	</body>
</html>