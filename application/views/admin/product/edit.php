<h2>Edit Case Study</h2>
<br /> 
<?php if(validation_errors()) {?>
	<div class="alert alert-danger col-md-offset-2 col-md-6" role="alert" style="font-family:"><?php echo validation_errors();?></div>
<?php }if($message){ ?>
<div class="alert alert-warning col-md-offset-2 col-md-6" role="alert"><?php echo $message;?></div>
<?php }?>
<div class="clearfix"></div>
<?php if($creative):?>
<?php echo form_open_multipart(current_url(),array('class' => 'form-horizontal', 'role' => 'form'));?>




<div class="form-group">
    <label for="title" class="col-md-2 control-label">Product Name:</label>
    <div class="col-md-6"><input type="text" name="productname" class="form-control" id="productname" value="<?php echo $creative->productname;?>"></div>
</div>


<div class="form-group">
    <label for="title" class="col-md-2 control-label">Product Info:</label>
    <div class="col-md-6"><input type="text" name="desc" class="form-control" id="desc" value="<?php echo $creative->productname;?>"></div>
</div>

<div class="form-group">
    <label for="title" class="col-md-2 control-label">Product Info:</label>
    <div class="col-md-6"><input type="text" name="desc" class="form-control" id="desc" value="<?php echo $creative->desc;?>"></div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Select Category:</label>
   <div class="col-md-6">
    <select class="col-md-6" name="catid" id="catid">
   <option value=""><?php foreach($category as $cat) { if($cat->id == $creative->catid) { echo $cat->name; } } ?></option>
 <?php if($category) { foreach($category as $cat) { ?>
  <option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>

<?php } } ?> 
</select> 
</select>

    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Select Women:</label>
   <div class="col-md-6">
    <select class="col-md-6" name="womenid" id="womenid">
   <option value=""><?php foreach($women as $woo) { if($woo->id == $creative->womenid) { echo $woo->name; } } ?></option>
 <?php if($women) { foreach($women as $woo) { ?>
  <option value="<?php echo $woo->id;?>"><?php echo $woo->name;?></option>

<?php } } ?> 
</select> 
</select>

    </div>
    </div>

   



<div class="form-group">
    <label class="col-md-2 control-label"> product image :</label>
    <div class="col-md-3"><input type="file" name="image" class="form-control nobb" style="height:auto" id="image" onchange="checkPhoto(this)"><p>Please provide image with 550*575 dimension</p></div>
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


