<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Group Edit</h3>
            </div>
			<?php echo form_open('group/edit/'.$group['group_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="branch" class="control-label">Branch</label>
						<div class="form-group">
							<input type="text" name="branch" value="<?php echo ($this->input->post('branch') ? $this->input->post('branch') : $group['branch']); ?>" class="form-control" id="branch" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="number" class="control-label">Number</label>
						<div class="form-group">
							<input type="text" name="number" value="<?php echo ($this->input->post('number') ? $this->input->post('number') : $group['number']); ?>" class="form-control" id="number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label">Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $group['year']); ?>" class="form-control" id="year" />
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