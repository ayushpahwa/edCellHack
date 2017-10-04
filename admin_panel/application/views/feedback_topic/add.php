<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Feedback Topic Add</h3>
            </div>
            <?php echo form_open('feedback_topic/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="lecture_id" class="control-label">Lecture Id</label>
						<div class="form-group">
							<input type="text" name="lecture_id" value="<?php echo $this->input->post('lecture_id'); ?>" class="form-control" id="lecture_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topic_id" class="control-label">Topic Id</label>
						<div class="form-group">
							<input type="text" name="topic_id" value="<?php echo $this->input->post('topic_id'); ?>" class="form-control" id="topic_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="rating" class="control-label">Rating</label>
						<div class="form-group">
							<input type="text" name="rating" value="<?php echo $this->input->post('rating'); ?>" class="form-control" id="rating" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo $this->input->post('timestamp'); ?>" class="form-control" id="timestamp" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>