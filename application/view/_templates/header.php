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

	<div class="container" style="height: 50em;">
		<div class="row">

			<!-- start header -->
			<div class="row" style="height: 4em;">
				<div class="col-sm-4 col-xs-6 logo" style="height: inherit;">
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
					<h4 class="phone"><span class="hidden-xs">Hensil Hall 206 </span>CSC 648.01</h4>
					<h4><small>M: 5:35PM - 8:25PM<br>T-Su: Closed</small></h4>
				</div>
				<!-- /Customer Service -->

			</div>
			<!-- end header -->

			<!-- start nav -->
			<div class="row">
				<div class="col-sm-12" style="height: 3em;">

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
							<div class="navbar-collapse navbar-ex1-collapse collapse">

								<ul class="nav navbar-nav center">

									<!-- Inbox button -->
									<li><a id="navbar-btn" href="<?php echo URL;?>home/messaging" class="first">Inbox</a></li>
									<!-- /Inbox button -->

									<!-- Post a Listing -->
									<li><a id="navbar-btn" href="<?php echo URL;?>user/checkLoginStatus">Post</a></li>
									<!-- /Post a Listing -->

									<!-- Search bar -->
									<li>
										<a style="height: 2.85em;border-right: 2.5px solid #444444;border-left: none;padding-left: 1em;padding-right: 1em;">
											<form name="searchbox" method="post" action="<?php echo URL;?>home/listings">
												<input type="search" name="searchBarInput" textarea="" placeholder="Enter location (eg. 94132, or 19th Avenue)" size="41" maxlength="37.5px" style="border-radius: 2px;color: black;font-size: 1.1em;padding-top: .225em;background-color: #dddddd;">
												<input type="submit" value="Search" name="submitSearch" style="color: #eee;background-color: #809262;border-radius: 2px;font-size: 1.125em;">
											</form>
										</a>
									</li>
									<!-- /Search -->

								</ul>


								<ul class="nav navbar-nav navbar-right" style="height: 2.75em;">

									<!-- Login -->
									<li><a href="<?php echo URL . 'user/login';?>">Log in</a></li>
									<!-- /Login -->

									<!-- Register -->
									<li><a href="<?php echo URL . 'user/register';?>">Register</a></li>
									<!-- /Register -->

								</ul>

							</div>
							<!-- /.navbar-collapse -->
						</div>
					</nav>

				</div>
			</div>
