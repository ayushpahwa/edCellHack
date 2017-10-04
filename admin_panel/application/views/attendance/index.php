<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Attendance Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('attendance/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Attendance Id</th>
						<th>Student Id</th>
						<th>Course Id</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($attendance as $a){ ?>
                    <tr>
						<td><?php echo $a['attendance_id']; ?></td>
						<td><?php echo $a['student_id']; ?></td>
						<td><?php echo $a['course_id']; ?></td>
						<td><?php echo $a['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('attendance/edit/'.$a['attendance_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('attendance/remove/'.$a['attendance_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
