<h2>Edit Profile</h2>
<br />
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php } ?>
<div class="clearfix"></div>
<?php echo form_open(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group">
    <label for="name" class="col-md-2 control-label">Name:</label>
    <div class="col-sm-6"><input type="text" name="name" class="form-control" id="name" value="<?php echo $name;?>"></div>
</div>
<div class="form-group">
    <label for="email" class="col-md-2 control-label">Email Address:</label>
    <div class="col-sm-6"><input type="text" name="email" class="form-control" id="email" value="<?php echo $email;?>"></div>
</div>
<div class="form-group">
    <label for="username" class="col-md-2 control-label">Username:</label>
    <div class="col-sm-6"><input type="text" name="username" class="form-control" id="username" value="<?php echo $username;?>"></div>
</div>
<div class="form-group">
    <label for="password" class="col-md-2 control-label">Password:</label>
    <div class="col-sm-6"><input type="password" name="password" class="form-control" id="password" value="<?php echo $password;?>"><small style="color:#999">Leave blank if you donot want to change the password</small></div>
</div>
<div class="form-group">
    <label for="password" class="col-md-2 control-label">Re-type Password:</label>
    <div class="col-sm-6"><input type="password" name="repassword" class="form-control" id="repassword" value="<?php echo $repassword;?>"></div>
</div>
<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Update</button></div>
</div>
<?php echo form_close();?>
