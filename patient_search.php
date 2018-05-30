<?php include('header.php'); ?>




	<div class="container-fluid slim">
		<div class="container">
			<div class="row">
				
				<h6>PATIENT SEARCH</h6>


			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="container">
			<div class="row" style="padding-top: 30px;">
				
					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">First name</label></div>
							<div class="col-6"><input type="text" class="form-control" placeholder="First name"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">Last name</label></div>
							<div class="col-6"><input type="text" class="form-control" placeholder="Last name"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">Joe #</label></div>
							<div class="col-6"><input type="text" class="form-control" placeholder=""></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">D.O.B</label></div>
							<div class="col-6"><input type="date" class="form-control" placeholder="dd/mm/yyyy"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">Gender</label></div>
							<div class="col-6">
								<select name="" id="" class="form-control">
									<option value="">--select</option>
									<option value="">Male</option>
									<option value="">Female</option>
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">State of Origin</label></div>
							<div class="col-6">
								<select name="" id="" class="form-control">
									<option value="">--select</option>
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">LGA</label></div>
							<div class="col-6">
								<select name="" id="" class="form-control">
									<option value="">--select</option>
								</select>
							</div>
						</div>
					</div>


					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">From Date</label></div>
							<div class="col-6"><input type="date" class="form-control" placeholder="dd/mm/yyyy"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">To Date</label></div>
							<div class="col-6"><input type="date" class="form-control" placeholder="dd/mm/yyyy"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">Mobile Number</label></div>
							<div class="col-6"><input type="text" class="form-control" placeholder="Phone Number"></div>
						</div>
					</div>


					<div class="col-md-4">
						<div class="row">
							<div class="col-6"><label for="">Means of ID</label></div>
							<div class="col-6">
								<select name="" id="" class="form-control">
									<option value="">--select</option>
								</select>

								<input type="text" class="form-control">
							</div>
						</div>
					</div>



					<div class="col-md-4">
										<label class="containers">&emsp;include all JOE facilities
							                 <input type="checkbox">
							                 <span class="checkmark" style="border-radius: 0px;"></span>
							             </label>
					</div>



					<div class="col-md-4 offset-md-8">
						<div class="row">
							<button class="btn col-4">Search</button>
							<button class="btn col-4">Clear</button>
							<button class="btn col-4">New patient</button>
						</div>
						
					</div>












					<div class="col-md-12" style="margin-top: 60px;margin-bottom: 60px;">
						<table class="table table-bordered" style="border: none;">
							<thead>
								<tr>
									<th>JOE #</th>
									<th>Pattient name</th>
									<th>Gender</th>
									<th>DOB</th>
									<th>State of Origin</th>
									<th>Email</th>
									<th>PHone</th>
									<th>Facility name</th>
								</tr>
							</thead>

							<tbody>
								<tr style="border: none;">
									<td colspan="8" class="text-center" style="font-weight: bold;border:none;"><br>Please provide the search criteria</td>
								</tr>
							</tbody>
						</table>
					</div>

			

			</div>
		</div>
	</div>








<style>
	.slim {
		background: #fbfbfb;
		height: 70px;
		padding-top: 34px;
		margin-top: 60px;
	}
	body {
		background: #fff !important;
	}
	h6 {
		font-weight: bold;
		margin-bottom: 20px;
		color: #4a4a4a
	}

	table {
    	 font-size: 13px;
    }
     button {
    	 background: #bac3ca;
    	 color: #fff;
    }
	label, .span {
		font-size: 13px;
		color: #4a4a4a;
	}
	 .form-control {
		box-shadow: none;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		font-size: 13px;
		color: #4a4a4a;
		height: 43px;
		margin-bottom: 10px;
	}
	button.btn {
		border-radius: 3px;
		-webkit-border-radius: 3px;
		font-size: 13px;
	}
</style>



<?php include('footer.php'); ?>