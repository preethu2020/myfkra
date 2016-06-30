<h2>Banner</h2>
<!-- <p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Banner/newBanner"><span class="glyphicon glyphicon-plus"></span> Add a new Banner</a></p> -->
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	 <th>Baner Heading  </th>
     <th>Description </th>
          <th>Banner Image </th>


      <th class="text-center" width="10%">Edit</th>
      <!-- <th class="text-center" width="10%">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php if(count($banners)): foreach($banners as $banner): ?>
    <tr>
      
	
  <td><?php  echo $banner->heading; ?></td>	
    <td><?php  echo $banner->desc; ?></td> 

    <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/banner/".$banner->bannerimg;?>"  > </td> 
  
      
      <td align="center"><?php echo btn_edit('admin/Banner/edit/'. $banner->id); ?></td>
<!--       <td align="center"><?php echo btn_delete('admin/Banner/delete/'. $banner->id) ?></td> -->
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Banner.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>