@extends('maintenance')

@section('contentMaintenance')

	<form id="Frequency_Details" >  	
	<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%; top:21px" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button>     
                    			
  				<h2 style="color:white">FREQUENCY CARD</H2>		
  		<div class="panel panel-primary" style="border:0px;">
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
                        <tr>
                        	<th>Type of Card</th>
                          <th>Frequency Card ID</th>
                          <th>Frequency Card Name</th>
                          <th>Package</th>
                          <th>Service</th>
                          <th>Discount</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	<tr>
                      		<td></td>
                      		<td></td>
                      		<td></td>
                      		
                      		<td></td>
                      		<td> 		

                      		</td>
                      		<td> 		

                      		</td>
                     
                            	
								       
									
                      		<td>
								<button id="btn_edit" type="button"  class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit">Edit</button>
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
									      	<form id="delete" action="" method="post">
									        <div class="form-group" style="color:black">
									        	<label>Frequency Card ID </label>
											    <input value="" id="prod_ser_cat_id_del" name="prod_ser_cat_id_del" class="form-control" type="text" readonly>
											    <label>Frequency Name </label>
											    <input value="" id="prod_ser_cat_name_del" name="prod_ser_cat_name_del" class="form-control" type="text" readonly>
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
				
                      				<!-- Modal Delete -->
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
									        <div class="form-group" style="color:black">
									        	<label>Frequency Card ID </label>
											    <input value="" id="freq_id_del" name="freq_id_del" class="form-control" type="text" readonly>
											    <label>Frequency Card Name </label>
											    <input value="" id="freq_name_del" name="freq_name_del" class="form-control" type="text" readonly>
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
									      	<form id="update" action="/cartypeUp" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Frequency Card Type</label>
													<select class="form-control" value="" name="freq_type_edit" id="freq_type_edit">
								                        <option>1</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

										        	<label>Frequency Card ID </label>
												    <input value="" name="freq_id_edit" id="freq_id_edit" class="form-control" type="text" readonly>
												    
													<label>Frequency Card Name </label>
												    <input value="" name="freq_name_edit" id="freq_name_edit" class="form-control" type="text" required>

												    <label>Package</label>
												    <select class="form-control" value="" name="freq_package_edit" id="freq_package_edit">
								                        <option>none</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

												    <label>Service</label>
												    <select class="form-control" value="" name="freq_service_edit" id="freq_service_edit">
								                        <option>none</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

												 	<label>Discount </label>
												    <input value="" name="freq_price_edit" id="freq_price_edit" class="form-control" type="number" required>
												
												 	

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
									      	<form action="" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Frequency Card Type</label>
													<select class="form-control" value="" name="freq_type_edit" id="freq_type_edit">
								                        <option>1</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

										        	<label>Frequency Card ID </label>
												    <input value="" name="freq_id_add" id="freq_id_add" class="form-control" type="text" required>
												    
													<label>Frequency Card Name </label>
												    <input value="" name="freq_name_add" id="freq_name_add" class="form-control" type="text" required>

												    <label>Package</label>
												    <select class="form-control" value="" name="freq_package_add" id="freq_package_add">
								                        <option>none</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

												    <label>Service</label>
												    <select class="form-control" value="" name="freq_service_add" id="freq_service_add">
								                        <option>none</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

												 	<label>Discount </label>
												    <input value="" name="freq_price_add" id="freq_price_add" class="form-control" type="number" required>
												
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