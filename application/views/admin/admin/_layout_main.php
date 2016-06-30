<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo site_url();?>assets/img/favicon.ico">
<title><?php echo $meta_title; ?></title>
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
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
  <div class="row">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
    </div>
    <div class="navbar-collapse collapse">      
      <ul class="nav navbar-nav navbar-right">
	   
        <li><?php echo anchor('admin/portfolio', '<span class="glyphicon glyphicon-cog"></span> Portfolio'); ?></li>
        <li><?php echo anchor('admin/client', '<span class="glyphicon glyphicon-cog"></span> Client'); ?></li>
        <li><?php echo anchor('admin/employee', '<span class="glyphicon glyphicon-cog"></span> Employee'); ?></li>
        <li><?php echo anchor('admin/agency', '<span class="glyphicon glyphicon-cog"></span> Agency'); ?></li>
		<li><?php echo anchor('admin/user/profile', '<span class="glyphicon glyphicon-user"></span> Profile'); ?></li>
        <li><?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> Logout'); ?></li>
      </ul>
    </div>
    </div>
  </div>
</div>
<!-- /.nav --
<div class="container boxshad1 borad1">
  <div class="row borad1" style="padding:10px 20px;background:#fff;">
      <?php $this->load->view($subview); ?>
  </div>
</div>
</body>
</html>