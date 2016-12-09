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
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">


			<div class="row"><!-- start header -->
				<div class="col-sm-4 col-xs-6 logo">
					<a href="<?php echo URL;?>home/index">
						<div class="row">
							<div class="col-sm-3 hidden-xs logo-img">
								<img src="<?php echo URL;?>css/images/Home-green-48.png" alt=""/>

							</div>
							<div class="col-sm-9 logo-text">
								<h1><small>Team 4</small><br />Gatorpartments</h1>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4 col-xs-6 customer_service pull-right text-right">
					<h4 class="phone"><span class="hidden-xs">Hensil Hall 206 </span>CSC 648.01</h4>
					<h4><small>M: 5:35PM - 8:25PM		T-Su: Closed</small></h4>
				</div>
			</div><!-- end header -->

			<div class="row"><!-- start nav -->
				<div class="col-sm-12">

					<nav class="navbar navbar-inverse" role="navigation" style="border-radius: 5px;">
						<div class="navbar-inner" style="border-radius: 5px;">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand visible-xs" href="#">Menu</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">

									<!-- Inbox button -->
									<li><a href="<?php echo URL;?>home/messaging" class="first" style="padding-top: 0.85em; font-size: 1.25em;">Inbox</a></li>
									<!-- /Inbox button -->

									<!-- Post a Listing -->
									<li><a href="<?php echo URL;?>home/listing_form" style="padding-top: 0.85em; font-size: 1.25em;">Post</a></li>

									<!-- Search bar -->
									<li>
										<a>
											<form name="searchbox" method="post" action="<?php echo URL;?>home/listings" style="padding-left: 0.25em;">
												<input type="search" name="searchBarInput" textarea="" placeholder=" Search by location (eg. 94132, or Holloway Avenue)" size="60" maxlength="600px" style="border-radius: 7.5px;color: black; font-size: 1.25em;">
												<input type="submit" value="Search" name="submitSearch" style="background-color: green; border-radius: 7.5px; font-size: 1.25em;">
											</form>
										</a>
									</li>
									<li></li>
								</ul>

								<ul class="nav navbar-nav navbar-right">

									<li>
								          <a href="<?php echo URL . 'user/login';?>">Log in</a>
									</li>
									<li>
									  <a href="<?php echo URL . 'user/register';?>">Register</a>
									</li>

								</ul>

							</div><!-- /.navbar-collapse -->
						</div>
					</nav>

				</div>
			</div>
