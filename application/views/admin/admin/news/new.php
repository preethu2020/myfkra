<h2>New News</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">News Title:</label>
    <div class="col-md-6"><input type="text" name="title" class="form-control" id="title" value=""></div>
</div>
<div class="form-group">
    <label for="brief" class="col-md-2 control-label">Brief:</label>
    <div class="col-md-8"><textarea class="form-control" id="brief" name="brief"></textarea></div>
</div>
<div class="form-group">
    <label for="pubdate" class="col-md-2 control-label">Publishing Date:</label>
    <div class="col-md-3"><input type="text" name="pubdate" class="form-control" id="date" value="" readonly></div>
</div>
<div class="form-group">
    <label for="body" class="col-md-2 control-label">Body:</label>
    <div class="col-md-8"><textarea class="form-control" id="body" name="body"></textarea></div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Image :</label>
    <div class="col-md-3"><input type="file" name="filepath1" class="form-control nobb" style="height:auto"></div>
</div>
<div style="clear:both">&nbsp;</div>
<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Add</button>&nbsp;<button type="button" class="btn btn-default" id="cancel">Cancel</button></div>
</div>
<div class="clearfix"></div>
<?php echo form_close();?>
<script>
$(document).ready(function(e) {
	$('textarea').jqte();
	$('#cancel').click(function(e){
		window.location='<?php echo site_url();?>admin/news';
	});
	$('#date').datepicker({format: "dd/mm/yyyy",autoclose: true,todayHighlight: true});
});
</script>