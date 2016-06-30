<h2>Calender</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Calender/newCalender"><span class="glyphicon glyphicon-plus"></span> Add a new Calender</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	 <th>Event Name </th>
    <th> Date </th>
 



      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($calenders)): foreach($calenders as $calender): ?>
    <tr>
      
	
  <td><?php  echo $calender->event; ?></td>	

  <td><?php  echo $calender->date; ?></td> 
    
      
      <td align="center"><?php echo btn_edit('admin/Calender/edit/'. $calender->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Calender/delete/'. $calender->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Events.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>