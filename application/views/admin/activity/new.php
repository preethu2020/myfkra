<h2>New Activity</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Activity Name :</label>
    <div class="col-md-6"><input type="text" name="actname" class="form-control" id="actname" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Arabic Activity Name :</label>
    <div class="col-md-6"><input type="text" name="aractname" class="form-control" id="aractname" value=""></div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">Branch</label>
<select class="col-md-3" name="branch">
  <option value="">Select...</option>
  <option value="Badaa">البدع / Badaa</option>
  <option value="Jumeirah"> جميرا Jumeirah</option>
</select>
</div>
 
<div class="form-group">
    <label class="col-md-2 control-label">Banner  Image</label>
    <div class="col-md-3"><input type="file" name="actimage" class="form-control nobb" style="height:auto" id="actimage" onchange="checkPhoto(this)"><p> Please use only 750*300 image</p></div>
	</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Activity Brief :</label>
    <div class="col-md-6"><input type="text" name="actbrief" class="form-control" id="actbrief" value=""></div>
</div>
<div class="form-group">
    <label for="title" class="col-md-2 control-label">Arabic Activity Brief :</label>
    <div class="col-md-6"><input type="text" name="aractbrief" class="form-control" id="aractbrief" value=""></div>
</div>


<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Add</button>&nbsp;
	<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/activities'">Cancel</button></div>
</div>


<div class="clearfix"></div>
<?php echo form_close();?>
<script>
//Disable Banner Image Upload By default
document.getElementById("pfimage3").disabled = true;

$(document).ready(function(e) {
	$('textarea').jqte();
	$('#cancel').click(function(e){
		window.location='<?php echo site_url();?>admin/activities';
	});
	$('#date').datepicker({format: "dd/mm/yyyy",autoclose: true,todayHighlight: true});	
	//document.getElementById("#pfimage3").disabled = true;
	
});
</script>
<script> 
$('#actimage').change(function(e) {
    
    var u = URL.createObjectURL(this.files[0]);
    var img = new Image;
	var input = $('#actimage'); 
    
    img.onload = function() {
        //alert(img.width);
		 var pfwidth1 = img.width; var pfheight1 = img.height;
		 if( pfwidth1 == 750 && pfheight1 == 300)
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
	alert("Pleas upload 750*300 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});

</script>


