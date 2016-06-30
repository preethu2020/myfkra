<h2>Edit News</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php if($video):?>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group">
    <label for="title" class="col-md-2 control-label"> Title:</label>
    <div class="col-md-6"><input type="text" name="v_name" class="form-control" id="v_name" value="<?php echo $video->v_name;?>"></div>
</div>
<div class="form-group">
    <label for="brief" class="col-md-2 control-label">Video Description :</label>
    <div class="col-md-8"><textarea class="form-control" id="v_desc" name="v_desc"><?php echo $video->v_desc;?></textarea></div>
</div>



<div class="form-group">
    <label class="col-md-2 control-label">Video <?php if($video->v_path){?><a href="<?php echo site_url()."uploads/video/".$video->v_path;?>"  target="_blank"> [download] </a><?php } ?>:</label>
    <div class="col-md-3"><input type="file" name="v_video" class="form-control nobb" style="height:auto"></div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Thumb <?php if($video->v_thumb){?><a href="<?php echo site_url()."uploads/video/".$video->v_thumb;?>"  target="_blank"> [download] </a><?php } ?>:</label>
    <div class="col-md-3"><input type="file" name="v_thumb" class="form-control nobb" style="height:auto"></div>
</div>


<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Update</button>&nbsp;<button type="button" class="btn btn-default" id="cancel">Cancel</button></div>
</div>
<div class="clearfix"></div>
<?php echo form_close();
endif; ?>
<script>
$(document).ready(function(e) {
	$('textarea').jqte();
	$('#cancel').click(function(e){
		window.location='<?php echo site_url();?>admin/news';
	});
	$('#date').datepicker({format: "dd/mm/yyyy",autoclose: true,todayHighlight: true});
});
</script>