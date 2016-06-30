<h2>Believers</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Believers/newBeliever"><span class="glyphicon glyphicon-plus"></span> Add a new Believers</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	 <th>Name </th>
    <th> Image </th>
    <th>Desc</th>
<!--     <th>Twitter link </th>
    <th>Google Plus link </th> -->



      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($believers)): foreach($believers as $believer): ?>
    <tr>
      
	
  <td><?php  echo $believer->name; ?></td>	

    <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/believer/".$believer->image;?>"  > </td> 
        <td><?php  echo $believer->desc; ?></td> 
<!--          <td><?php  echo $dynamo->twitter; ?></td> 
          <td><?php  echo $dynamo->googleplus; ?></td>  -->


  
      
      <td align="center"><?php echo btn_edit('admin/Believers/edit/'. $believer->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Believers/delete/'. $believer->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Believers.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>