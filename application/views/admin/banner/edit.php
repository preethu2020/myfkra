<h2>Edit Banner</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php if($banner):?>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>



<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Banner Name:</label>
    <div class="col-md-6"><input type="text" name="heading" class="form-control" id="heading" value="<?php echo $banner->heading;?>"></div>
</div>

<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Banner Description:</label>
    <div class="col-md-6"><input type="text" name="desc" class="form-control" id="desc" value="<?php echo $banner->desc;?>"></div>
</div>

<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Banner Link:</label>
    <div class="col-md-6"><input type="text" name="link" class="form-control" id="link" value="<?php echo $banner->link;?>"></div>
</div>

<div class="form-group">
     <label class="col-md-2 control-label">Banner Image:<?php if($banner->bannerimg) { ?><a href="<?php echo site_url()."uploads/banner/".$banner->bannerimg;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3">
    <input type="file" name="bannerimg" class="form-control nobb" style="height:auto" id="bannerimg" onchange="checkPhoto(this)"><p> Please use only 1920*500 image.</p></div>
</div>






<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Update</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/Banner'">Cancel</button></div>
</div>


<div class="clearfix"></div>
<?php echo form_close();
endif; ?>
<script>
//Disable Banner Image Upload By default
//document.getElementById("pfimage3").disabled = true;

$(document).ready(function(e) {
	$('textarea').jqte();
	$('#cancel').click(function(e){
		window.location='<?php echo site_url();?>admin/client';
	});
	$('#date').datepicker({format: "dd/mm/yyyy",autoclose: true,todayHighlight: true});	
	//document.getElementById("#pfimage3").disabled = true;
	
});
</script>
<script>
$('#bannerimg').change(function(e) {
    
    var u = URL.createObjectURL(this.files[0]);
    var img = new Image;
	var input = $('#bannerimg'); 
    
    img.onload = function() {
        //alert(img.width);
		 var pfwidth1 = img.width; var pfheight1 = img.height;
		 if( pfwidth1 == 1920 && pfheight1 == 500)
		 {
			//alert('perfect'); 
		 }
		 else
		 {
			 	myfunction(pfwidth1,pfheight1);
			 //alert('error');
    
		 }
	  //   alert(img.width);
	 var a = img.width; 
       
function myfunction(pfwidth1,pfheight1)
{
	alert("error...!! Pleas eneter 1920*500 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});


</script>


