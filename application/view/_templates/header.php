<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>gatorpartments</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- CSS Bootstrap -->


    <link href="<?php echo URL; ?>boostrap/css/boostrap.min.css" rel="stylesheet">

    <link id="switch_style" href="<?php echo URL; ?>css/real_estate" rel="stylesheet">
    <link href="<?php echo URL; ?>css/theme.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="css/style.css"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


  </head>

  <body>
    <div class="container">
    <div class="row"><!-- start header -->
      <div class="col-sm-4 col-xs-6 logo">
        <a href="<?php echo URL;?>home/index">
        <div class="row">
          <div class="col-sm-3 hidden-xs logo-img">
            <img src="<?php echo URL;?>css/images/Home-green-48.png" alt=""/>
          </div>
          <div class="col-sm-9 logo-text">
            <h1><small>Bootstrap</small><br /><span>Real</span> estate</h1>
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
            <li><a href="<?php echo URL;?>home/listings" class="first">For sale</a></li>
            <li><a href="<?php echo URL;?>home/map_properties">To rent</a></li>
            <li><a href="<?php echo URL;?>home/compare">New homes</a></li>
            <li><a href="<?php echo URL;?>home/property">Property of the day</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Property pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL;?>home/listings">Property listings</a></li>
                <li><a href="<?php echo URL;?>home/map_properties">Properties map</a></li>
                <li><a href="<?php echo URL;?>home/property">Single property</a></li>
                <li><a href="<?php echo URL;?>home/compare">Compare properties</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                                <li><a href="<?php echo URL;?>home/typography">Typography</a></li>
                                <li><a href="<?php echo URL;?>home/terms">Terms and conditions</a></li>
                                <li><a href="<?php echo URL;?>home/contact">Contact us</a></li>
                                <li><a href="<?php echo URL;?>home/about">About us</a></li>
              </ul>
            </li>
            </ul>

                      <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign Up<strong class="caret"></strong></a>
                    <div class="dropdown-menu">
                      <form action="<?php echo URL;?>home/index" method="post">
                        <input type="text" name="user[username]" placeholder="Full name" size="30" />
                        <input type="password" name="user[password]" placeholder="Email" size="30" />
                        <input type="password" name="user[password]" placeholder="Password" size="30" />

                        <input class="btn btn-primary" type="submit" name="commit" value="Sign Up" />
                      </form>
                    </div>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                    <div class="dropdown-menu">
                      <form action="<?php echo URL;?>home/index" method="post">
                        <input type="text" name="user[username]" placeholder="Username or email" size="30" /><br class="visible-xs"/>
                        <input type="password" name="user[password]" placeholder="Password" size="30" /><br class="visible-xs"/>
                        <input id="remember_me" type="checkbox" name="user[remember_me]" value="1" />
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
    </div><!-- end nav -->		
      <!-- from vertical prototype testing phase
      <header>
          <div class="logoContainer">
              <div class="container">
                <div class="logo">
                    <a class="logoText" href="index.php">Gatorparments</a>
                    <a class="logoLink pull-right" href="">Login</a>
                    <a class="logoLink pull-right" href="">Contact</a>
                </div>
              </div>
          </div>
      </header>
      -->
