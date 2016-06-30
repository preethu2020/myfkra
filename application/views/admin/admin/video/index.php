<h2>Video</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/video/newpage"><span class="glyphicon glyphicon-plus"></span> Add a video</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Video Title</th>
      <th>Video Details</th>
	  
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($first_video)): foreach($first_video as $fv): ?>
    <tr>
      <td><?php echo anchor('admin/news/edit/'.$fv->v_id, $fv->v_name); ?></td>
            <td><?php echo $fv->v_desc; ?></td>
      <td align="center"><?php echo btn_edit('admin/video/edit/'. $fv->v_id); ?></td>
      <td align="center"><?php echo btn_delete('admin/video/delete/'. $fv->v_id); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any articles.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>