<h2>Edit Blog</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php if($blog):?>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>


<div class="form-group">
    <label for="title" class="col-md-2 control-label">Title:</label>
    <div class="col-md-6"><textarea type="text" name="title" class="form-control" id="title" value=""><?php echo $blog->title;?></textarea></div>
</div>

<div class="form-group">
    <label for="title" class="col-md-2 control-label">Description:</label>
    <div class="col-md-6"><textarea type="text" name="desc" class="form-control" id="desc" value=""><?php echo $blog->desc;?></textarea></div>
</div>


<div class="form-group">
    <label for="title" class="col-md-2 control-label">Arabic Description:</label>
    <div class="col-md-6"><textarea type="text" name="ardesc" class="form-control" id="ardesc" value=""><?php echo $blog->ardesc;?></textarea></div>
</div>

<div class="form-group">
    <label for="title" class="col-md-2 control-label">Published By:</label>
    <div class="col-md-6"><textarea type="text" name="publishedby" class="form-control" id="publishedby" value=""><?php echo $blog->publishedby;?></textarea></div>
</div>

<div class="form-group">
    <div class="form-group">
    <label class="col-md-2 control-label">Main Image:<?php if($blog->mainimage) { ?><a href="<?php echo site_url()."uploads/blog/".$blog->mainimage;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3"><input type="file" name="mainimage" class="form-control nobb" style="height:auto" id="mainimage" onchange="checkPhoto(this)"><p>Please provide image with 1300*600 dimension</p></div>
</div>

<div class="form-group">
     <label class="col-md-2 control-label">Small Image:<?php if($blog->smallimage) { ?><a href="<?php echo site_url()."uploads/blog/".$blog->smallimage;?>"  target="_blank"> [download] <?php } ?></a></label>
    <div class="col-md-3"><input type="file" name="smallimage" class="form-control nobb" style="height:auto" id="smallimage" onchange="checkPhoto(this)"><p>Please try to upload square dimention image</p></div>
</div>











<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Update</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/Blog'">Cancel</button></div>
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
$('#mainimage').change(function(e) {
    
    var u = URL.createObjectURL(this.files[0]);
    var img = new Image;
	var input = $('#mainimage'); 
    
    img.onload = function() {
        //alert(img.width);
		 var pfwidth1 = img.width; var pfheight1 = img.height;
		 if( pfwidth1 == 1300 && pfheight1 == 600)
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
	alert("error...!! Pleas eneter 1300*600 image");
	 input.replaceWith(input.val('').clone(true));
}	   
    };
        
    img.src = u;
   // alert(a);
});


</script>


