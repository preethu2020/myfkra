<h2>New User</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Branch Name:</label>
    <div class="col-md-6"><input type="text" name="branchname" class="form-control" id="branchname" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Address:</label>
    <div class="col-md-6"><input type="text" name="address" class="form-control" id="address" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Email:</label>
    <div class="col-md-6"><input type="text" name="email" class="form-control" id="email" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Fax:</label>
    <div class="col-md-6"><input type="text" name="fax" class="form-control" id="fax" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Latitude:</label>
    <div class="col-md-6"><input type="text" name="latitude" class="form-control" id="latitude" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Longitude:</label>
    <div class="col-md-6"><input type="text" name="longitude" class="form-control" id="longitude" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">State:</label>
    <div class="col-md-6"><input type="text" name="state" class="form-control" id="state" value=""></div>
</div>

<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Add</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/employee'">Cancel</button></div>
</div>


<div class="clearfix"></div>
<?php echo form_close();?>
<script>
//Disable Banner Image Upload By default
document.getElementById("pfimage3").disabled = true;

$(document).ready(function(e) {
	$('textarea').jqte();
	$('#cancel').click(function(e){
		window.location='<?php echo site_url();?>admin/categories';
	});
	$('#date').datepicker({format: "dd/mm/yyyy",autoclose: true,todayHighlight: true});	
	//document.getElementById("#pfimage3").disabled = true;
	
});
</script>
<script>/* 
$('#empimage').change(function(e) {
    
    var u = URL.createObjectURL(this.files[0]);
    var img = new Image;
	var input = $('#empimage'); 
    
    img.onload = function() {
        //alert(img.width);
		 var pfwidth1 = img.width; var pfheight1 = img.height;
		 if( pfwidth1 == 380 && pfheight1 == 450)
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
	alert("error...!! Pleas eneter 380*450 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});
 */
</script>


