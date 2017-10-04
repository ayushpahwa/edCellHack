<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Teachers Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('teacher/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Teacher Id</th>
						<th>Teacher Name</th>
						<th>Teacher Email</th>
						<th>Teacher Phone</th>
						<th>Teacher Device Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($teachers as $t){ ?>
                    <tr>
						<td><?php echo $t['teacher_id']; ?></td>
						<td><?php echo $t['teacher_name']; ?></td>
						<td><?php echo $t['teacher_email']; ?></td>
						<td><?php echo $t['teacher_phone']; ?></td>
						<td><?php echo $t['teacher_device_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('teacher/edit/'.$t['teacher_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('teacher/remove/'.$t['teacher_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
