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

		<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
	</head>
	<body class="home">
		<div id="page" class="hfeed site">
			<div class="page-decoration">
				<header id="masthead" class="site-header" role="banner">
					<div class="container_12">
						<div class="grid_6 branding">
							<div id="logo" class="logo fleft">
								<img width="60" height="60" alt="Logo" src="<?php echo base_url();?>images/UR-Brown Icon.png">
							</div>
							<div class="fleft">
								<h1 id="site-title">
									<?php echo anchor('home/index', 'Urban Race'); ?>
								</h1>
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
						</div>
						<div class="clear"></div>
					</div>
					<div class="main-menu-section">
						<div class="container_12">
							<nav class="site-navigation main-navigation" role="navigation">
								<ul class="menu">
									<li>
										<?php echo anchor('home/index', 'Learn More'); ?>
										<ul class="sub-menu">
											<li class="menu-item">
												<?php echo anchor('whatIsUrbanRace/index', 'What is Urban Race?'); ?>
											</li>
											<li class="menu-item">
												<?php echo anchor('obstacles/index', 'Obstacles'); ?>
											</li>
											<li class="menu-item">
												<?php echo anchor('press/index', 'Press'); ?>
											</li>
											<li class="menu-item">
												<?php echo anchor('tvCoverage/index', 'Television Coverage'); ?>
											</li>
										</ul>
									</li>
									<li>
										<?php echo anchor('urbanRace2014/index', 'Urban Race Events'); ?>
										<ul class="sub-menu">
											<li class="menu-item">
												<?php echo anchor('urbanRace2014/index', 'Urban Race 2014'); ?>
											</li>
										</ul>
									</li>
									<li>
										<?php echo anchor('registration/index', 'Register'); ?>
									</li>
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
							<li><?php echo anchor('home/index', 'Learn More'); ?></li>
							<li><?php echo anchor('urbanRace2014/index', 'Urban Race Events'); ?></li>
							<li><?php echo anchor('registration/index', 'Register'); ?></li>
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