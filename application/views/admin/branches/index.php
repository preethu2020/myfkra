<h2>Branches</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Branches/newbranch"><span class="glyphicon glyphicon-plus"></span> Add New Branch</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	<th>Branch Name</th>
	<th>Address</th>
	 <th>Email</th>
      <th>Fax</th>
      <th>Latitude</th>
      <th>Longitude</th>
	  <th>State</th>
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($branches)): foreach($branches as $branch): ?>
    <tr>
      
	  <td><?php  echo $branch->Name; ?></td>
	  <td><?php  echo $branch->Address; ?></td>
		<td><?php  echo $branch->Email; ?></td> 
	   <td><?php  echo $branch->Fax; ?></td> 
	  <td><?php  echo $branch->Latitude; ?></td> 
	  <td><?php  echo $branch->Longitude; ?></td> 
	  <td><?php  echo $branch->State; ?></td> 
 
	    
      <td align="center"><?php echo btn_edit('admin/Branches/edit/'. $branch->AppBranchId); ?></td>
      <td align="center"><?php echo btn_delete('admin/Branches/delete/'. $branch->AppBranchId); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Gallery.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>