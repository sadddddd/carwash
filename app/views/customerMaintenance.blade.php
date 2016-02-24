@extends('maintenance')

@section('contentMaintenance')


	<form id="Customers" >  			
  		<div class="panel" style="border:0px;">
  			<div class="panel-heading">
  				<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:1000px; top:30px"><i class="glyphicon glyphicon-plus"></i> </button> 
                <!-- Modal dummy -->
									<div id="delete" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/cartypeabc" method="post">
									        <div class="form-group" style="color:black">
									        	<label>Car Type Id </label>
											    <input id="car_type_id_del" name="car_type_id_del" class="form-control" type="text" readonly>
											    <label>Car Type Name </label>
											    <input id="car_type_name_del" name="car_type_name_del" class="form-control" type="text" readonly>
										  	</div>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-danger">Yes</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal dummy -->


  				<!-- Modal Add -->
									<div id="modalAdd" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white"><CENTER>ADD CUSTOMER</CENTER></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/customerAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>* Customer ID </label> -->
												    <input value="{{$newID}}" id="custid_add" name="custid_add" type="text" hidden>
													
													<div class="form-group">
														<label>* Name </label>
													    <input id="cus_Fname_add" name="cus_Fname_add" class="form-control" type="text" placeholder="First name" required>
														<input id="cus_Mname_add" name="cus_Mname_add" class="form-control" type="text" placeholder="Middle Initial" required>
														<input id="cus_Lname_add" name="cus_Lname_add" class="form-control" type="text" placeholder="Last name" required>
												    </div>

												    
													<label>Address </label>
													<input id="custAdd_add" name="custAdd_add" class="form-control" type="multitext">
													

													<label>* Contact Number</label>
												    <input id="custCont_add" name="custCont_add" class="form-control" type="text" required>
													
													<label>* License Number</label>
												    <input id="custLisc_add" name="custLisc_add" class="form-control" type="text" required>

												    <h4>Customer's Car</h4>

												    <div class="form-group">
														<label>* Plate Number</label>
													    <input class="form-control" type="text" name="carplate_add" id="carplate_add" required>
												    </div>

												    <label>* Pick the car's model:</label>
												    <div class="input-field">
												      <select class="form-control" name="carmodel_add" id="carmodel_add" required>
												        <option selected disabled value="Pick car model">Pick car model</option>
						                                @foreach($carmodel as $cmodel)
						                                	@if(($cmodel->status == '1'))
						                                		<option value="{{ $cmodel->strCarModelId }}">{{ $cmodel->strCarModelDesc }}</option>
						                                	@endif
						                                @endforeach
												      </select>
												    </div>
												</div>
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Add</button>
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Add -->

  			<h2 style="color:white">CUSTOMERS</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px; color:white">

  			  		<thead>
                        <tr>
                          
                          <th>Customer Name</th>
                          <th>Address</th>
                          <th>Contact No.</th>
                          <th>License No.</th>
                          <th>Car/s</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($customers as $cust)
                      		@if($cust->status == 1)
                      	<tr>
                      		<form action="/details" method="post">
                      			<input value="{{ $cust->strCustId }}"  id="customerId" name="customerId" type="text" hidden>
                      		<td hidden>{{ $cust->strCustId }}</td>
                      		<td>{{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}</td>
                      		<td>{{ $cust->strCustAdd }}</td>
                      		<td>{{ $cust->strCustContNo }}</td>
                      		<td>{{ $cust->strCustLiscNo }}</td>
                      		<td>
								<button type="submit" class="btn btn-danger">List of Cars</button>
                      		</form>
                      		</td>
                      				
                      		<td>
								<button id="btn_edit" type="button" class="btn btn-danger" data-toggle="modal" href="#edit{{ $cust->strCustId }}" title="Edit"><i class="glyphicon glyphicon-pencil"> </i></button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{ $cust->strCustId }}" title="Delete"><i class="glyphicon glyphicon-remove"> </i></button>
                      		</td>
                      		



									<!-- Modal Edit -->
									<div id="edit{{ $cust->strCustId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><CENTER>EDIT CUSTOMER</CENTER></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/customerEdit" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>Customer ID </label> -->
												    <input value="{{ $cust->strCustId }}" id="custid_edit" name="custid_edit" type="text" hidden>
													
													<div class="form-group">
														<label>Name </label>
													    <input value="{{ $cust->strCustFName }}" id="cus_Fname_edit" name="cus_Fname_edit" class="form-control" type="text" placeholder="First name" required>
														<input value="{{ $cust->strCustMInit }}" id="cus_Mname_edit" name="cus_Mname_edit" class="form-control" type="text" placeholder="Middle Initial" minlength="2" required>
														<input value="{{ $cust->strCustLName }}" id="cus_Lname_edit" name="cus_Lname_edit" class="form-control" type="text" placeholder="Last name" required>
												    </div>

												   
													<label>Address </label>
													<input value="{{ $cust->strCustAdd }}" id="custAdd_edit" name="custAdd_edit" class="form-control" type="text">

													<label>Contact Number</label>
												    <input value="{{ $cust->strCustContNo }}" id="custCont_edit" name="custCont_edit" class="form-control" type="text" required>
													
													<label>License Number</label>
												    <input value="{{ $cust->strCustLiscNo }}" id="custLisc_edit" name="custLisc_edit" class="form-control" type="text" required>
												</div>
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Save</button>
									        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Edit -->

									<!-- Modal Delete -->
									<div id="delete{{ $cust->strCustId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content" >
									      
									      <div class="modal-body" style="background-color:black; color:white;">
									      	<p>
									      	<form action="/customerDelete" method="post">
										        <div class="form-group" style="color:black;  color:white;">
										        	 <button type="button" class="close" data-dismiss="modal">&times;</button>
										        	<!-- <label>Customer ID </label> -->
												    <input value="{{ $cust->strCustId }}" id="custid_delete" name="custid_delete" type="text" hidden>
													
													<div class="form-group">
														<label style="margin-left:20px; font-weight:bold;">Are you sure you want to delete?</label><br>
													    <input value="{{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}" type="text" hidden>
												    	<label style="margin-left:20px; font-size:20px;">  {{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }} </label>
												    </div>
												</div>
									      	</p>
										    
										    <div class="container" style="margin-left:450px">
										    
										        <button type="submit" class="btn btn-danger">Yes</button>
										        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>



										     </div>
									  		</form>
									    </div>
									  </div>
									</div><!-- Modal Delete -->

									
									


						</tr>
                      		@endif
                        @endforeach
                    
                      </tbody>
  			  	</table>
  			</div>
  			<div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
  		</div>
  		<script> </script>
    </form>
@stop