<h2>Blogs</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Blog/newBlog"><span class="glyphicon glyphicon-plus"></span> Add a new Blog</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Title</th>
	 <th>Desc  </th>
    <th>Published By</th>
    <th>main Image  </th>
    <th>Small Image</th>

  
	

      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($blogs)): foreach($blogs as $blog): ?>
    <tr>
      
	
	
  <td><?php  echo $blog->title; ?></td>	
    <td><?php  echo substr($blog->desc,0,100) ; ?></td> 

  <td><?php  echo $blog->publishedby; ?></td> 

     <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/blog/".$blog->mainimage;?>"  > </td> 
       <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/blog/".$blog->smallimage;?>"  > </td> 

      
      <td align="center"><?php echo btn_edit('admin/Blog/edit/'. $blog->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Blog/delete/'. $blog->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Blog.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>