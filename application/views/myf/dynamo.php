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
                            <p>Dynamo of My Fkra</p>
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
                <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/dynamo/<?php echo $dynamo->image;?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold"><?php echo $dynamo->name;?></h2>
                        
                    </div>
                    <div class="project-info overflow">
                        <?php echo nl2br($dynamo->desc); ?>
                      
                    </div>
                    <br/><br/>

                      <div class="project-info overflow" style="text-align: right">
                        <?php echo nl2br($dynamo->ardesc); ?>
                      
                    </div>
                   
                  
                  
                </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->

    <section id="related-work" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">Other Dynamo</h1>
               
<?php foreach ($dynamos as $dyn) { ?>

                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="<?php echo base_url();?>uploads/dynamo/<?php echo $dyn->image ; ?>" class="img-responsive" alt="<?php echo $dyn->name;?>">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="<?php echo base_url();?>uploads/dynamo/<?php echo $dyn->image ; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2><a href="<?php echo base_url();?>About/Dynamo/<?php echo $dyn->id;?>" > <?php echo $dyn->name;?></a></h2>
                        </div>
                    </div>
                </div>

<?php } ?>

<!-- 
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
                 -->


                </div>
               
            </div>
        </div>
    </section>
    <!--/#related-work-->

<?php include('footer.php'); ?>
