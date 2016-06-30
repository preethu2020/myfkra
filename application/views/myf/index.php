<?php  $page= 'home'; ?>
<?php include('header.php'); ?>

<link href='<?php echo base_url();?>json/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url();?>json/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url();?>json/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>json/lib/jquery.min.js'></script>
<script src='<?php echo base_url();?>json/fullcalendar.min.js'></script>
<script>

  $(document).ready(function() {
  
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      //defaultDate: '2016-05-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: {
        url: 'http://aloremedia.com/staging/myfcms/home/calFeed',
        error: function() {
          $('#script-warning').show();
        }
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });
    
  });

</script>

 

<style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('<?php echo base_url();?>myassets/img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('<?php echo base_url();?>myassets/img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
<style>

	
		
	#loading {
		display: none;
		position: absolute;
		top: 10px;
		right: 10px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</header>
<!--/#header-->

<section id="home-slider">
 <?php include("slider.php"); ?>

 <div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
<?php $temp = 0; foreach($banners as $banner)  { ?>
    <div class="slide slide-<?php echo $temp; ?> <?php if($temp == 0) { echo "active";}?> ">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading"><?php echo $banner->heading;?></h2>
          <span class="slide__text-desc"><?php echo $banner->desc;?></span>
          <a class="slide__text-link" href="<?php echo $banner->link;?>">LEARN MORE</a>
          <?php $temp++;?>
        </div>
      </div>
    </div>
<?php } ?>
  </div>
</div>


<?php $temp = 0; foreach($banners as $banner)  {  $temp++;
  if($temp == 1) { ?> 

<style>
.slide:nth-child(1) {
  left: 0;
}
.slide:nth-child(1) .slide__bg {
  left: 0;
  background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(1) .slide__overlay-path {
  fill: #C0C0C0;
}
@media (max-width: 991px) {
  .slide:nth-child(1) .slide__text {
    background-color: #C0C0C0;
  }
}


  
<?php  } 

 if($temp == 2) { ?> 

/*slide2*/
.slide:nth-child(2) {
  left: 100%;
}
.slide:nth-child(2) .slide__bg {
  left: -50%;
  background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(2) .slide__overlay-path {
  fill: #C0C0C0;
}
@media (max-width: 991px) {
  .slide:nth-child(2) .slide__text {
    background-color: #C0C0C0;
  }
}
<?php  } 

 if($temp == 3) { ?> 
/*slide3*/
.slide:nth-child(3) {
  left: 200%;
}
.slide:nth-child(3) .slide__bg {
  left: -100%;
  background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(3) .slide__overlay-path {
  fill: #C0C0C0;
}
@media (max-width: 991px) {
  .slide:nth-child(3) .slide__text {
    background-color: #C0C0C0;
  }
}
<?php  } 

 if($temp == 4) { ?> 
/*slide4*/
.slide:nth-child(4) {
  left: 300%;
}
.slide:nth-child(4) .slide__bg {
  left: -150%;
 background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(4) .slide__overlay-path {
  fill: #C0C0C0;
}

@media (max-width: 991px) {
  .slide:nth-child(4) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}

<?php  } 

 if($temp == 5) { ?> 

/*slide5*/
.slide:nth-child(5) {
  left: 400%;
}
.slide:nth-child(5) .slide__bg {
  left: -200%;
   background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(5) .slide__overlay-path {
  fill: #C0C0C0;
}

@media (max-width: 991px) {
  .slide:nth-child(5) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}

<?php  } 

 if($temp == 6) { ?> 
/*slide6*/
.slide:nth-child(6) {
  left: 500%;
}
.slide:nth-child(6) .slide__bg {
  left: -250%;
  background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(6) .slide__overlay-path {
  fill: #C0C0C0;
}

@media (max-width: 991px) {
  .slide:nth-child(6) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}

<?php  } 

 if($temp == 7) { ?> 

/*slide7*/
.slide:nth-child(7) {
  left: 600%;
}
.slide:nth-child(7) .slide__bg {
  left: -300%;
  background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(7) .slide__overlay-path {
  fill: #C0C0C0;
}

@media (max-width: 991px) {
  .slide:nth-child(7) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}

<?php  } 

 if($temp == 8) { ?> 

/*slide8*/
.slide:nth-child(8) {
  left: 700%;
}
.slide:nth-child(8) .slide__bg {
  left: -350%;
  background-image: url("<?php echo base_url();?>uploads/banner/<?php echo $banner->bannerimg; ?>");
}
.slide:nth-child(8) .slide__overlay-path {
  fill: #C0C0C0;
}

@media (max-width: 991px) {
  .slide:nth-child(8) .slide__text {
    background-color: rgba(203, 198, 195, 0.8);
  }
}
<?php } } ?>

</style>    
</section>

<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->


<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="800ms">
        <div class="single-service">
          <div class="wow bounceInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms"> <img src="<?php echo base_url();?>myassets/images/home/icon1.png" alt=""> </div>
          <h2>Creativity</h2>
          <p>Bringing creative ideas into reality.</p>
        </div>
      </div>
      <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="1000ms">
        <div class="single-service">
          <div class="wow bounceInDown animated" data-wow-duration="1000ms" data-wow-delay="1500ms"> <img src="<?php echo base_url();?>myassets/images/home/icon2.png" alt=""> </div>
          <h2>Women</h2>
          <p>Spread Your Wings</p>
        </div>
      </div>
      <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="1300ms">
        <div class="single-service">
          <div class="wow bounceInRight" data-wow-duration="1000ms" data-wow-delay="1000ms"> <img src="<?php echo base_url();?>myassets/images/home/icon3.png" alt=""> </div>
          <h2>Arab World </h2>
          <p>Catering to the women of the Arab World</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#services-->

<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->



<section >
  <div class="container">
    <div class="row sponser">
      <div class="slide">
        <object type="image/svg+xml" data="<?php echo base_url();?>myassets/images/home/sponsersbanner.svg" width="100%" height="100%">
        </object>
      </div>
      <div class="slide">
        <object type="image/svg+xml" data="<?php echo base_url();?>myassets/images/home/sponsersbanner.svg" width="100%" height="100%">
        </object>
      </div>
      <div class="slide">
        <object type="image/svg+xml" data="<?php echo base_url();?>myassets/images/home/sponsersbanner.svg" width="100%" height="100%">
        </object>
      </div>
    </div>
  </div>
</section>

<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->


<section>
  <div class="container">
    <div class="row">
    <style>
	.quick-content {
  list-style-type: none;
}

.quick-content h3 {
  font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
  margin-top:0;
}

.quick-content li img {
  float: left;
  margin: 0 15px 0 0;
}

.quick-content li p {
  font: 200 12px/1.5 Georgia, Times New Roman, serif;
}

.quick-content li {
  padding: 10px;
  overflow: auto;
}

.quick-content li:hover {
  background: #eee;
  cursor: pointer;
}
	</style>
      <div class="col-md-6">
        <ul class="quick-content">
         <li>
      <img src="<?php echo base_url();?>myassets/icons/about.png" >
      <h3>About</h3>
      <p>A description of what “MyFkra” is all about, who is behind it, and who are the dynamos that contribute to it.</p>
    </li>
      
    <li>
      <img src="<?php echo base_url();?>myassets/icons/creativity.png" >
      <h3>Secrets of Success Stories</h3>
      <p>In this section, there will be an interview with a creative woman every 15 days, telling us about her talent, mission & vision. Moreover, there will be a monthly interview with an ‘achiever’ woman that influenced the society and left her footprint in a special/ creative way. The featured woman would act as a role model which other women strive to reach a similar level of achievement.</p>
    </li>

    <li>
      <img src="<?php echo base_url();?>myassets/icons/artist.png" >
      <h3>Visionary Artists</h3>
      <p>Here, MyFkra will feature an artist each month which will display her art, a description of her current & upcoming work, and a reportage about the creative work. Topics covered: art, design, music, and photography.</p>
    </li>

   
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="quick-content">
         
    <li>
      <img src="<?php echo base_url();?>myassets/icons/blog.png" >
      <h3>MyFkra Blog</h3>
      <p>In the Blog, MyFkra dynamos will be sharing their thoughts, and current work. You will find: 1) Doctors who will provide weekly tips, 2) Fashion Consultants that will give a weekly tip related to fashion and shopping, 3) Writers and Journalists who will talk about issues concerning motherhood and how to deal with children, and 4) Various weekly news articles about women related matters such as events, products, etc.</p>
    </li>
    <li>
      <img src="<?php echo base_url();?>myassets/icons/vishnaryart.png" >
      <h3>Inspiring Creations</h3>
      <p>A platform to display the unique artistic creations of Arab ladies every month. Moreover, one will soon be able to strike a deal by purchasing the lovely creations. </p>
    </li>
    <li>
      <img src="<?php echo base_url();?>myassets/icons/here.png" >
      <h3>Here and There</h3>
      <p>See the latest women-related activities and events happening in the region. View photos and reportages of events that support women.</p>
    </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->



<!--/#features-->

<section id="clients">
  <div class="container">
    <div class="row" style="background-image:url(<?php echo base_url();?>myassets/images/home/calenderside.png); background-size:contain; background-repeat:no-repeat; background-position:center">
      <div class="col-sm-12">
        <div class="clients text-center wow bounceInRight" data-wow-duration="800ms" data-wow-delay="1200ms">
          <h1 class="title">What's On?</h1>
          <p>If you want more details about any of the above, drop us a message</p>
          <div id="calendar" class="fc-calendar-container"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>


<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->


<?php include('footer.php'); ?>