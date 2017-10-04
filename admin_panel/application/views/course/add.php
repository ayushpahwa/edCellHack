<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Course Add</h3>
            </div>
            <?php echo form_open('course/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="course_code" class="control-label">Course Code</label>
						<div class="form-group">
							<input type="text" name="course_code" value="<?php echo $this->input->post('course_code'); ?>" class="form-control" id="course_code" />
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