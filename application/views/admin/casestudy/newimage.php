<h2>New Image</h2>
<br /> 

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.cropit.js"></script>
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group" style="display:none;">
    <label for="title" class="col-md-2 control-label" style="display:none;">Testimonial:</label>
    <div class="col-md-6"><input type="text" name="testimonial" class="form-control" id="testimonial" style="visibility:hidden;"value="temp"></div>
</div>
 
<div class="form-group">
    <label class="col-md-2 control-label">Activity  Image </label>
    <div class="col-md-3">
	<input type="file" name="image" class="form-control nobb" style="height:auto" id="image" onchange="checkPhoto(this)"><small>Gallery Image Guidelines <br>
<!--	1. Image width must be between 1000 to 2000 pixels<br/>
	2. Image Height must be between 750 to 1500 pixels<br/>
	3. Approx. maintain the image ratio around 4:3 (Height:Width)<br/> -->
	</small>
	</div>

	</div>

    <script>
  
    </script>
  </body>
</html>


<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8">
	<button type="submit" id="btn-sbt" class="btn btn-primary">Add</button>&nbsp;
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
		 
		 if(pfwidth1 >1000 && pfwidth1 < 2000 )
		 {
			  if(pfheight1 >750 && pfheight1 < 1500 )
			  {
				  var img_ratio = pfwidth1/pfheight1;
				  if(img_ratio > 1.00 && img_ratio < 1.75)
				  {
					  
				  }		
					else{
						myfunction(pfwidth1,pfheight1);
					}
			  }
			  else
			  {
				  myfunction(pfwidth1,pfheight1);
			  }
		 }
		 else {
			 myfunction(pfwidth1,pfheight1);
		 }
		 
		
	 var a = img.width; 
       
function myfunction(pfwidth1,pfheight1)
{
	alert("Hi there, We would love to upload this image for you, but unfortunately we have to follow guidelines for maintaining the quality of this website. Kindly refer to the guidelines mentioned below.");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});


</script>
   