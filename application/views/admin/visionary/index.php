<h2>visionary</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Visionary/newVisionary"><span class="glyphicon glyphicon-plus"></span> Add a new visionary</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Title</th>
	 <th>Desc  </th>
    <th>main Image  </th>
    <th>Small Image</th>
  
	

      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($visionaries)): foreach($visionaries as $visionary): ?>
    <tr>
      
	
	
  <td><?php  echo $visionary->title; ?></td>	
    <td><?php  echo substr($visionary->desc,0,100); ?> ...</td> 
     <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/visionary/".$visionary->mainimage;?>"  > </td> 
       <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/visionary/".$visionary->smallimage;?>"  > </td> 

      
      <td align="center"><?php echo btn_edit('admin/Visionary/edit/'. $visionary->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Visionary/delete/'. $visionary->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any visionary.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>