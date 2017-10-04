<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Feedback Topic Edit</h3>
            </div>
			<?php echo form_open('feedback_topic/edit/'.$feedback_topic['feedback_topic_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="lecture_id" class="control-label">Lecture Id</label>
						<div class="form-group">
							<input type="text" name="lecture_id" value="<?php echo ($this->input->post('lecture_id') ? $this->input->post('lecture_id') : $feedback_topic['lecture_id']); ?>" class="form-control" id="lecture_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topic_id" class="control-label">Topic Id</label>
						<div class="form-group">
							<input type="text" name="topic_id" value="<?php echo ($this->input->post('topic_id') ? $this->input->post('topic_id') : $feedback_topic['topic_id']); ?>" class="form-control" id="topic_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="rating" class="control-label">Rating</label>
						<div class="form-group">
							<input type="text" name="rating" value="<?php echo ($this->input->post('rating') ? $this->input->post('rating') : $feedback_topic['rating']); ?>" class="form-control" id="rating" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $feedback_topic['timestamp']); ?>" class="form-control" id="timestamp" />
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