<h2>Images</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Casestudy/AddImage/<?php echo $casestudyid; ?>"><span class="glyphicon glyphicon-plus"></span> Add New Image</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	<th>Image ID</th>
    
      <th>Gallery  Image</th>
	 
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php if(count($Images)): foreach($Images as $_img):  ?>
    <tr>
     
	  <td><?php  echo $_img->id; ?></td>

	 <td class="text-center"><img width="75" height="100" src="<?php echo site_url()."uploads/image/".$_img->image; ?>"  > </td> 
	  
      <td align="center"><?php echo btn_delete('admin/Casestudy/Imagedelete/'. $_img->id); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Gallery.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>