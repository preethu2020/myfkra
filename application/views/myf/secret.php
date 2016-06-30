<?php $page = 'women'; ?>
<?php include('header.php'); ?>

    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Think big.... Think Creative</h1>
                            <p>Achiever/Believers</p>
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



    <section id="portfolio">
        <div class="container">
            <div class="row">
               
                
                <div class="portfolio-items">
                    <div class="col-sm-6 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                               <!--  <div class="portfolio-thumb wow fadeInLeft animated"  data-wow-duration="500ms" data-wow-delay="1000ms">
                                <div class="rotate" id="hello">
  								
								</div>
                                    <img src="<?php echo base_url();?>myassets/images/home/achivers.jpg" class="img-responsive" alt="">
                                </div> -->
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo base_url();?>SecretsOfSuccess/Achievers"><i class="fa fa-link"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info  wow bounceInLeft animated"  data-wow-duration="900ms" data-wow-delay="2000ms">
                                <h2>Achievers</h2>
                                <p>My Fkra Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .</p>
                            </div>
                        </div>

	                       <!--  <div class="col-md-4">
		                        <a href="#"><img src="" alt="" ></a>
		                        <p> lorem ipsum</p>
	                        </div>
	                        <div class="col-md-4">
		                        <a href="#"><img src="" alt="" ></a>
		                        <p> lorem ipsum</p>
	                        </div> -->
                    </div>
                 </div>
				
				  <div class="portfolio-items">
                    <div class="col-sm-6 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                               <!--  <div class="portfolio-thumb wow fadeInRight animated"  data-wow-duration="500ms" data-wow-delay="1200ms">
                                    <img src="<?php echo base_url();?>myassets/images/home/believe.jpg" class="img-responsive" alt="">
                                </div> -->
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo base_url();?>SecretsOfSuccess/Believers"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info wow bounceInRight animated"  data-wow-duration="900ms" data-wow-delay="2000ms">
                                <h2>Believers</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                       
                    </div>
                 </div>
                 
				 <div class="clearfix"></div>
                 <div class="row">

                 <div class="col-md-6 wow bounceInUp animated"  data-wow-duration="900ms" data-wow-delay="2000ms">
                        	<?php  foreach($achievers as $ach) { ?>
	                        <div class="col-md-4">
		                        <a href="<?php echo site_url();?>SecretsOfSuccess/Achievers"><img class="img-responsive" src="<?php echo base_url();?>uploads/achiever/<?php echo $ach->image;?>" alt="<?php echo $ach->name;?>" ></a>
		                        <h4> <?php echo $ach->name;?></h4> 
	                        </div>

	                        <?php } ?>
	                        </div>
	                        <div class="col-md-6 wow bounceInUp animated"  data-wow-duration="900ms" data-wow-delay="2000ms">
				 
				  			<?php  foreach($believers as $bel) { ?>
	                        <div class="col-md-4">
		                        <a href="<?php echo site_url();?>SecretsOfSuccess/Believers"><img class="img-responsive" src="<?php echo base_url();?>uploads/believer/<?php echo $bel->image;?>" alt="<?php echo $bel->name;?>" ></a>
		                        <h4> <?php echo $bel->name;?></h4> 
	                        </div>

	                        <?php } ?>
	                        </div>
	                        </div>
				 
				
				 <div class="clearfix"></div>
           
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