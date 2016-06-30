<h2>Images</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/activities/AddImage/<?php echo $actid1; ?>"><span class="glyphicon glyphicon-plus"></span> Add New Image</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	<th>Image ID</th>
      <th>Branch Name</th>
      <th>Activity  Image</th>
	 
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($Images)): foreach($Images as $img): ?>
    <tr>
      
	  <td><?php  echo $img->imgid; ?></td>
	  <td><?php echo $img->branch; ?></td> 
	 <td class="text-center"><img width="75" height="100" src="<?php echo site_url()."uploads/image/".$img->filepath1; ?>"  > </td> 
	    
      <td align="center"><?php echo btn_edit('admin/Images/edit/'. $img->imgid); ?></td>
      <td align="center"><?php echo btn_delete('admin/Images/delete/'. $img->imgid); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Gallery.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>