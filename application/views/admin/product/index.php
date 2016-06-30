<h2>Creative Shelves</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/CreativityShelf/newCreativityShelf"><span class="glyphicon glyphicon-plus"></span> Add a Creative shelf</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Product Name</th>
	 <th>Image</th>
    <th>Category</th>
    <th>Person name </th>
<!-- 
<th class="text-center" width="10%">Add Images</th>
 -->      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th> 
    </tr>
  </thead>
  <tbody>
    <?php if(count($cshelves)): foreach($cshelves as $cs): ?>
    <tr>
      <td><?php  echo $cs->productname; ?></td> 
	 <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/product/".$cs->image;?>"  > </td> 
	
  <td><?php  if( $cs->womenid)  { foreach($women as $create) { if($cs->womenid == $create->id )echo $create->name;} }?></td>	
<td><?php  if( $cs->catid)  { foreach($category as $cat) { if($cs->catid == $cat->id )echo $cat->name;} }?></td>  
   
    
   <!--  <td><?php  echo $casestudy->brief; ?></td> 
      <td><?php  echo $casestudy->furnishing; ?></td> 
    <td><?php  echo $casestudy->workstation; ?></td>
     <td><?php  echo $casestudy->sqft; ?></td>
      <td><?php  echo $casestudy->weeks; ?></td> -->
      



      <td align="center"><?php echo btn_edit('admin/CreativityShelf/edit/'. $cs->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/CreativityShelf/delete/'. $cs->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Creativity Shelves.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>