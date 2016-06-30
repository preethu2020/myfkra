<h2>Edit Believers</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php if($believer):?>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>


<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Person Name:</label>
    <div class="col-md-6"><input type="text" name="name" class="form-control" id="name" value=" <?php echo $believer->name;?>"></div>
</div>

<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Description:</label>
    <div class="col-md-6">
    <textarea name="desc" id="desc"><?php echo $believer->desc;?></textarea></div>
</div>


<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Arabic Description:</label>
    <div class="col-md-6">
    <textarea name="ardesc" id="ardesc"><?php echo $believer->ardesc;?></textarea></div>
</div>


<div class="form-group">
     <label class="col-md-2 control-label">Person Image:<?php if($believer->image) { ?><a href="<?php echo site_url()."uploads/believer/".$believer->image;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3">
    <input type="file" name="image" class="form-control nobb" style="height:auto" id="image" onchange="checkPhoto(this)"><p>Please provide image with 550*575 dimension</p></div>
</div>






<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Update</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/Believers'">Cancel</button></div>
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
$('#image').change(function(e) {
    
    var u = URL.createObjectURL(this.files[0]);
    var img = new Image;
	var input = $('#image'); 
    
    img.onload = function() {
        //alert(img.width);
		 var pfwidth1 = img.width; var pfheight1 = img.height;
		 if( pfwidth1 == 550 && pfheight1 == 575)
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
	alert("error...!! Pleas eneter 550*575 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});


</script>


