<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Student Edit</h3>
            </div>
			<?php echo form_open('student/edit/'.$student['student_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="student_name" class="control-label">Student Name</label>
						<div class="form-group">
							<input type="text" name="student_name" value="<?php echo ($this->input->post('student_name') ? $this->input->post('student_name') : $student['student_name']); ?>" class="form-control" id="student_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="student_roll_no" class="control-label">Student Roll No</label>
						<div class="form-group">
							<input type="text" name="student_roll_no" value="<?php echo ($this->input->post('student_roll_no') ? $this->input->post('student_roll_no') : $student['student_roll_no']); ?>" class="form-control" id="student_roll_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="student_device_no" class="control-label">Student Device No</label>
						<div class="form-group">
							<input type="text" name="student_device_no" value="<?php echo ($this->input->post('student_device_no') ? $this->input->post('student_device_no') : $student['student_device_no']); ?>" class="form-control" id="student_device_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="student_email" class="control-label">Student Email</label>
						<div class="form-group">
							<input type="text" name="student_email" value="<?php echo ($this->input->post('student_email') ? $this->input->post('student_email') : $student['student_email']); ?>" class="form-control" id="student_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="group_id" class="control-label">Group Id</label>
						<div class="form-group">
							<input type="text" name="group_id" value="<?php echo ($this->input->post('group_id') ? $this->input->post('group_id') : $student['group_id']); ?>" class="form-control" id="group_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $student['timestamp']); ?>" class="form-control" id="timestamp" />
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