<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="vinayhebbar.in">
<title>Login</title>
<link href="<?php echo site_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo site_url();?>assets/css/admin.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
 <?php echo form_open(current_url(),array('class' => 'form-signin', 'role' => 'form'));?>
    <h2 class="form-signin-heading">Please log in</h2>
    <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Username">
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button><br>     
  <?php echo form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
  <?php echo form_error('password', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
  <?php if($message){?><div class="alert alert-danger" role="alert"><?php echo $message;?></div><?php } ?>

 
  <?php echo form_close();?> 
 
</body>
</html>