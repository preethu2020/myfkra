<h2>Edit Client</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php if($client):?>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>




<div class="form-group">
    <label for="title" class="col-md-2 control-label">Client Name:</label>
    <div class="col-md-6"><input type="text" name="name" class="form-control" id="name" value="<?php echo $client->name; ?>"></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Background image image: <?php if($client->bgimg) { ?><a href="<?php echo site_url()."uploads/client/".$client->bgimg;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3"><input type="file" name="bgimg" class="form-control nobb" style="height:auto" id="bgimg" onchange="checkPhoto(this)"><p> Please use only 500*300 image.</p></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Black Logo image: <?php if($client->black_logo) { ?><a href="<?php echo site_url()."uploads/client/".$client->black_logo;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3"><input type="file" name="black_logo" class="form-control nobb" style="height:auto" id="black_logo" onchange="checkPhoto(this)"><p> Please use only 500*300 image.</p></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">White Logo image: <?php if($client->black_logo) { ?><a href="<?php echo site_url()."uploads/client/".$client->white_logo;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3"><input type="file" name="white_logo" class="form-control nobb" style="height:auto" id="white_logo" onchange="checkPhoto(this)"><p> Please use only 500*300 image.</p></div>
</div>






<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Update</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/Clients'">Cancel</button></div>
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
$('#clientlogo').change(function(e) {
    
    var u = URL.createObjectURL(this.files[0]);
    var img = new Image;
	var input = $('#clientlogo'); 
    
    img.onload = function() {
        //alert(img.width);
		 var pfwidth1 = img.width; var pfheight1 = img.height;
		 if( pfwidth1 == 500 && pfheight1 == 300)
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
	alert("error...!! Pleas eneter 500*300 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});


</script>


