<h2>Case Study</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Casestudy/newCasestudy"><span class="glyphicon glyphicon-plus"></span> Add a Casestudy</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Client</th>
	 <th>Category</th>
    <th>Background</th>
    <th>Testimonial </th>
       <th>Brief </th>
    <th>Furnishing </th>
     <th>Workstation</th>
     <th>square ft.</th>
    <th>weeks</th>
	
<th class="text-center" width="10%">Add Images</th>
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($casestudies)): foreach($casestudies as $casestudy): ?>
    <tr>
      
	
	
  <td><?php  if( $casestudy->clientid)  { foreach($clients as $client) { if($casestudy->clientid == $client->id )echo $client->name;} }?></td>	
<td><?php  if( $casestudy->categoryid)  { foreach($categories as $category) { if($casestudy->categoryid == $category->id )echo $category->name;} }?></td>  
    <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/casestudy/".$casestudy->smallbg;?>"  > </td> 
    <td><?php  echo $casestudy->testimonial; ?></td> 
    <td><?php  echo $casestudy->brief; ?></td> 
      <td><?php  echo $casestudy->furnishing; ?></td> 
    <td><?php  echo $casestudy->workstation; ?></td>
     <td><?php  echo $casestudy->sqft; ?></td>
      <td><?php  echo $casestudy->weeks; ?></td>
      


      <td align="center"><?php echo btn_edit('admin/Casestudy/ViewImage/'. $casestudy->id); ?></td>
      <td align="center"><?php echo btn_edit('admin/Casestudy/edit/'. $casestudy->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Casestudy/delete/'. $casestudy->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Blog.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>