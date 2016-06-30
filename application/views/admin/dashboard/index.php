<h2>Activities</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Activities/newactivity"><span class="glyphicon glyphicon-plus"></span> Add New Activity</a></p>
<?php if($message){ ?>
<div class="alert alert-warning col-md-offset-3 col-md-6" role="alert"><?php echo $message;?></div>
<?php } ?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
      <th>Activity Name</th>
      <th>Activiity Brief</th>
      <th>Banner Image</th>
	  <th class="text-center" width="10%">Activity Desc.</th>
	
	   <th class="text-center" width="10%">View Images</th>
   <th class="text-center" width="10%">Edit Activity</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($activity)): foreach($activity as $act): ?>
    <tr>
      
	  <td><?php  echo $act->title; ?> </td>
	  <td><?php  echo $act->brief; ?> </td>
	  <td><img src="<?php echo site_url();?>uploads/activity/<?php echo $act->bimage; ?>" width="250" height="100" /> </td>
	  <td><?php  echo substr($act->desc,0,30);?> </td>
		<td align="center"><?php echo btn_edit('admin/activities/ViewImage/'. $act->actid); ?></td>
	    <td align="center"><?php echo btn_edit('admin/activities/edit/'. $act->actid); ?></td>
      
      <td align="center"><?php echo btn_delete('admin/activities/delete/'. $act->actid); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Activities.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<br/><br/>
