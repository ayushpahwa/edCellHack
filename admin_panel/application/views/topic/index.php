<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Topics Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('topic/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Topic Id</th>
						<th>Topic Name</th>
						<th>Course Id</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($topics as $t){ ?>
                    <tr>
						<td><?php echo $t['topic_id']; ?></td>
						<td><?php echo $t['topic_name']; ?></td>
						<td><?php echo $t['course_id']; ?></td>
						<td><?php echo $t['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('topic/edit/'.$t['topic_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('topic/remove/'.$t['topic_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
