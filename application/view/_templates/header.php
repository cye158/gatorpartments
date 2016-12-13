<!DOCTYPE html>
<html lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Gatorpartments</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link id="switch_style" href="<?php echo URL;?>css/real_estate.css" rel="stylesheet">
	<link  href="<?php echo URL;?>css/search-result.css" rel="stylesheet">
	<link href="<?php echo URL;?>css/theme.css" rel="stylesheet">
	<link href="<?php echo URL;?>css/gator.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo URL;?>js/global.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>js/maps.js"></script>

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	<div class="container" style="padding-left: 17px; padding-right: 16px;">
		<div class="row">

			<!-- start header -->
			<div class="row">
				<div class="col-sm-4 col-xs-6 logo">
					<a href="<?php echo URL;?>home/index">
						<div class="row">
							<div class="col-sm-3 hidden-xs logo-img">
								<img src="<?php echo URL;?>css/images/Home-green-48.png" alt="">

							</div>
							<div class="col-sm-9 logo-text">
								<h1><small>Team 4</small><br>Gatorpartments</h1>
							</div>
						</div>
					</a>
				</div>

				<!-- Customer Service -->
				<div class="col-sm-4 col-xs-6 customer_service pull-right text-right">
					<h4 class="phone"><span>Hensil Hall 206 CSC 648.01</span></h4>
					<h4><small>M: 5:35PM - 8:25PM; T-Su: Closed</small></h4>
				</div>
				<!-- /Customer Service -->

			</div>
			<!-- end header -->

			<!-- start nav -->
			<div class="row">
				<div class="col-sm-12" style="">

					<nav class="navbar navbar-inverse" role="navigation">
						<div class="navbar-inner">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand visible-xs" href="#">Menu</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="navbar-collapse navbar-ex1-collapse collapse" style="height: 1px;">

								<ul class="nav navbar-nav center">

									<!-- Inbox button -->
									<li><a id="navbar-btn" href="<?php echo URL;?>home/messaging" class="first">Inbox</a></li>
									<!-- /Inbox button -->

									<!-- Post a Listing -->
									<li><a id="navbar-btn" href="<?php echo URL;?>user/checkLoginStatus">Post</a></li>
									<!-- /Post a Listing -->

									<!-- Search -->
									<li>
									<a class="visible-xs search">
										<form name="searchbox" method="post" action="<?php echo URL;?>home/listings">
											<input class="search-input-v" type="search" name="searchBarInput" textarea="" placeholder="Enter location (eg. 94132, or 19th Avenue)" size="45" maxlength="50">
											<input class="search-btn-v" value="Search" name="submitSearch" type="submit">
										</form>
									</a>

									<a class="hidden-xs search" style="margin-top: 0.325em;"">
										<form name="searchbox" method="post" action="<?php echo URL;?>home/listings">
											<input class="search-input-h" type="search" name="searchBarInput" textarea="" placeholder="Enter location (eg. 94132, or 19th Avenue)" size="48" maxlength="50">
											<input class="search-btn-h" type="submit" value="Search" name="submitSearch" >
										</form>
									</a>
								</li>
									<!-- /Search -->

								</ul>


								<ul class="nav navbar-nav navbar-right center">

									<!-- Login -->
									<li><a id="navbar-btn" href="<?php echo URL . 'user/login';?>">Log in</a></li>
									<!-- /Login -->

									<!-- Register -->
									<li><a id="navbar-btn" href="<?php echo URL . 'user/register';?>">Register</a></li>
									<!-- /Register -->

								</ul>

							</div>
							<!-- /.navbar-collapse -->
						</div>
					</nav>

				</div>
			</div>
