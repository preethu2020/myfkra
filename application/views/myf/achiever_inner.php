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
                            <h1 class="title">Women</h1>
                            <p>Achievers/<?php echo $achiever->name;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url();?>uploads/achiever/<?php echo $achiever->image;?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-8">
                    <div class="project-name overflow">
                        <h2 class="bold"><?php echo $achiever->name;?></h2>
                        
                    </div>
                    <div class="project-info overflow">
                        
                        <p><?php echo $achiever->desc;?></p>
                    </div>
                   
                  
                  
                </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->

    <section id="related-work" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">Other Achievers</h1>
               
<?php foreach ($achievers as $achiever) { ?>
            <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="<?php echo base_url();?>uploads/achiever/<?php echo $achiever->image;?>" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="<?php echo base_url();?>SecretsOfSuccess/AchieversDetail/<?php echo $achiever->id;?>"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2><?php echo $achiever->name;?></h2>
                        </div>
                    </div>
                </div>
               
<?php } ?>

               <!--  <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/achievers/other_achievers.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Salma Saleem</h2>
                        </div>
                    </div>
                </div>
				 <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/achievers/other_achievers.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Salma Saleem</h2>
                        </div>
                    </div>
                </div>
				 <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/achievers/other_achievers.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Salma Saleem</h2>
                        </div>
                    </div>
                </div> -->



                </div>
               
            </div>
        </div>
    </section>
    <!--/#related-work-->

<?php include('footer.php'); ?>
