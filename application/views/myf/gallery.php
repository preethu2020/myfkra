<?php $page = 'gallery'; ?>
<?php include('header.php'); ?>
    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Gallery</h1>
                            <p>Imagination for Arab Women</p>
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


        <div class="clearfix"></div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                
                      <li><a href="#">left</a></li> 
                      <?php foreach ($years as $yr) { ?>
                     
                      <li class="active"><a href="<?php echo base_url();?>Gallery/GalleryYear/<?php echo $yr->yyyy; ?> "> <?php echo  $yr->yyyy; ?></a></li>

                      <?php } ?>
                <li><a href="#">right</a></li> 
                    </ul>
                </div>


        <div class="container">
            <div class="row">
               
            <?php foreach ($gallery as $gal) { ?>
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url();?>uploads/gallery/<?php echo $gal->image;?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                       
                                        <li><a href="<?php echo base_url();?>uploads/gallery/<?php echo $gal->image;?>" data-lightbox="example-set" ><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                            
                                 <h2><?php echo $gal->eventname;?> </h2>
                                 <h2> <?php  $date1 = $gal->created; echo date('d/m/Y', strtotime($date1));;?><h2>
                            </div>
                        </div>
                    </div>


<?php } ?>  
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
