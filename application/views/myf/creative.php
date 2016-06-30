<?php $page = 'creative'; ?>
<?php include('header.php'); ?>
    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Creativity Shelves</h1>
                            <p>Creativity at it's best!</p>
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

<section>
<div class="container">
<div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single pull-left">
                                        <div class="person-thumb">
                                            <img src="<?php echo base_url();?>uploads/creativity/<?php echo $recent_creativity->image;?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                         <!--        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-6">
                            <div class="person-info ">
                                        <h2><a href="women_inner.php"><?php echo $recent_creativity->name;?></a></h2>
                                        <p><?php echo $recent_creativity->name;?></p>
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


<div class="clearfix"></div>


    <section id="portfolio">
        <div class="container">
            <div class="row">
            <div class="col-md-9 col-sm-8">
                <!--/#portfolio-filter-->
                    
                <div class="portfolio-items">

<?php foreach ($creativity_product as $product) { if($product->womenid == $recent_creativity->id)  {?>

                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo base_url();?>uploads/product/<?php echo $product->image;?>" class="img-responsive" alt="<?php echo $product->productname;?>">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="<?php echo base_url();?>Creative/CreativeInner/<?php echo $product->id;?>"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2><?php echo $product->productname;?></h2>
                            </div>
                        </div>
                    </div>
<?php } } ?>
                   
                </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Creative Categories</h3>
                            <ul class="nav navbar-stacked">

                            <?php foreach ($categories as $cat) { ?>
                             
                            
                                <li><a href="<?php echo site_url();?>Creative/CategoryProduct/<?php echo $cat->id;?>"> <?php echo $cat->name;?><span class="pull-right"></span></a></li>

                                <?php } ?>
                          
                            </ul>
                        </div>
                       
                        <div class="sidebar-item popular">
                        
                        
                            
                        </div>
                    </div>
                </div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                     
                      <li class="active"><a href="#">1</a></li>
                     
                      <li><a href="#">right</a></li>
                    </ul>
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