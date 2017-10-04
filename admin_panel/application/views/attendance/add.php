<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Attendance Add</h3>
            </div>
            <?php echo form_open('attendance/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="student_id" class="control-label">Student Id</label>
						<div class="form-group">
							<input type="text" name="student_id" value="<?php echo $this->input->post('student_id'); ?>" class="form-control" id="student_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="course_id" class="control-label">Course Id</label>
						<div class="form-group">
							<input type="text" name="course_id" value="<?php echo $this->input->post('course_id'); ?>" class="form-control" id="course_id" />
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