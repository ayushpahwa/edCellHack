<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Teacher Edit</h3>
            </div>
			<?php echo form_open('teacher/edit/'.$teacher['teacher_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="teacher_name" class="control-label">Teacher Name</label>
						<div class="form-group">
							<input type="text" name="teacher_name" value="<?php echo ($this->input->post('teacher_name') ? $this->input->post('teacher_name') : $teacher['teacher_name']); ?>" class="form-control" id="teacher_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacher_email" class="control-label">Teacher Email</label>
						<div class="form-group">
							<input type="text" name="teacher_email" value="<?php echo ($this->input->post('teacher_email') ? $this->input->post('teacher_email') : $teacher['teacher_email']); ?>" class="form-control" id="teacher_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacher_phone" class="control-label">Teacher Phone</label>
						<div class="form-group">
							<input type="text" name="teacher_phone" value="<?php echo ($this->input->post('teacher_phone') ? $this->input->post('teacher_phone') : $teacher['teacher_phone']); ?>" class="form-control" id="teacher_phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacher_device_id" class="control-label">Teacher Device Id</label>
						<div class="form-group">
							<input type="text" name="teacher_device_id" value="<?php echo ($this->input->post('teacher_device_id') ? $this->input->post('teacher_device_id') : $teacher['teacher_device_id']); ?>" class="form-control" id="teacher_device_id" />
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