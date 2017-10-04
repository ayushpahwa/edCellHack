<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Feedback Edit</h3>
            </div>
			<?php echo form_open('feedback/edit/'.$feedback['feedback_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="lecture_id" class="control-label">Lecture Id</label>
						<div class="form-group">
							<input type="text" name="lecture_id" value="<?php echo ($this->input->post('lecture_id') ? $this->input->post('lecture_id') : $feedback['lecture_id']); ?>" class="form-control" id="lecture_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="student_id" class="control-label">Student Id</label>
						<div class="form-group">
							<input type="text" name="student_id" value="<?php echo ($this->input->post('student_id') ? $this->input->post('student_id') : $feedback['student_id']); ?>" class="form-control" id="student_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="experience" class="control-label">Experience</label>
						<div class="form-group">
							<input type="text" name="experience" value="<?php echo ($this->input->post('experience') ? $this->input->post('experience') : $feedback['experience']); ?>" class="form-control" id="experience" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $feedback['timestamp']); ?>" class="form-control" id="timestamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="improvements" class="control-label">Improvements</label>
						<div class="form-group">
							<textarea name="improvements" class="form-control" id="improvements"><?php echo ($this->input->post('improvements') ? $this->input->post('improvements') : $feedback['improvements']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacher_feedback" class="control-label">Teacher Feedback</label>
						<div class="form-group">
							<textarea name="teacher_feedback" class="form-control" id="teacher_feedback"><?php echo ($this->input->post('teacher_feedback') ? $this->input->post('teacher_feedback') : $feedback['teacher_feedback']); ?></textarea>
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