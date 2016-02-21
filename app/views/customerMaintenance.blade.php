@extends('maintenance')

@section('contentMaintenance')


	<form id="Customers" >  			
  		<div class="panel" style="border:0px;">
  			<div class="panel-heading">
  				<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%;" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button> 
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
									        <button type="submit" class="btn btn-danger">Confirm</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">ADD</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/customerAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<label>* Customer ID </label>
												    <input value="{{$newID}}" id="custid_add" name="custid_add" class="form-control" type="text" required>
													
													<div class="form-group">
														<label>* Name </label>
													    <input id="cus_Fname_add" name="cus_Fname_add" class="form-control" type="text" placeholder="First name" required>
														<input id="cus_Mname_add" name="cus_Mname_add" class="form-control" type="text" placeholder="Middle Initial" required>
														<input id="cus_Lname_add" name="cus_Lname_add" class="form-control" type="text" placeholder="Last name" required>
												    </div>

												    <div class="form-group">
														<label>Address </label>
														<input id="cus_St_add" name="cus_St_add" class="form-control" type="text" placeholder="Street">
													    <input id="cus_City_add" name="cus_City_add" class="form-control" type="text" placeholder="City">
													    <input id="cus_State_add" name="cus_State_add" class="form-control" type="text" placeholder="State">
													</div>

													<label>* Contact Number</label>
												    <input id="custCont_add" name="custCont_add" class="form-control" type="text" required>
													
													<label>* License Number</label>
												    <input id="custLisc_add" name="custLisc_add" class="form-control" type="text" required>
												</div>
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Add</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Add -->

  			<h2 style="color:white">CUSTOMERS</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
                        <tr>
                          <th>Customer ID</th>
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
                      		<td>{{ $cust->strCustId }}</td>
                      		<td>{{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}</td>
                      		<td>{{ $cust->strCustStAdd }}, {{$cust->strCustCityAdd}}, {{$cust->strCustStateAdd}}</td>
                      		<td>{{ $cust->strCustContNo }}</td>
                      		<td>{{ $cust->strCustLiscNo }}</td>
                      		<td>
								<button type="submit" class="btn btn-info">List of Cars</button>
                      		</form>
                      		</td>
                      				
                      		<td>
								<button id="btn_edit" type="button" class="btn btn-info" data-toggle="modal" href="#edit{{ $cust->strCustId }}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-info" data-toggle="modal" href="#delete{{ $cust->strCustId }}">Delete</button>
                      		</td>
                      		



									<!-- Modal Edit -->
									<div id="edit{{ $cust->strCustId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/customerEdit" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Customer ID </label>
												    <input value="{{ $cust->strCustId }}" id="custid_edit" name="custid_edit" class="form-control" type="text" readonly>
													
													<div class="form-group">
														<label>Name </label>
													    <input value="{{ $cust->strCustFName }}" id="cus_Fname_edit" name="cus_Fname_edit" class="form-control" type="text" placeholder="First name" required>
														<input value="{{ $cust->strCustMInit }}" id="cus_Mname_edit" name="cus_Mname_edit" class="form-control" type="text" placeholder="Middle Initial" minlength="2" required>
														<input value="{{ $cust->strCustLName }}" id="cus_Lname_edit" name="cus_Lname_edit" class="form-control" type="text" placeholder="Last name" required>
												    </div>

												    <div class="form-group">
														<label>Address </label>
														<input value="{{ $cust->strCustStAdd }}" id="cus_St_edit" name="cus_St_edit" class="form-control" type="text" placeholder="Street">
													    <input value="{{ $cust->strCustCityAdd }}" id="cus_City_edit" name="cus_City_edit" class="form-control" type="text" placeholder="Banranggay">
													    <input value="{{ $cust->strCustStateAdd }}" id="cus_State_edit" name="cus_State_edit" class="form-control" type="text" placeholder="City">
													</div>

													<label>Contact Number</label>
												    <input value="{{ $cust->strCustContNo }}" id="custCont_edit" name="custCont_edit" class="form-control" type="text" required>
													
													<label>License Number</label>
												    <input value="{{ $cust->strCustLiscNo }}" id="custLisc_edit" name="custLisc_edit" class="form-control" type="text" required>
												</div>
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Edit</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Edit -->

									<!-- Modal Delete -->
									<div id="delete{{ $cust->strCustId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/customerDelete" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Customer ID </label>
												    <input value="{{ $cust->strCustId }}" id="custid_delete" name="custid_delete" class="form-control" type="text" readonly>
													
													<div class="form-group">
														<label>Name </label>
													    <input value="{{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}" class="form-control" type="text" readonly>
												    </div>
												</div>
									      	</p>
										      <div class="modal-footer">
										        <button type="submit" class="btn btn-info">Delete</button>
										        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
    </form>
@stop