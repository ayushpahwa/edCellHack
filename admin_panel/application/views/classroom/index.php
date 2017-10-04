<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Classroom Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('classroom/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Classroom Id</th>
						<th>Course Id</th>
						<th>Teacher Id</th>
						<th>Group Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($classroom as $c){ ?>
                    <tr>
						<td><?php echo $c['classroom_id']; ?></td>
						<td><?php echo $c['course_id']; ?></td>
						<td><?php echo $c['teacher_id']; ?></td>
						<td><?php echo $c['group_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('classroom/edit/'.$c['classroom_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('classroom/remove/'.$c['classroom_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
