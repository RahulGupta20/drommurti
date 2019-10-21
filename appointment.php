<?php include('includes/header.php'); ?>
<section class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card rounded-0">
					<div class="card-header bg-white p-0">
						<!-- <h4 class="mb-0">
							Appointment Form
						</h4> -->
						<blockquote class="blockquote mb-0">
						  <p class="mb-0">Appointment Form</p>
						</blockquote>
					</div>
					<div class="card-block">
						<!-- <h4>Appointment Form</h4>
						<hr> -->
						
					  	<form class="cstm-form">
					  		<div class="form-group row">
						      <label for="" class="col-sm-3 col-form-label text-right">Select a Department</label>
						      <div class="col-sm-8">
						        <select class="custom-select w-100 rounded-0">
								  <option selected>Gynacelogy</option>
								  <option value="1">Blood Bank</option>
								  <option value="2">Ophthalmology</option>
								  <option value="3">Oncology</option>
								</select>
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="" class="col-sm-3 col-form-label text-right">First Name</label>
						      <div class="col-sm-8">
						        <input type="text" name="" class="form-control rounded-0" id="" placeholder="">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="" class="col-sm-3 col-form-label text-right">Last Name</label>
						      <div class="col-sm-8">
						        <input type="text" name="" class="form-control rounded-0" id="inputPassword3" placeholder="">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="" class="col-sm-3 col-form-label text-right">Date of Birth</label>
						      <div class="col-sm-8">
						        <input type="date" name="" class="form-control rounded-0" id="inputPassword3">
						      </div>
						    </div>
						    <div class="form-group row">
						      	<label for="" class="col-sm-3 text-right">Sex</label>
						      	<div class="col-sm-8">
									<label class="custom-control custom-radio">
									  	<input id="radio1" name="radio" type="radio" class="custom-control-input">
										  <span class="custom-control-indicator"></span>
										  <span class="custom-control-description">Men </span>
									</label>
									<label class="custom-control custom-radio">
										  <input id="radio2" name="radio" type="radio" class="custom-control-input">
										  <span class="custom-control-indicator"></span>
										  <span class="custom-control-description">Female </span>
									</label>
									<label class="custom-control custom-radio">
										  <input id="radio2" name="radio" type="radio" class="custom-control-input">
										  <span class="custom-control-indicator"></span>
										  <span class="custom-control-description">Child </span>
									</label>
						      	</div>
						    </div>
						    <div class="form-group row">
						      	<label for="" class="col-sm-3 col-form-label text-right">Email </label>
						      <div class="col-sm-8">
						        <input type="text" name="" class="form-control rounded-0" id="" placeholder="">
						      </div>
						    </div>
						    <div class="form-group row">
						      	<label for="" class="col-sm-3 col-form-label text-right">Phone  </label>
						      	<div class="col-sm-8">
						        	<input type="text" name="" class="form-control rounded-0" id="" placeholder="">
						      	</div>
						    </div>
						    <div class="form-group row">
						      	<label for="" class="col-sm-3 col-form-label text-right">Message   </label>
						      	<div class="col-sm-8">
						        	<textarea class="form-control rounded-0" id="exampleTextarea" rows="4"></textarea>
						      	</div>
						    </div>
					  	</form>
					</div>
					<div class="card-footer bg-white text-right">
						<div class="row">
							<div class="col-md-3 offset-md-8">
						<a href="#" class="btn btn-primary text-capitalize rounded-0">submit</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php include('includes/right-sidebar/recent-updates.php');?>
				<?php include('includes/right-sidebar/book_an_appointment.php');?>
			</div>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>