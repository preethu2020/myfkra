<!DOCTYPE HTML>
<html>
    <head>
    <title>Contact | Day Date</title>
    <link href="<?php echo base_url();?>ddassets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>ddassets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="<?php echo base_url();?>ddassets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>ddassets/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>ddassets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--  jquery plguin -->
    <script type="text/javascript" src="<?php echo base_url();?>ddassets/js/jquery.min.js"></script>
    <!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url();?>ddassets/css/fwslider.css" media="all">
    <script src="<?php echo base_url();?>ddassets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>ddassets/js/css3-mediaqueries.js"></script>
    <script src="<?php echo base_url();?>ddassets/js/fwslider.js"></script>
    <!--end slider -->
    <script type="text/javascript">
      $(document).ready(function() {
      
        var defaults = {
            containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear' 
        };
        
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
        
         $(".social-img").click(function(){
        $("#brands").toggle();
    });
      });
    </script>
    <!-- start testimonials -->
    <!-- da-slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>ddassets/css/slider.css" />
    <script type="text/javascript" src="<?php echo base_url();?>ddassets/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>ddassets/js/jquery.cslider.js"></script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay : true,
          bgincrement : 450
        });

      });
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider1').cslider({
          autoplay : true,
          bgincrement : 450
        });

      });
    </script>
    </head>
    <body>
<!-- start header -->
<div class="header_bg"> 
          <!-- start header -->
          <div class="header_bg"> 
    <!-----start-conatiner---->
    <div class="container"> 
              <!-----start-header---->
              <div class="header"> 
        <!----start-top-nav---->
        <header id="topnav">
                   <nav>
              <ul>
                      <li ><a href="<?php echo site_url();?>Home">Home</a></li>
                      <li><a href="<?php echo site_url();?>About" >About</a></li>
                       <li><a href="<?php echo site_url();?>Watches">Watches</a></li>
                      <li><a href="<?php echo site_url();?>Accessories">Accessories</a></li>
                       <li><a href="<?php echo site_url();?>Retail" >Retail</a></li>
                      <li class="active"><a href="<?php echo site_url();?>Contact">Contact</a></li>
                      <div class="clearfix"> </div>
                    </ul>
          </nav>
                  <h1><a href="<?php echo site_url();?>Home"><img src="<?php echo base_url();?>ddassets/images/logo.png" alt=""/></a></h1>
                  <a href="#" id="navbtn">Nav Menu</a>
                  <div class="clearfix"> </div>
                </header>
        <!----start-top-nav----> 
      </div>
              <!-----start-header----> 
            </div>
  </div>
          <script type="text/javascript"  src="<?php echo base_url();?>ddassets/js/menu.js"></script> 
        </div>
<!----start-images-slider---->
<div class="images-slider"> 
          <!-- start slider -->
        
          <div id="fwslider">
    <div class="slider_container">

      <?php if($slider) { foreach ($slider as $banner) { ?>
              <div class="slide"> 
        <!-- Slide image --> 
        <img src="<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimage;?>" alt=""/> 
        <!-- /Slide image --> 
        <!-- Texts container -->
        <div class="slide_content">
                  <div class="slide_content_wrap"> 
            <!-- Text title -->
            <h4 class="title"><?php echo $banner->heading; ?></h4>
            <!-- /Text title --> 
            <!-- Text description -->
            <p class="description"><?php echo $banner->desc; ?></p>
            <!-- /Text description -->
            <p class="description"><a href="<?php echo "http://";echo $banner->url;?>">Read More</a></p>
            <div class="slide-btns description"> </div>
          </div>
                </div>
        <!-- /Texts container --> 
      </div>

      <?php }} ?>
             
              <!--/slide --> 
            </div>
    <div class="timers"> </div>
    <div class="slidePrev"><span> </span></div>
    <div class="slideNext"><span> </span></div>
  </div>
          <!--/slider --> 
        </div>
<!-- Sub menu -->
<div class="sub" id="social">
          <div class="container">
    <div class="row">
              <div class="col-md-12"> 
              <img class="social-img" src="<?php echo site_url();?>ddassets/images/sub-menu.jpg" alt="sub-menu-btn"/>
        <div class="social-text">BROWSE BY BRANDS | OFFICIAL AGENT OF</div>
        <a href="https://www.facebook.com/Day-Date-LLC-494728977372407/" target="blank"><img class="social-icons" src="<?php echo  site_url();?>ddassets/images/fb.jpg" alt="sub-fb-social-btn"/></a> 
<a href="https://www.instagram.com/day.date/" target="blank">        <img class="social-icons" src="<?php echo site_url();?>ddassets/images/insta.jpg" alt="sub-insta-social-btn"/> </a></div>
            </div>
  </div>
        </div>
<div class="sub" id="brands" style="display:none;">
          <div class="container">
    <div class="row">
              <div class="col-md-12"><p>
              <?php if($brands) { foreach ($brands as $brand) { ?>
        <a href="<?php echo base_url();?>Watches/getWatchByBrand/<?php echo $brand->brandname;?>">
        <img src="<?php echo base_url(); ?>uploads/brand/<?php echo $brand->brandlogo;?>" alt="<?php echo $brand->brandname;?>"/></a>

<?php } } ?>
        </p>
      </div>
      <div class="col-md-12">
        <p><a href="<?php echo site_url();?>Watches/getMaleWatch"><img src="<?php echo base_url();?>ddassets/images/men.png" alt="men" width="80px"/></a>
        <a href="<?php echo site_url();?>Watches/getFemaleWatch"><img src="<?php echo base_url();?>ddassets/images/woman.png" alt="woman"  width="80px"/></a></p>
      </div>
            </div>
  </div>
        </div>

<!---start-contact---->
<div class="contact s4" id="contact">
	<div class="container">
		<h3>CONTACT</h3>
        <span> </span>
		<div class="row">
			<div class="col-md-12">
           <p> Platinum Tower, JLT, Cluster I , Office 2108, 74564 Dubai, UAE<br/>
Phone: 04 4472018<br/>
email: <a href="mailto:info@daydatellc.com">info@daydatellc.com</a><br/>
<br/>
Or fill in the form below and we will get in contact with you.
				<form>
					<input type="text" class="textbox" name="name"  value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input type="text" class="textbox" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<textarea value="Message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<input type="submit" name="submit" value="Submit">
				</form></p>
			</div>
		</div>
	</div>
</div>

<div class="footer">
          <div class="container">
    <div class="row">
              <div class="col-md-12">
        <div class="col-md-6">
                  <div class="copy-right">
                   <p>© 2015-2016 Day Date L.L.C | All Rights Reserved<br/>
                       | Crafted by ALORE MEDIA</p>
          </div>
                </div>
        <div class="col-md-6">
                  <div class="social-left">
            <p><a href="https://www.facebook.com/Day-Date-LLC-494728977372407/" target="blank"><img src="<?php echo site_url();?>ddassets/images/fb-trans.png" alt=""/></a>
             <a href="https://www.instagram.com/day.date/" target="blank"><img src="<?php echo site_url();?>ddassets/images/insta-trans.png" alt=""/></p></a>
          </div>
                </div>
      </div>
            </div>
  </div>
        </div>
<!-- scroll_top_btn --> 
<script type="text/javascript" src="<?php echo base_url();?>ddassets/js/move-top.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>ddassets/js/easing.js"></script> 
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script> 
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>