<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lectures Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lecture/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Lecture Id</th>
						<th>Classroom Id</th>
						<th>Group Id</th>
						<th>Status</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lectures as $l){ ?>
                    <tr>
						<td><?php echo $l['lecture_id']; ?></td>
						<td><?php echo $l['classroom_id']; ?></td>
						<td><?php echo $l['group_id']; ?></td>
						<td><?php echo $l['status']; ?></td>
						<td><?php echo $l['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('lecture/edit/'.$l['lecture_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lecture/remove/'.$l['lecture_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
