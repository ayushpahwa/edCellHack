<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Classroom Edit</h3>
            </div>
			<?php echo form_open('classroom/edit/'.$classroom['classroom_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="course_id" class="control-label">Course Id</label>
						<div class="form-group">
							<input type="text" name="course_id" value="<?php echo ($this->input->post('course_id') ? $this->input->post('course_id') : $classroom['course_id']); ?>" class="form-control" id="course_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="teacher_id" class="control-label">Teacher Id</label>
						<div class="form-group">
							<input type="text" name="teacher_id" value="<?php echo ($this->input->post('teacher_id') ? $this->input->post('teacher_id') : $classroom['teacher_id']); ?>" class="form-control" id="teacher_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="group_id" class="control-label">Group Id</label>
						<div class="form-group">
							<input type="text" name="group_id" value="<?php echo ($this->input->post('group_id') ? $this->input->post('group_id') : $classroom['group_id']); ?>" class="form-control" id="group_id" />
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