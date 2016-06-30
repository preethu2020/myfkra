<h2>Client</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Clients/newClient"><span class="glyphicon glyphicon-plus"></span> Add a new client</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Client Logo </th>
	 <th>Client Name  </th>
	 <th>Background image  .</th>

      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($clients)): foreach($clients as $_client): ?>
    <tr>
      
	
	  <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/client/".$_client->black_logo;?>"  > </td> 
  <td><?php  echo $_client->name; ?></td>	
  <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/client/".$_client->bgimg;?>"  > </td> 
      
      <td align="center"><?php echo btn_edit('admin/Clients/edit/'. $_client->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Clients/delete/'. $_client->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Clients.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>