@extends('maintenance')

@section('contentMaintenance')

	<form id="Supplier_Details" >
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
									        	<label>Car Type ID </label>
											    <input  id="car_type_id_del" name="car_type_id_del" class="form-control" type="text" readonly>
											    <label>Car Type Name </label>
											    <input  id="car_type_name_del" name="car_type_name_del" class="form-control" type="text" readonly>
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

										<!-- Modal content -->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">ADD</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/supplierAdd" method="post">
										        <div class="form-group" style="color:black">
													<label>* Supplier ID </label>
												    <input value="{{$newID}}" name="supplier_id_add" id="supplier_id_add" class="form-control" type="text" required>
												    
													<label>* Supplier Name </label>
												    <input name="supplier_name_add" id="supplier_name_add" class="form-control" type="text" required>

												    <h4>Address</h4>
												    <div class="form-group">
													    <label>Street </label>
													    <input name="supplier_st_add" id="supplier_st_add" class="form-control" type="text">
														
														<label>Baranggay</label>
													    <input name="supplier_brgy_add" id="supplier_brgy_add" class="form-control" type="text">
													    
														<label>City </label>
													    <input name="supplier_city_add" id="supplier_city_add" class="form-control" type="text" >
												    </div>
												    <label>* Contact Number </label>
												    <input name="supplier_contactNo_add" id="supplier_contactNo_add" class="form-control" type="text" required>
												 	
												 	<label> Email Address </label>
												    <input name="supplier_emailAd_add" id="supplier_emailAd_add" class="form-control" type="email">
													
													<h4>* Contact Person</h4>
													<div class="form-group">
														<label>First Name</label>
												    	<input name="supplier_fname_add" id="supplier_fname_add" class="form-control" type="text"  required>
														<label>Middle Initial</label>
												    	<input name="supplier_mname_add" id="supplier_mname_add" class="form-control" type="text"  required>
														<label>Last Name</label>
												    	<input name="supplier_lname_add" id="supplier_lname_add" class="form-control" type="text"  required>
													</div>
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

  				<h2 style="color:white">SUPPLIERS</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="tableSupplier" class="table" style="border:1px">

  			  		<thead>
                        <tr>
                          <th>Supplier ID</th>
                          <th>Supplier Name</th>
                          <th>Address</th>
                          <th>Contact Number</th>
                          <th>Email Address</th>
                          <th>Contact Person</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                   		@foreach($suppliers as $supp)
                      		@if($supp->status == 1)
                      	<tr>
                      		
                      		<td>{{$supp->strSuppId}}</td>
                      		<td>{{$supp->strSuppName}}</td>
                      		<td>{{$supp->strSuppStAdd}}, {{$supp->strSuppCityAdd}}, {{$supp->strSuppStateAdd}}</td>
                      		<td>{{$supp->strSSCont}}</td>
                      		<td>{{$supp->strSuppEAdd}}</td>
                      		<td>{{$supp->strSSContFName}} {{$supp->strSSContMInit}}. {{$supp->strSSContLName}}</td>

                      		<td>
								<button id="btn_edit" type="button" class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit{{$supp->strSuppId}}">Edit</button>
								<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$supp->strSuppId}}">Delete</button>
								
								<!-- Modal Delete -->
								<div id="delete{{$supp->strSuppId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white">DELETE</h4>
									      </div>
									      <div class="modal-body" style="color:black">
									      	<p>
									      	<form id="delete" action="/supplierDelete" method="post">
								
											<label>Supplier ID </label>
								    		<input value="{{$supp->strSuppId}}" id="sup_ID_del" name="sup_ID_del"class="form-control" type="text" readonly>						  
											<label>Supplier Name </label>
								    		<input value="{{$supp->strSuppName}}" id="sup_name_del" name="sup_name_del"  class="form-control" type="text" readonly>
							    
											</div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-danger">Confirm</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Delete -->

								<!-- Modal Edit -->
									<div id="edit{{$supp->strSuppId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white"> EDIT</h4>
									      </div>
									      <div class="modal-body" style="color:black">
									      	<form id="update" action="/supplierUpdate" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Supplier ID </label>
												    <input value="{{$supp->strSuppId}}" name="supplier_id_edit" id="supplier_id_edit" class="form-control" type="text" readonly>
												    
													<label>Supplier Name </label>
												    <input value="{{$supp->strSuppName}}" name="supplier_name_edit" id="supplier_name_edit" class="form-control" type="text" required>

												    <h4>Address</h4>
												    <div class="form-group">
													    <label>Street </label>
													    <input value="{{$supp->strSuppStAdd}}" name="supplier_st_edit" id="supplier_st_edit" class="form-control" type="text">
														
														<label>Baranggay</label>
													    <input value="{{$supp->strSuppCityAdd}}" name="supplier_brgy_edit" id="supplier_brgy_edit" class="form-control" type="text">
													    
														<label>City </label>
													    <input value="{{$supp->strSuppStateAdd}}" name="supplier_city_edit" id="supplier_city_edit" class="form-control" type="text">
													</div>

												    <label>Contact Number </label>
												    <input value="{{$supp->strSSCont}}" name="supplier_contactNo_edit" id="supplier_contactNo_edit" class="form-control" type="text" required>
												 	
												 	<label>Email Address </label>
												    <input value="{{$supp->strSuppEAdd}}" name="supplier_emailAd_edit" id="supplier_emailAd_edit" class="form-control" type="email">
												
													<h4>Contact Person</h4>
													<div class="form-group">
														<label>First Name</label>
												    	<input value="{{$supp->strSSContFName}}" name="supplier_fname_edit" id="supplier_fname_edit" class="form-control" type="text"  required>
														<label>Middle Initial</label>
												    	<input value="{{$supp->strSSContMInit}}" name="supplier_mname_edit" id="supplier_mname_edit" class="form-control" type="text"  required>
														<label>Last Name</label>
												    	<input value="{{$supp->strSSContLName}}" name="supplier_lname_edit" id="supplier_lname_edit" class="form-control" type="text"  required>
													</div>
												</div>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-primary" style="background-color:black; border:black; color:white">Save</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									      </form>
									    </div>
									    
									  </div>
									</div><!-- Modal Edit -->


									


						</td>
						</tr>
						@endif
						@endforeach
                      </tbody>                   
  			  	</table>
  			  	<script>
  			  		$(document).ready(function() {
					    $('#tableSupplier').DataTable();
					} );
  			  	</script>
			</div>
  			<div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
  		</div>
   </form>

@stop