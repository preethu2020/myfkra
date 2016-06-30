<h2>New Client</h2>
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
    <label for="title" class="col-md-2 control-label">Client Name:</label>
    <div class="col-md-6"><input type="text" name="name" class="form-control" id="name" value=""></div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Background Image:</label>
   
    <div class="col-md-3">

            <input type='file' id="imgInp"  name="bgimg" />

        <img id="blah" class="crop" src="#" alt="your image" />
        <input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
		
    <!--<input type="file" name="bgimg" class="form-control nobb" style="height:auto" id="bgimg" onchange="checkPhoto(this)"><p> </p> -->
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">White Logo :</label>
    <div class="col-md-3"><input type="file" name="white_logo" class="form-control nobb" style="height:auto" id="white_logo" onchange="checkPhoto(this)"><p></p></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Black Logo :</label>
    <div class="col-md-3"><input type="file" name="black_logo" class="form-control nobb" style="height:auto" id="black_logo" onchange="checkPhoto(this)"><p> </p></div>
</div>









<div class="form-group">
	<label class="col-md-2">&nbsp;</label>
    <div class="col-sm-8"><button type="submit" class="btn btn-primary">Add</button>&nbsp;<button type="button" class="btn btn-default" id="cancel" onclick="javascript:window.location='<?php echo site_url();?>admin/client'">Cancel</button></div>
</div>


<div class="clearfix"></div>
<?php echo form_close();?>

<style type="text/css">
	 #blah {
    background-color: #FFF;
  
    font-size: 24px;
    display: block;
  }
</style>
<script type="text/javascript">
	    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                $('.crop').Jcrop({
      
                  onSelect: updateCoords,
                    
                        bgOpacity:   .4,
                        setSelect:   [ 100, 100, 50, 50 ],
                        aspectRatio: 16 / 9
                });
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        console.log(this);
        readURL(this);
    });

  function updateCoords(c)
  {
  	console.log(c);
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

</script>
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
<!--
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
-->

