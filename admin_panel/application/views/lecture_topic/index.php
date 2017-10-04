<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lecture Topics Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lecture_topic/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Lecture Topic Id</th>
						<th>Lecture Id</th>
						<th>Topic Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lecture_topics as $l){ ?>
                    <tr>
						<td><?php echo $l['lecture_topic_id']; ?></td>
						<td><?php echo $l['lecture_id']; ?></td>
						<td><?php echo $l['topic_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('lecture_topic/edit/'.$l['lecture_topic_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lecture_topic/remove/'.$l['lecture_topic_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
