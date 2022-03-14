<?php include("header.php"); ?>
<div class="container">
	<?php  echo form_open("school/adminSignup", ['class' => 'form-horizontal']);?>
	
	<h3 class="display-3" style="text-align: center;">Staff Register</h3>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3" control-label> First Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'fname', 'class' => 'form-control', 'placeholder' => 'First Name']);?>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			</div>
	</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3" control-label> Last Name</label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'lname', 'class' => 'form-control', 'placeholder' => 'Last Name']);?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			</div>
		
	</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3" control-label> Email</label>
				<div class="col-md-9">
					<?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'email@someon.you']);?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			</div>
	
	</div>
	<div class="col-md-6">
			</div>
	</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3" control-label> Password</label>
				<div class="col-md-9">
					<?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']);?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			</div>
		</div>
		<button type="submit" class="btn btn-primary"> Register</button>
		<a href="<?php echo base_url("school")?>" class="btn btn-success btn-sm">BACK</a>
        </div>
	</div>
	<?php echo form_close();?>
</div>


<?php include("footer.php"); ?>