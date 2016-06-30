<h2>Gallery</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/gallery/newgallery"><span class="glyphicon glyphicon-plus"></span> Add New Image</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	<th>Gallery ID</th>
      <th>Event Name</th>
      <th>Gallery Image</th>
       <th>Event Date</th>
	 
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($galleries)): foreach($galleries as $gallery): ?>
    <tr>
      
	  <td><?php  echo $gallery->id; ?></td>
	  <td><?php echo $gallery->eventname; ?></td> 
	 <td class="text-center"><img width="75" height="100" src="<?php echo site_url()."uploads/gallery/".$gallery->image; ?>"  > </td> 
     <td><?php echo $gallery->created; ?></td> 
	  <td align="center"><?php echo btn_edit('admin/gallery/edit/'. $gallery->id); ?></td> -
      <td align="center"><?php echo btn_delete('admin/gallery/delete/'. $gallery->id); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Gallery.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>