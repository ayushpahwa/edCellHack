<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Students Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('student/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Student Id</th>
						<th>Student Name</th>
						<th>Student Roll No</th>
						<th>Student Device No</th>
						<th>Student Email</th>
						<th>Group Id</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($students as $s){ ?>
                    <tr>
						<td><?php echo $s['student_id']; ?></td>
						<td><?php echo $s['student_name']; ?></td>
						<td><?php echo $s['student_roll_no']; ?></td>
						<td><?php echo $s['student_device_no']; ?></td>
						<td><?php echo $s['student_email']; ?></td>
						<td><?php echo $s['group_id']; ?></td>
						<td><?php echo $s['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('student/edit/'.$s['student_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('student/remove/'.$s['student_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
