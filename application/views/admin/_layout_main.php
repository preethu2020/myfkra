<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo site_url();?>assets/img/favicon.ico">
<title>My Fykra<?php //echo $meta_title; ?></title>
<link href="<?php echo site_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo site_url('assets/css/admin.css');?>" rel="stylesheet">
<link href="<?php echo site_url('assets/css/jquery-te.css');?>" rel="stylesheet">
<script src="<?php echo site_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/datepicker.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/jquery-te.js'); ?>"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
/* $('.date').datepicker({
format: "dd/mm/yyyy",
autoclose: true,
todayHighlight: true
});*/
</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
  <div class="container">
  <div class="row">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><img src="<?php echo base_url();?>assets/images/logo.gif" alt="Myfikra" width="150px" height="60px" style="margin-top:-20px;"/></a>
    </div>
    <div class="navbar-collapse collapse">      
      <ul class="nav navbar-nav navbar-right">

       <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">Home<span class="caret"></a>
     
     <ul class="dropdown-menu">
     <li><?php echo anchor('admin/Banner', '<span class="glyphicon glyphicon-cog"></span> Banner'); ?></li>  
          <li><?php echo anchor('admin/Calender', '<span class="glyphicon glyphicon-cog"></span> Calender'); ?>
            <li><?php echo anchor('admin/Testimonial', '<span class="glyphicon glyphicon-cog"></span> Testimonial'); ?></li>  
             
          </ul>

        </li>  


          <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">About<span class="caret"></a>
     
     <ul class="dropdown-menu">
     <li><?php echo anchor('admin/Dynamo', '<span class="glyphicon glyphicon-cog"></span> Dynamo'); ?></li> 
             
          </ul>

        </li> 


         <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">Success Stories<span class="caret"></a>
     
     <ul class="dropdown-menu">
    <li><?php echo anchor('admin/Achievers', '<span class="glyphicon glyphicon-cog"></span> Achievers'); ?></li>  
       <li><?php echo anchor('admin/Believers', '<span class="glyphicon glyphicon-cog"></span> Belivers'); ?></li> 
             
          </ul>

        </li> 

            <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">Visionary<span class="caret"></a>
     
     <ul class="dropdown-menu">
     <li><?php echo anchor('admin/Visionary', '<span class="glyphicon glyphicon-cog"></span> Visionary'); ?></li> 
             
          </ul>

        </li> 

            <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">Blog<span class="caret"></a>
     
     <ul class="dropdown-menu">
  
               <li><?php echo anchor('admin/Blog', '<span class="glyphicon glyphicon-cog"></span> Blog'); ?></li> 
          </ul>

        </li> 


            <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">Creativityy<span class="caret"></a>
     
     <ul class="dropdown-menu">
  
    <li><?php echo anchor('admin/Category', '<span class="glyphicon glyphicon-cog"></span> Category'); ?>
        </li>  <li><?php echo anchor('admin/Creativity', '<span class="glyphicon glyphicon-cog"></span> Creativity'); ?>
        </li>  <li><?php echo anchor('admin/CreativityShelf', '<span class="glyphicon glyphicon-cog"></span> Creativity Shelf'); ?>
        </li>
          </ul>

        </li> 


   <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">Gallery<span class="caret"></a>
     
     <ul class="dropdown-menu">
     <li> <?php echo anchor('admin/Gallery', '<span class="glyphicon glyphicon-cog"></span> Gallery'); ?></li>
              
          </ul>

        </li> 

        <li class="dropdown" style="padding-top:15px;">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="display:inline !important">User<span class="caret"></a>
     
     <ul class="dropdown-menu">
    <li><?php echo anchor('admin/user/profile', '<span class="glyphicon glyphicon-user"></span> Profile'); ?></li>
        <li><?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> Logout'); ?></li>
              
          </ul>

        </li> 
	  
     

    
       
      

      </ul>
    </div>
    </div>
  </div>
</div>
<!-- /.nav -->
<div class="container boxshad1 borad1">
  <div class="row borad1" style="padding:10px 20px;background:#fff;">
      <?php $this->load->view($subview); ?>
  </div>
</div>
</body>
</html>