<h2>Testimonial</h2>
<p class="pull-right"><a class="btn btn-info" href="<?php echo site_url();?>admin/Testimonial/newTestimonial"><span class="glyphicon glyphicon-plus"></span> Add a new Testimonial</a></p>
<?php if($message) echo '<div class="error" align="center">'.$message.'</div>';?>
<table class="table table-bordered table-condensed table-responsive">
  <thead>
    <tr class="info">
	 <th>Name </th>
     <th>Testimonial </th>
          <th> Image </th>


      <th class="text-center" width="10%">Edit</th>
      <th class="text-center" width="10%">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($testimonials)): foreach($testimonials as $testimonial): ?>
    <tr>
      
	
  <td><?php  echo $testimonial->name; ?></td>	
    <td><?php  echo $testimonial->testimonial; ?></td> 

    <td class="text-center"><img width="75" height="45" src="<?php echo site_url()."uploads/testimonial/".$testimonial->image;?>"  > </td> 

  
      
      <td align="center"><?php echo btn_edit('admin/Testimonial/edit/'. $testimonial->id); ?></td>
      <td align="center"><?php echo btn_delete('admin/Testimonial/delete/'. $testimonial->id) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <td colspan="5">We could not find any Testimonials.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>