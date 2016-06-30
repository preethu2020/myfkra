<?php $page = 'blog'; ?>
<?php include('header.php'); ?>
		
		
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
    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog</h1>
                            <p>The latest and the greatest all right here!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
    
<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->



	<section id="team">
        
            
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Keep up to date with our blog! :D</h1>
               
             <div class="container">
            <div class="row">

			 <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 609px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo base_url();?>myassets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 609px; overflow: hidden;">


        <?php $count = 1; foreach ($blogs as $blog ) { if($count < 3 ) { $cont++;  ?> 
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url();?>uploads/blog/<?php echo $blog->mainimage;?>" />
				<div class="whitebg">
               <div class="small_slide_big"><?php echo $blog->title;?></div>
               </div>
				<div class="item">
      <img src="<?php echo base_url();?>myassets/images/home/02.png" alt="About Us Banner Myfkra">
	  <a href="<?php site_url();?>Blog/BlogDetail/<?php echo $blog->id;?>" class="btn btn-common overlaybtn">LEARN MORE</a>
    </div>
            </div>
            <?php } } ?>   
                
    
			<!-- 
			 <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url();?>myassets/images/artseg/banner2.jpg" />
				<div class="whitebg">
                <div class="small_slide_big">Blog Name</div>
                <div class="small_slide_small">Welcome to the world, where everything is made possible !!!</div></div>
				<div class="item">
      <img src="<?php echo base_url();?>myassets/images/home/02.png" alt="About Us Banner Myfkra">
	  <a href="blog_details.html" class="btn btn-common overlaybtn">LEARN MORE</a>
    </div>
               
                
            </div>
			
			<div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url();?>myassets/images/artseg/banner3.jpg" />
				<div class="whitebg">
                  <div class="small_slide_big">Blog Name</div>
                <div class="small_slide_small">Welcome to the world, where everything is made possible !!!</div> </div>
				<div class="item">
      <img src="images/home/02.png" alt="About Us Banner Myfkra">
	  <a href="blog_details.html" class="btn btn-common overlaybtn">LEARN MORE</a>
    </div> 
                
            </div>
			
		 -->
			
			
			
			
		
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        
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


	
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         
<?php foreach ($blogs as $blog) { ?>
                         <div class="col-md-4 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp">
                                    <a href="blog_details.html"><img src="<?php echo base_url();?>uploads/blog/<?php echo $blog->smallimage;?>" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                         <span class="uppercase"> <!--<a href="#">14 <br><small>Feb</small></a> --></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html"><?php echo $blog->title;?></a></h2>
                                    <h3 class="post-author"><a href="<?php site_url();?>Blog/BlogDetail/<?php echo $blog->id;?>">Posted by - <?php echo $blog->publishedby;?></a></h3>
                                    <p><?php echo substr($blog->desc,0,200);?>[...]</p>
                                    <a href="<?php site_url();?>Blog/BlogDetail/<?php echo $blog->id;?>" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <!--<li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                             <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php } ?>
						
						<!-- <div class="col-md-4 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                                    <a href="blog_details.html"><img src="images/news/1.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Blog Title</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by Name</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                                    <a href="blog_details.html"><img src="images/news/1.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Blog Title</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by Name</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-5 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <a href="blog_details.html"><img src="images/news/1.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Blog Title</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by Name</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-7 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                                    <a href="blog_details.html"><img src="images/news/1.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Blog Title</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by Name</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-7 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                                    <a href="blog_details.html"><img src="images/news/1.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Blog Title</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by Name</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb wow bounceInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                                    <a href="blog_details.html"><img src="images/news/1.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Blog Title</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by Name</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Categories Name</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						 -->
						
						
						
						
						
                      
					 
						
					  
					  
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                          <li><a href="#">left</a></li>
                          <li class="active"><a href="#">1</a></li>
                          <!-- <li><a href="#">2</a></li>
                          <li class="active"><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">6</a></li>
                          <li><a href="#">7</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#">9</a></li> -->
                          <li><a href="#">right</a></li>
                        </ul>
                    </div>
                 </div>
           <!--      <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Lorem ipsum<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Dolor sit amet<span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Lorem ipsum<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Lorem ipsum<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Lorem ipsum<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Lorem ipsum<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Lorem ipsum <span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Lorem ipsum <span class="pull-right">(8)</span></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div> -->
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


    <section id="action" class="responsive padding-bottom">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="800ms">
                            <h1 class="title">Make a change! Join Us TODAY! </h1>
                            <p>Get ready to take a bold step towards a secure future.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1100ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">Take a part of Myfkra</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->
    
<!--divider-->
<section>
<div class="or-spacer center-block">
  <div class="mask"></div>
  <span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
</div>
</section>
<!--divider-->



<?php include('footer.php'); ?>
