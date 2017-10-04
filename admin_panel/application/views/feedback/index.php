<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Feedback Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('feedback/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Feedback Id</th>
						<th>Lecture Id</th>
						<th>Student Id</th>
						<th>Experience</th>
						<th>Timestamp</th>
						<th>Improvements</th>
						<th>Teacher Feedback</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($feedback as $f){ ?>
                    <tr>
						<td><?php echo $f['feedback_id']; ?></td>
						<td><?php echo $f['lecture_id']; ?></td>
						<td><?php echo $f['student_id']; ?></td>
						<td><?php echo $f['experience']; ?></td>
						<td><?php echo $f['timestamp']; ?></td>
						<td><?php echo $f['improvements']; ?></td>
						<td><?php echo $f['teacher_feedback']; ?></td>
						<td>
                            <a href="<?php echo site_url('feedback/edit/'.$f['feedback_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('feedback/remove/'.$f['feedback_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
