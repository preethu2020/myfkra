<h2>New Testimonial</h2>
<script type="text/javascript" src="http://jcrop-cdn.tapmodo.com/v0.9.12/js/jquery.Jcrop.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://jcrop-cdn.tapmodo.com/v0.9.12/css/jquery.Jcrop.min.css">
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>
<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Person Name:</label>
    <div class="col-md-6"><input type="text" name="name" class="form-control" id="name" value=""></div>
</div>

<div class="form-group">
    <label for="heading" class="col-md-2 control-label">Testimonial:</label>
    <div class="col-md-6"><input type="text" name="testimonial" class="form-control" id="testimonial" value=""></div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label"> Persom Image :</label>
    <div class="col-md-3"><input type="file" name="image" class="form-control nobb" style="height:auto" id="image" onchange="checkPhoto(this)"><p>Please provide image with 80*80 dimension</p></div>
</div>




<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Add</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/Testimonial'">Cancel</button></div>
</div>


<div class="clearfix"></div>
<?php echo form_close();?>

<style type="text/css">
	 #blah {
    background-color: #FFF;
    width: 100%;
    height: 100%;
    font-size: 24px;
    display: block;
  }
</style>

<script>
//Disable Banner Image Upload By default
//document.getElementById("pfimage3").disabled = true;

$(document).ready(function(e) {
	$('textarea').jqte();
	$('#cancel').click(function(e){
		window.location='<?php echo site_url();?>admin/Testimonial';
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
		 if( pfwidth1 == 80 && pfheight1 == 80)
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
	alert("error...!! Pleas eneter 80*80 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});


</script>


