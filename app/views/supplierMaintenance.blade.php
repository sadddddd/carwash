@extends('maintenance')

@section('contentMaintenance')

	<form id="Supplier_Details" >
		<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%; top:21px" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button>     
                   
  				<h2 style="color:white">SUPPLIERS</H2>  			
  		<div class="panel panel-primary" style="border:0px;"><!-- 
  			<div class="panel-heading">
  				Car Models 
  				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalAdd">Add</button>
  			</div> -->
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px ">
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
                   		
                      	<tr>
                      		
                      		<td> </td>
                      		<td> </td>
                      		<td> </td>
                      		<td> </td>
                      		<td> </td>
                      		<td> </td>

                      		<td>
								<button id="btn_edit" type="button" class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit">Edit</button>
								<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete">Delete</button>


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






  			

								<div id="delete" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="" method="post">
								
									<label>Supplier ID </label>
						    		<input id="sup_ID" value="" class="form-control" type="text" method="post" >						  
									<label>Supplier Name </label>
						    		<input id="sup_name" value="" class="form-control" type="text" method="post" >
							    
											</div>
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
									<div id="edit" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"> EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Supplier ID </label>
												    <input value="" name="supplier_id_edit" id="supplier_id_edit" class="form-control" type="text" readonly>
												    
													<label>Supplier Name </label>
												    <input value="" name="supplier_name_edit" id="supplier_name_edit" class="form-control" type="text" required>

												    <label>Street </label>
												    <input value="" name="supplier_st_edit" id="supplier_st_edit" class="form-control" type="text" required>
													
													<label>Baranggay</label>
												    <input value="" name="supplier_brgy_edit" id="supplier_brgy_edit" class="form-control" type="text" required>
												    
													<label>City </label>
												    <input value="" name="supplier_city_edit" id="supplier_city_edit" class="form-control" type="text" required>

												    <label>Contact Number </label>
												    <input value="" name="supplier_contactNo_edit" id="supplier_contactNo_edit" class="form-control" type="text" required>
												 	
												 	<label>Email Address </label>
												    <input value="" name="supplier_emailAd_edit" id="supplier_emailAd_edit" class="form-control" type="text" required>
												
													<label>Contact Person </label>
												    <input value="" name="supplier_contactPerson_edit" id="supplier_contactPerson_edit" class="form-control" type="text" required>
												
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
									      	<form action="/cartypeAdd" method="post">
										        <div class="form-group" style="color:black">
													<label>Supplier ID </label>
												    <input value="" name="supplier_id_add" id="supplier_id_add" class="form-control" type="text">
												    
													<label>Supplier Name </label>
												    <input value="" name="supplier_name_add" id="supplier_name_add" class="form-control" type="text" required>

												    <label>Street </label>
												    <input value="" name="supplier_st_add" id="supplier_st_add" class="form-control" type="text" required>
													
													<label>Baranggay</label>
												    <input value="" name="supplier_brgy_add" id="supplier_brgy_add" class="form-control" type="text" required>
												    
													<label>City </label>
												    <input value="" name="supplier_city_add" id="supplier_city_add" class="form-control" type="text" required>

												    <label>Contact Number </label>
												    <input value="" name="supplier_contactNo_add" id="supplier_contactNo_add" class="form-control" type="text" required>
												 	
												 	<label>Email Address </label>
												    <input value="" name="supplier_emailAd_add" id="supplier_emailAd_add" class="form-control" type="text" required>
												
													<label>Contact Person </label>
												    <input value="" name="supplier_contactPerson_add" id="supplier_contactPerson_add" class="form-control" type="text" required>
												
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


						</td>
						</tr>
						
                      </tbody>                   
  			  	</table>

  			  </div>
  			  <div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
  			</div>
   </form>

@stop