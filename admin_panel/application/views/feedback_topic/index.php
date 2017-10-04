<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Feedback Topics Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('feedback_topic/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Feedback Topic Id</th>
						<th>Lecture Id</th>
						<th>Topic Id</th>
						<th>Rating</th>
						<th>Timestamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($feedback_topics as $f){ ?>
                    <tr>
						<td><?php echo $f['feedback_topic_id']; ?></td>
						<td><?php echo $f['lecture_id']; ?></td>
						<td><?php echo $f['topic_id']; ?></td>
						<td><?php echo $f['rating']; ?></td>
						<td><?php echo $f['timestamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('feedback_topic/edit/'.$f['feedback_topic_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('feedback_topic/remove/'.$f['feedback_topic_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
