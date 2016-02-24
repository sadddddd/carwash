@extends('maintenance')

@section('contentMaintenance')

	<form id="Package_Details"  >  	
	<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%; top:21px" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button>     
                    			
  			<h2 style="color:white">PACKAGES</H2>		
  		<div class="panel panel-primary" style="border:0px;">
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
                        <tr>
                        	
                          <th>Package ID</th>
                          <th>Package Name</th>
                          <th>Service Category</th>
                          <th>Services</th>
                          <th>Discount</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      <tr>
                      		<td></td>
                      		<td></td>
                      		<td></td>
                      		
                      		
                      		<td> 
                      			<button id="cars" type="button" class="btn btn-info" data-toggle="modal" href="#cars">List of Services</button>
                      				<!-- Modal Car -->
								
									<div id="cars" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	<div class="modal-content">
									  		<div class="modal-header">
									  			
										        <button type="button" class="close" data-dismiss="modal">&times;</button>
										        <h4 class="modal-title" style="color:black">LIST OF SERVICES</h4>
										    </div>
									    	<div class="modal-body">
											  	<table id="table" class="table table-bordered table-responsive" style="color:black">
													<thead>
								                        <tr>
								                        
								                        	<th>Service ID</th>
								                        	<th>Service Name</th>
								                          	<th>Car Brand</th>
								                          	<th>Car Type</th>
								                          		<th>Actions</th>
								                        </tr>
								                    </thead>
								                    <tbody>
								                    	
									                    	<tr>
									                    		<td hidden></td>
									                    		<td></td>
									                    		<td></td>
									                    		<td></td>
									                    		<td></td>
									                    				

									                    		<td >
																<!-- <input hidden value="" id="plate" name="plate" class="form-control" type="text"> -->
																<button id="car_edit" name="car_edit" value="" type="button" class="btn btn-info" data-toggle="modal" href="#carEdit" data-dismiss="modal">Edit </button>													</td>
									                			
															
									                		
									                    	</tr>
									                    
									                    	<!-- Modal Car Edit -->
									
									  		</div>
									 	 </div>
									</div><!-- Car Edit -->
								</form>
									                    	
								                    </tbody>
								                </table>
							            	</div>
									  </div>
									</div><!-- Modal Car -->
									<td></td>
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
									        	<label>Package ID </label>
											    <input value="" id="prod_ser_cat_id_del" name="prod_ser_cat_id_del" class="form-control" type="text" readonly>
											    <label>Package Name </label>
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
									        	<label>Package ID </label>
											    <input value="" id="prod_id_del" name="prod_id_del" class="form-control" type="text" readonly>
											    <label>Package Name </label>
											    <input value="" id="prod_name_del" name="prod_name_del" class="form-control" type="text" readonly>
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
										        	<label> Service Category Name</label>
													<select class="form-control" value="" name="service_cat_edit" id="service_cat_edit">
								                        <option>1</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

										        	<label>Package ID </label>
												    <input value="" name="service_id_edit" id="service_id_edit" class="form-control" type="text" readonly>
												    
													<label>Package Name </label>
												    <input value="" name="service_name_edit" id="service_name_edit" class="form-control" type="text" required>

												    						
														<table align=center>
															<tr>	
															<td>
															<input type="radio" name="package_disc" value="percentage"> Percentage
															<input id="percentage" style="width:100px; margin-left:20px" class="form-control" type="number" placeholder="%">
															</td>
															<td><input type="radio" name="package_disc" value="amount"> Amount
																	 
															
															<input id="amount" style="width:100px; margin-left:20px"class="form-control" type="number" step="any" min="0">
														</td>
														</tr>
							
													 </table>
												 	<label>Total Price </label>
												    <input value="" name="service_price_edit" id="service_price_edit" class="form-control" type="number" required>
												
												 	
												 	<label>Package Price </label>
												    <input value="" name="service_price_edit" id="service_price_edit" class="form-control" type="number" required>
												
												 
												
									    
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
										        	<label> Service Category Name</label>
													<select class="form-control" value="" name="service_cat_edit" id="service_cat_edit">
								                        <option>1</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

										        	<label>Package ID </label>
												    <input value="" name="service_id_edit" id="service_id_edit" class="form-control" type="text" required>
												    
													<label>Package Name </label>
												    <input value="" name="service_name_edit" id="service_name_edit" class="form-control" type="text" required>

												     <table>
								                     <label>Inclusive Services </label>
								                <tr>
								                	<td width=260px >
								                		<select multiple="" class="form-control">
		                                                <option>1</option>
		                                                <option>2</option>
		                                                <option>3</option>
		                                                <option>4</option>
		                                                <option>5</option>
	                                            		</select>
	                                            	</td>

	                                            	
	                                            	<td width=60px >
	                                            	<button stype="submit" class="btn btn-primary" style="background-color:black; border:black; color:white; margin-left:9px; margin-botttom:2px">>></button>
									        		<button type="button" class="btn btn-default" style="margin-left:9px" data-dismiss="modal"><<</button>
									    
	                                            	</td>
	                                            	<td width=260px><select multiple="" class="form-control">
		                                                <option>1</option>
		                                                <option>2</option>
		                                                <option>3</option>
		                                                <option>4</option>
		                                                <option>5</option>
	                                            		</select></td>
                                            	</tr>	
														
										
												</table>									
														<table align=center>
												<tr>	
															<td>
															<input type="radio" name="package_disc" value="percentage"> Percentage
															<input id="percentage" style="width:100px; margin-left:20px" class="form-control" type="number" placeholder="%">
															</td>
															<td><input type="radio" name="package_disc" value="amount"> Amount
																	 
															
															<input id="amount" style="width:100px; margin-left:20px"class="form-control" type="number" step="any" min="0">
														</td>
														</tr>
							
													 </table>
												 	<label>Total Price </label>
												    <input value="" name="service_price_edit" id="service_price_edit" class="form-control" type="number" required>
												
												 	
												 	<label>Package Price </label>
												    <input value="" name="service_price_edit" id="service_price_edit" class="form-control" type="number" required>
												
												 
												
									    					
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