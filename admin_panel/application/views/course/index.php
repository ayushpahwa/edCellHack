<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Courses Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('course/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Course Id</th>
						<th>Course Code</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($courses as $c){ ?>
                    <tr>
						<td><?php echo $c['course_id']; ?></td>
						<td><?php echo $c['course_code']; ?></td>
						<td>
                            <a href="<?php echo site_url('course/edit/'.$c['course_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('course/remove/'.$c['course_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
