<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lecture Edit</h3>
            </div>
			<?php echo form_open('lecture/edit/'.$lecture['lecture_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="classroom_id" class="control-label">Classroom Id</label>
						<div class="form-group">
							<input type="text" name="classroom_id" value="<?php echo ($this->input->post('classroom_id') ? $this->input->post('classroom_id') : $lecture['classroom_id']); ?>" class="form-control" id="classroom_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="group_id" class="control-label">Group Id</label>
						<div class="form-group">
							<input type="text" name="group_id" value="<?php echo ($this->input->post('group_id') ? $this->input->post('group_id') : $lecture['group_id']); ?>" class="form-control" id="group_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $lecture['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $lecture['timestamp']); ?>" class="form-control" id="timestamp" />
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