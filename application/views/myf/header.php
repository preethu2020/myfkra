<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Myfkra</title>

    <link href="<?php echo base_url();?>myassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>myassets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>myassets/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>myassets/css/lightbox.css" rel="stylesheet"> 
	<link href="<?php echo base_url();?>myassets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>myassets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>myassets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>myassets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>myassets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>myassets/images/ico/apple-touch-icon-57-precomposed.png">
   
	<script type="text/javascript" src="<?php echo base_url();?>myassets/js/jssor.slider.min.js"></script>
	
	<link href='<?php echo base_url();?>myassets/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url();?>myassets/css/fullcalendar.print.css' rel='stylesheet' media='print' />

<script src='<?php echo base_url();?>myassets/js/moment.min.js'></script>
<script src='<?php echo base_url();?>myassets/js/jquery.min.js'></script>
<script src='<?php echo base_url();?>myassets/js/fullcalendar.min.js'></script>
<script src='<?php echo base_url();?>myassets/js/gcal.js'></script>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
</head><!--/head-->
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").delay(600 ).fadeOut("slow");;
	});
	</script>
<body>
<?php /*?><?php include("particle.php"); ?><?php */?>
<style>
.se-pre-con {
    position: fixed;
    z-index: 9999999;
	background-color:#fff;
}
audio {
    position: fixed;
    opacity: .1;
    z-index: 9;
}
</style>

<div class="se-pre-con" style="overflow: hidden;height: 100%;width: 100%;">
<?php include("loader.php"); ?>
</div>
<?php include("pagestyle.php"); ?>


	<header id="header" class="wow bounceInDown"  data-wow-duration="900ms" data-wow-delay="1200ms">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://www.facebook.com/MY-Fkra-1454003488161070"><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/myfkra"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" data-wow-duration="900ms" data-wow-delay="300ms" href="<?php echo base_url();?>Home">
                    	<h1 class="" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="5s"  ><img class="img-responsive" width="100%" src="<?php echo base_url();?>myassets/images/logo01.gif" alt="logo"></h1>
                    </a>
                    
                </div>
                
				<div class="collapse navbar-collapse ">
                    <ul class=" nav navbar-nav navbar-right ">
                   
                        <li <?php if ($page == 'home') { echo ' class="active"';} ?>><a href="<?php echo base_url();?>Home">Home</a></li>
						<li <?php if ($page == 'about') { echo ' class="active"';} ?>><a href="<?php echo base_url();?>About">About</a></li>
						<li <?php if ($page == 'women') { echo ' class="active"';} ?>><a href="<?php echo base_url();?>SecretsOfSuccess" >Secrets of Success Stories</a></li>
						<li<?php if ($page == 'art') { echo ' class="active"';} ?>><a href="<?php echo base_url();?>Visionary">Visionary Artists  </a></li>
						<li<?php if ($page == 'blog') { echo ' class="active"';} ?>><a href="<?php echo base_url();?>Blog">Blog</a></li>
					
						<li <?php if ($page == 'creative') { echo ' class="active"';} ?>>
						<a href="<?php echo site_url();?>Creative" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inspiring Creations<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo site_url();?>Creative">Creativity Shelves</a></li>
						<li><a href="<?php echo site_url();?>Strike">Strike a deal</a></li>
						</ul>
						</li>
						<li <?php if ($page == 'gallery') { echo ' class="active"';} ?>><a href="<?php echo site_url();?>Gallery">Here & There</a></li>
						<!-- <li <?php if ($page == 'contact') { echo ' class="active"';} ?>><a href="<?php echo site_url();?>Contact">Contact Us</a></li>  -->      
                    </ul>
                </div>
				
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </header>
<!--/#header-->