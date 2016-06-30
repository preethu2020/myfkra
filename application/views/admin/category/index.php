<h2>Category</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Category/newCategory"><span class="glyphicon glyphicon-plus"></span> Add a new Category</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	 <th>Category Name  </th>


      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($categories)): foreach($categories as $category): ?>
    <tr>
      
	
  <td><?php  echo $category->name; ?></td>	
  
      
      <td align="center"><?php echo btn_edit('admin/Category/edit/'. $category->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Category/delete/'. $category->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Categories.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>