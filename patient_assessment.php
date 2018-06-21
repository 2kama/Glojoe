<?php include('header.php'); ?>






<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


       <div class="row">
		  <div class="col-12">
		    <div class="list-group" id="list-tab" role="tablist">
		      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">General</a>
		      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">PMHx / Meds</a>
		      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Screening</a>
		      
		    </div>
		  </div>
		  <div class="col-12">
		    <div class="tab-content" id="nav-tabContent">

		      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
		      	
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 20px;">JOSHUA OLUWAGBEMIGA :  16 / 01 / 1994 ( 23 years Old )</div>

						<div class="col-md-6">
							<label for="">Chief Complaint</label>
							<div class="row">
								<div class="col-6">
									<select name="" id="" class="form-control">
										<option value=""></option>
									</select>
								</div>
								<div class="col-6">
									<input type="text" class="form-control" disabled placeholder="only if other is picked">
								</div>
							</div>

							<div class="row" style="background: #f5f5f5;padding: 10px;">
								<span style="width: 100%;padding-left: 10px;margin-bottom: 20px;font-weight: 600;">Vital</span>

								<div class="col-3"><label for="">Temp ( °C )</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-5"><select name="" id="" class="form-control">
									<option value=""></option>
								</select></div>
								<div class="col-1"></div>

								<div class="col-3"><label for="">RB glucose</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-6"></div>

								<div class="col-3"><label for="">BP</label></div>
								<div class="col-2"><input type="text" class="form-control"></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-1"><label for="">Resp</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>


								<div class="col-3"><label for="">02 SAT</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-3"><label for="">% Fi02</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>

								<div class="col-3"><label for="">Pulse/ HR</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-3"><label for="">HT ( cm )</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>

								<div class="col-3"><label for="">Wt ( kg )</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-6"></div>

								<div class="col-3"><label for="">GCS</label></div>
								<div class="col-2"><input type="text" class="form-control"></div>
								<div class="col-2"><select name="" id="" class="form-control">
									<option value=""></option>
								</select></div>
								<div class="col-2"><select name="" id="" class="form-control">
									<option value=""></option>
								</select></div>
								<div class="col-2"><select name="" id="" class="form-control">
									<option value=""></option>
								</select></div>


								<span style="width: 100%;padding-left: 10px;margin-bottom: 20px;font-weight: 600;">GYN History</span>

								<div class="col-3"><label for="">LMP : G :</label></div>
								<div class="col-2"><input type="text" class="form-control"></div>
								<div class="col-1"><label for="">P</label></div>
								<div class="col-3"><input type="text" class="form-control"></div>
								<div class="col-3"><input type="date" class="form-control"></div>



							</div>


							<div class="row" style="padding-top: 30px;">
								<div class="col-6"><label for="">Is Cardial monitor required?</label></div>
								<div class="col-6">
									<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
							                 <input type="radio" name="disabled">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">&nbsp; No
							                 <input type="radio" name="disabled">
							                 <span class="checkmark"></span>
							             </label>
								</div>

								<div class="col-6"><label for="">Is oxygen required?</label></div>
								<div class="col-6">
									<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
							                 <input type="radio" name="dd">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">&nbsp; No
							                 <input type="radio" name="dd">
							                 <span class="checkmark"></span>
							             </label>
								</div>


							</div>

						</div>

						<div class="col-md-6">
							<div class="row">
								
								<div class="col-6">
									<label for="">Pain Severity</label>
									<select name="" id="" class="form-control">
										<option value=""></option>
									</select>
								</div>

								<div class="col-6">
									<label for="">Arrival by</label>
									<select name="" id="" class="form-control">
										<option value="">select</option>
									</select>
								</div>

								<div class="col-6">
									<label for="">Pain location</label>
									<select name="" id="" class="form-control">
										<option value=""></option>
									</select>
								</div>

								<div class="col-6">
									<label for="">Mode of arrival</label>
									<select name="" id="" class="form-control">
										<option value=""></option>
									</select>
								</div>

								<div class="col-6"></div>
								<div class="col-6">
									<input type="text" class="form-control" disabled placeholder="if other is selected">
								</div>


								<div class="col-6">
									<label for="">Pain relieved by</label>
									<input type="text" class="form-control">
								</div>

								<div class="col-6">
									<label for="">Preferred language</label>
									<select name="" id="" class="form-control">
										<option value=""></option>
									</select>
								</div>


								<div class="col-6">
									<label for="">Pain aggravated by</label>
									<input type="text" class="form-control">
								</div>

								<div class="col-6">
									<label for="">Mode of communication</label>
									<select name="" id="" class="form-control">
										<option value=""></option>
									</select>
								</div>


								<div class="col-12">
									<label class="containers">&emsp;check if patient is critical
							                 <input type="checkbox">
							                 <span class="checkmark" style="border-radius: 0px;"></span>
							             </label>
								</div>


								<div class="col-12">
									<label for="">Acuity level</label>
								
								</div>

								<div class="col-12">
									<label class="containerss">1&emsp;
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">2&emsp;
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>

							             <label class="containerss">3&emsp; 
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">4
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


								</div>



							</div>
						</div>


						<div class="col-md-12">
							<label for="">Triage Assessment</label>

							<textarea name="" id="" cols="30" rows="10" class="form-control col-md-5" style="height: 100px;"></textarea>
						</div>



						<div class="col-md-6 offset-md-6" style="margin-top: 15px;">
							<button class="btn col-md-2">PREVIOUS</button>
							<button class="btn col-md-2">NEXT</button>
							<button class="btn col-md-2">SUBMIT</button>
						</div>



					</div>

		      </div>

		      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
		      	
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 20px;">JOSHUA OLUWAGBEMIGA :  16 / 01 / 1994 ( 23 years Old )</div>

						  <div class="col-md-12">
						  	<label for="">Past Medical History ( PMH )</label>

						  	<div class="row">
						  		<div class="col-md-6"><input type="text" class="form-control" disabled></div>
						  		<div class="col-md-1"><button class="btn"> > </button></div>
						  		<div class="col-md-5"><input type="text" class="form-control"></div>

						  		<div class="col-md-6"><input type="text" class="form-control" placeholder="None, Asthma , Cancer, COPD"></div>
						  		<div class="col-md-1"><button class="btn"> < </button></div>
						  		<div class="col-md-5"><input type="text" class="form-control" disabled></div>
							</div>

							<label for="">Past Surgical History ( PSH )</label>
							<div class="row">

						  		<div class="col-md-6"><input type="text" class="form-control" disabled></div>
						  		<div class="col-md-1"><button class="btn"> > </button></div>
						  		<div class="col-md-5"><input type="text" class="form-control"></div>

						  		<div class="col-md-6"><input type="text" class="form-control" placeholder="None, Asthma , Cancer, COPD"></div>
						  		<div class="col-md-1"><button class="btn"> < </button></div>
						  		<div class="col-md-5"><input type="text" class="form-control" disabled></div>
						  	</div>


						  	<label for="">Allergies</label>
						  	<div class="row">
						  		<div class="col-md-6">
						  			<textarea name="" style="height: 100px;" id="" cols="30" rows="10" class="form-control"></textarea>
						  		</div>
						  	</div>

							<label for="">Active Modifications</label>
						  	<div class="row">
						  		<div class="col-md-6">
						  			<textarea name="" style="height: 100px;" id="" cols="30" rows="10" class="form-control"></textarea>
						  		</div>
						  	</div>


						  	<label for="">Data Source</label>
						  	<div class="row">
						  		<div class="col-md-6">
						  			<select name="" id="" class="form-control">
						  				<option value=""></option>
						  			</select>

						  			<input type="text" class="form-control" disabled placeholder="when other is selected">
						  		</div>

						  		<div class="col-md-6">
						  			<div class="col-12">
									<label for="">Acuity level</label>
								
								</div>

								<div class="col-12">
									<label class="containerss">1&emsp;
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">2&emsp;
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>

							             <label class="containerss">3&emsp; 
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">4
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


								</div>
						  		</div>
						  	</div>


						  	<label for="">Immunization Tetanus</label>
						  	<div class="col-md-4">
						  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
							                 <input type="radio" name="ss">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">&nbsp; No
							                 <input type="radio" name="ss">
							                 <span class="checkmark"></span>
							             </label>
						  	</div>

						  	<div class="col-md-4">
						  		<input type="text" class="form-control" placeholder="display date">
						  	</div>

						  	<div class="col-md-4"></div>




						  	<label for="">Is oxygen needed?</label>
						  	<div class="col-md-4">
						  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
							                 <input type="radio" name="qq">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">&nbsp; No
							                 <input type="radio" name="qq">
							                 <span class="checkmark"></span>
							             </label>
						  	</div>



						  </div>





						  <div class="col-md-12">
							<label for="">Triage Assessment</label>

							<textarea name="" id="" cols="30" rows="10" class="form-control col-md-5" style="height: 100px;"></textarea>
						</div>



						<div class="col-md-6 offset-md-6" style="margin-top: 15px;">
							<button class="btn col-md-2">PREVIOUS</button>
							<button class="btn col-md-2">NEXT</button>
							<button class="btn col-md-2">SUBMIT</button>
						</div>


					</div>


		      </div>

		      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
		      	 <div class="row">
		      	 		<div class="col-md-12" style="margin-bottom: 20px;">JOSHUA OLUWAGBEMIGA :  16 / 01 / 1994 ( 23 years Old )</div>




		      	 		<div class="col-md-6">
		      	 			
							
							<div class="row">

								<h6 class="col-md-12" style="font-weight: 600;margin-bottom: 20px;">PATIENT SAFETY</h6>
								
								<div class="col-md-12"><label for="">Are you thinking About Hurting yourself?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ab">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ab">
								           <span class="checkmark"></span>
								     </label>
							  	</div>



							  	<div class="col-md-12"><label for="">Are you thinking About Hurting Someone?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ac">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ac">
								           <span class="checkmark"></span>
								     </label>
							  	</div>



							  	<div class="col-md-12"><label for="">Is Someone else  Hurting you?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ad">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ad">
								           <span class="checkmark"></span>
								     </label>
							  	</div>

								

								<h6 class="col-md-12" style="font-weight: 600;margin-bottom: 20px;margin-top: 20px;">SOCIAL HISTORY</h6>

							  	<div class="col-md-12"><label for="">Do you use any recreational drug ?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ae">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ae">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-12"><label for="">Do you smoke tobacco</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="af">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="af">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-12"><label for="">Do you drink alcohol? </label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ag">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ag">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-6">
							  		<label for="">Who do you live with?</label>
							  	</div>

							  	<div class="col-md-6">
							  		<input type="text" class="form-control">
							  	</div>



							  	<div class="col-md-12"><label for="">Independent in ADL? </label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ah">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ah">
								           <span class="checkmark"></span>
								     </label>
							  	</div>






							</div>

		      	 		</div>





		      	 		<div class="col-md-6">
		      	 			

		      	 			<div class="row">
		      	 				
								<h6 class="col-md-12" style="font-weight: 600;margin-bottom: 20px;">FALLEN RISK</h6>
								
								<div class="col-md-12"><label for="">Have you fallen in the last 10 days?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ai">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ai">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-12"><label for="">Are you afraid of falling?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="aj">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="aj">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<h6 class="col-md-12" style="font-weight: 600;margin-bottom: 20px;margin-top: 20px;">FALLEN RISK</h6>

							  	<div class="col-md-12"><label for="">History of heart failure?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="ak">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="ak">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-12"><label for="">Admitted within the last 30 days?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="al">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="al">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-12"><label for="">Increase of shortness of breath?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="am">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="am">
								           <span class="checkmark"></span>
								     </label>
							  	</div>


							  	<div class="col-md-12"><label for="">Increase of peripheral edema or abdominal ascites?</label></div>
							  	<div class="col-md-12">
							  		<label class="containerss">&nbsp; Yes&emsp;&emsp;&emsp;
								         <input type="radio" name="an">
								         <span class="checkmark"></span>
								    </label>

									<label class="containerss">&nbsp; No
								           <input type="radio" name="an">
								           <span class="checkmark"></span>
								     </label>
							  	</div>




							  	<div class="col-12">
									<label for="">Acuity level</label>
								
								</div>

								<div class="col-12">
									<label class="containerss">1&emsp;
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">2&emsp;
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>

							             <label class="containerss">3&emsp; 
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


							             <label class="containerss">4
							                 <input type="radio" name="aa">
							                 <span class="checkmark"></span>
							             </label>


								</div>






		      	 			</div>
		      	 		</div>






						<div class="col-md-12">
							<label for="">Triage Assessment</label>

							<textarea name="" id="" cols="30" rows="10" class="form-control col-md-5" style="height: 100px;"></textarea>
						</div>



						<div class="col-md-6 offset-md-6" style="margin-top: 15px;">
							<button class="btn col-md-2">PREVIOUS</button>
							<button class="btn col-md-2">NEXT</button>
							<button class="btn col-md-2">SUBMIT</button>
						</div>



		      	 </div>
		      </div>

		    </div>
		  </div>
		</div>




    </div>
  </div>
</div>



<style>
	.modal-dialog.modal-lg {
		 min-width: 80% !important;
	}
	.tab-pane {
		 padding: 30px;
	}
	.list-group {
		flex-direction: row;
		height: 51px; 
		background: #fbfbfb;
		border-bottom: #e0e2e5;
	}

	.list-group a.list-group-item {
		height: 100%;
		width: auto;
		color: #4a4a4a;
		border: none;
		background: transparent;
		margin-left: 15px;
	}
	.list-group a.list-group-item.active {
		 background: transparent;
		 border: none;
		 border-bottom: 2px solid #3c9b34;
		 color: #4a4a4a;

	}

	 label, .span {
		font-size: 12px;
		color: #4a4a4a;
	}
	.form-control {
		box-shadow: none;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		font-size: 13px;
		color: #4a4a4a;
		height: 30px;
		margin-bottom: 10px;
	}
	.form-control:focus {
		border: 1px solid #ccc;
		box-shadow: none;
	}

</style>



 <div class="container-fluid user">
 	<div class="container">
 		<div class="row">
 			
			<div class="col-md-2">
				<img src="/miniJoe/img/avatar.jpg" alt="" class="src">

				<div class="col-md-12">Date Taken :</div>
			</div>

			<div class="col-md-3">
				<div class="col-md-12"><b>OLUWAGBEMIGA JOSHUA</b></div>
				<div class="col-md-12"><b>DOB </b> 15th June, 1994 (23 years)</div>
				<div class="col-md-12"><b>Male </b></div>
				<div class="col-md-12"><b>MRN # </b></div>
				<div class="col-md-12"><b>PCP </b></div>
			</div>

			<div class="col-md-3">
				<div class="col-md-12"><b>Location </b> Victoria Island</div>
				<div class="col-md-12"><b>Visit # </b> 0000000084</div>
				<div class="col-md-12"><b>JOE # </b> 00000000084</div>
				<div class="col-md-12"><b>RN </b> </div>
				<div class="col-md-12"><b>PA/NP </b> </div>
				<div class="col-md-12"><b>ATTG </b> </div>
			</div>

			<div class="col-md-3">
				<div class="col-md-12"><b>Date of arrival </b> 29/11/1018</div>
				<div class="col-md-12"><b>Triage time </b> 15:12 ( 08:15)</div>
				<div class="col-md-12"><b>Total LOS </b> 0000000084</div>
				<div class="col-md-12"><b>Time to pain Medication :</b> </div>
				<div class="col-md-12"><b>Time to antibiotics </b> </div>
			</div>

			<div class="col-md-1">
				<div class="col-md-12"><b>Medication</b></div>
				<div class="col-md-12"><b>Allergies</b></div>
				<div class="col-md-12"><a href="" style="color:#3c9b34;">view details</a></div>
			</div>

 		</div>
 	</div>
 </div>


 <div class="container-fluid">
 	<div class="container">
 		<div class="row fines">
 			
			<a href=""><div class="lope"><i class="fa fa-id-card"></i></div><span>Registration</span></a>

			<a href="javascript:;" data-toggle="modal" data-target=".bd-example-modal-lg"><div class="lope"><i class="material-icons">edit</i></div><span>Triage</span></a>

			<a href=""><div class="lope"><i class="fa fa-thermometer-quarter"></i></div><span>Vitals</span></a>

			<a href=""><div class="lope"><i class="material-icons">library_books</i></div><span>Notes</span></a>

			<a href=""><div class="lope"><i class="material-icons">chat_bubble_outline</i></div><span>Alerts</span></a>

			<a href=""><div class="lope"><i class="material-icons">list</i></div><span>Orders</span></a>

			<a href=""><div class="lope"><i class="material-icons">radio_button_checked</i></div><span>Treatment</span></a>

			<a href=""><div class="lope"><i class="fa fa-flask"></i></div><span>Lab</span></a>

			<a href=""><div class="lope"><i class="fa fa-exclamation-triangle"></i></div><span>Radiology</span></a>

			<a href=""><div class="lope"><i class="material-icons">exit_to_app</i></div><span>Disposition</span></a>

			<a href=""><div class="lope"><i class="material-icons">visibility</i></div><span>See All</span></a>

			<a href=""><div class="lope"><i class="fa fa-medkit"></i></div><span>My Health</span></a>





 		</div>
 	</div>
 </div>






  <div class="container-fluid user" style="margin-top: 20px;">
 	<div class="container">
 		<div class="row">


 			<div class="col-md-6 offset-md-6 fix" style="margin-top: 60px;">
										<button class="btn col-md-3">ADD NEW COMMENTS</button>
										<button class="btn col-md-3">ADD TO CART</button>
										<button class="btn col-md-3">READY FOR CODING</button>
									</div>



			<div class="col-md-6" style="padding: 40px;">
				<div class="row" style="background: #d8d8d8;height: 500px;padding: 20px;">
					<div class="col-md-12" style="background: #fff;overflow-y: auto;">
						<div class="row fine" style="padding: 10px;">
							<div class="col-12">TRIAGE</div>
							<div class="col-5"><b>Triage by:</b></div><div class="col-7">Dr. Gbenga Olukoya</div>
							<div class="col-5"><b>Date</b></div><div class="col-7">12/04/2018</div>
							<div class="col-5"><b>CC</b></div><div class="col-7">Dry Cough</div>
							<div class="col-5"><b>Pain severity</b></div><div class="col-7">Mild pain</div>
							<div class="col-5"><b>Arrival by</b></div><div class="col-7">Self</div>
							<div class="col-5"><b></b>Pain Location</div><div class="col-7">Throat</div>

							<span>VITALS</span>
							<div class="col-5"><b>Temp</b></div><div class="col-7">30C</div>
							<div class="col-5"><b>BP</b></div><div class="col-7">110/80</div>
							<div class="col-5"><b>RESP</b></div><div class="col-7">Normal</div>
							<div class="col-5"><b>02 SAT</b></div><div class="col-7">Normal</div>
							<div class="col-5"><b>FIO2</b></div><div class="col-7">Normal</div>

							<span>ALLERGIES</span>
							<div class="col-12">
								Penicillin and related drugs<br>
								Sulfa drugs<br>
								Insulin<br>
								Iodine
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12" style="margin-top: 15px;">
					<button class="btn col-md-3">TIME SORT</button>
					<button class="btn col-md-3">CLEAR ALL</button>
				</div>
			</div>


			<div class="col-md-6" style="padding: 40px;">
				<div class="row" style="background: #d8d8d8;height: 500px;">
					
				</div>

				<div class="col-md-12" style="margin-top: 15px;">
					<button class="btn col-md-3">CLEAR</button>
				</div>
			</div>
 			


		</div>
	</div>
</div>






<style>
	.fine span {
		 width: 100%;
		 background: #f8f8f8;
		 padding: 10px;
		 font-weight: 600;
		 margin-top: 17px;
		 margin-bottom: 17px;
	}
	.fine .col-12 {
		font-weight: 600;
		margin-bottom: 7px;
		margin-top: 7px;
	}
     button {
    	color: #fff;
    	font-size: 11px;
    	background: #bac3ca;
    }
	.user {
		margin-top: 60px;
		padding-top: 40px;
		padding-bottom: 40px;
		background: #f6f6f6;
	}
	.src {
		width: 150px;
		height: 150px;
		border-radius: 50%;
		-webkit-border-radius: 50%;
		margin-bottom: 20px;
	}
	.user .col-md-12 {
		margin-bottom: 12px;
	}
	
	.fines {
		 padding-top: 15px;
	}

	.fines a {
		text-decoration: none;
		margin-bottom: 15px;
		margin-right: 20px;
		text-align: center;
		background: #d8d8d8;
		padding: 7px;
	    border-radius: 3px;
	    -webkit-border-radius: 3px;
	    color: #555;
	}
	.fines a .lope i {
		 font-size: 30px;
		 padding: 10px;
		 float: left;
		 width: 100%;
		 text-align: center;
		 height: 40px;
		 min-width: 40px;
	}
	.fines a .lope span{
		width: 100%;
		float: left;
		margin-top: 6px;
		font-size: 13px;
	}
</style>




<?php include('footer.php'); ?>