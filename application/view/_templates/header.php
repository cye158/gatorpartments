<!DOCTYPE html>
<html lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Real estate - Bootstrap</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<link id="switch_style" href="<?php echo URL;?>css/real_estate.css" rel="stylesheet">
	<link href="<?php echo URL;?>css/theme.css" rel="stylesheet">
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
        <h4 class="phone"><span class="hidden-xs">Customer service: </span>0800 8475 548</h4>
        <h4><small>24 hours a day, 7 days a week</small></h4>
      </div>
    </div><!-- end header -->

    <div class="row"><!-- start nav -->
      <div class="col-sm-12">

        <nav class="navbar navbar-inverse" role="navigation" >
          <div class="navbar-inner">
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

						<!-- Logo/Home button -->
						<li><a href="<?php echo URL;?>home/index" class="first">LOGO</a></li>

						<!-- Post a Listing -->
						<li><a href="<?php echo URL;?>home/listing_form">Post</a></li>

						<!-- Search bar -->
						<li>
							<a>
								<form name="searchbox" method="post" action="<?php echo URL;?>home/index">
									<input type="search" name="searchBarInput"  textarea placeholder="Search by Location of or Point of Interest" size="50" maxlength="600px" style="color: black;"/>
									<input type="submit" name="submitSearch" style="color: black;" value="Search">
								</form>
							</a>
						</li>
            <li></li>
          </ul>

                      <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign Up<strong class="caret"></strong></a>
                    <div class="dropdown-menu">
                      <form action="<?php echo URL;?>user/register" method="post">
			<input type="text" name="username" placeholder="Username" size="30" />
                        <input type="text" name="name" placeholder="Full name" size="30" />
                        <input type="text" name="email" placeholder="Email" size="30" />
                        <input type="password" name="password" placeholder="Password" size="30" />

                        <input class="btn btn-primary" type="submit" name="commit" value="Sign Up" />
                      </form>
                    </div>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                    <div class="dropdown-menu">
                      <form action="<?php echo URL;?>user/authenticateLogin" method="post">
                        <input type="text" name="username" placeholder="Username or email" size="30" /><br class="visible-xs"/>
                        <input type="password" name="password" placeholder="Password" size="30" /><br class="visible-xs"/>
                        <input id="remember_me" type="checkbox" name="remember_me" value="1" />
                        <label class="string optional"> Remember me</label>

                        <input class="btn btn-primary" type="submit" name="commit" value="Sign In" />
                      </form>
                    </div>
                  </li>

                </ul>

          </div><!-- /.navbar-collapse -->
        </div>
        </nav>

      </div>
    </div>
