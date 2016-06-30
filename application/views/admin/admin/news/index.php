<h2>News</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/news/newpage"><span class="glyphicon glyphicon-plus"></span> Add a news</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Title</th>
      <th>Published Date</th>
	  <th class="text-center" width="10%">Disabled</th>
      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($news)): foreach($news as $new): ?>
    <tr>
      <td><?php echo anchor('admin/news/edit/'.$new->id, $new->title); ?></td>
      <td><?php echo formatdate($new->pubdate); ?></td>
      <td align="center"><?php if($new->disabled==1) echo "Yes"; else echo "No"; ?></td>
      <td align="center"><?php echo btn_edit('admin/news/edit/'. $new->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/news/delete/'. $new->id); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any articles.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>