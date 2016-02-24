@extends('maintenance')

@section('contentMaintenance')

	
			<!--<td><label style="font-size:20px;margin:10px;">Search</label></td>	
				<td><input id="searchFor" type="text" placeholder="Search" class="form-control" style="width:200px; margin:10px"></td>
  				<td><select id="searchIn" class="form-control" style=" width:200px; margin:10px;">
  					<option value="" disabled selected>Search in...</option>
  					<option>Costumer ID</option>
  					<option>Costumer Name</option>
  					<option>License No</option>
   					</select></td>
  		<td><button type="submit" class="btn btn-danger" style="margin:10px;">Go</button>		</td> -->

<form>
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:transparent; border:0px" >
				    <div class="container" >
				        <div class="collapse navbar-collapse" >
				            <ul class="nav navbar-nav" >
				            <!-- <button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:940px;"><i class="glyphicon glyphicon-plus"></i> </button> </td> -->
            				<li>	<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger btn-circle btn-lg " href="#modalAdd" style="position:absolute; margin-left:1152px;margin-top:70px; border:0px"><span data-toggle="tooltip" title="Add" data-placement="bottom" ><i class="glyphicon glyphicon-plus"></i><span></a></li>
  							<li>	<a data-toggle="collapse" id="inactive" data-parent="#accordion" class="btn btn-danger btn-circle btn-lg " href="#Inactivediv" style="position:absolute; margin-left:1152px;margin-top:125px; border:0px "><span data-toggle="tooltip" title="Open Inactive" data-placement="bottom"><i class="glyphicon glyphicon-folder-open"></i><span></a></li>
 				            </ul>
				        </div>
				    </div>
				</div>
<div id="Inactivediv" class="collapse" style="">
		<div class="panel drop_navbar" style="border:0px;background-color:white; width:1010px">
		<div class="panel-heading" >
  		<h1 style="color:gray"><i class="glyphicon glyphicon-ban-circle"></i>&nbsp;&nbsp;&nbsp;INACTIVE</H1>
  			</div>
  		<div class="panel-body" style="background-color:white">
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

                   
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables2-example" style="border:0px">
                                    <thead>
                                        <tr>
											  <th>Customer Name</th>
					                          <th>Address</th>
					                          <th>Contact No.</th>
					                          <th>License No.</th>
					             
					                          <th>Actions</th>				                          
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>

                      <tbody>
                      	@foreach($customers as $cust)
                      		@if($cust->status == 0)
                      	<tr>
                      		<td hidden>{{ $cust->strCustId }}</td>
                      		<td>{{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}</td>
                      		<td>{{ $cust->strCustAdd }}</td>
                      		<td>{{ $cust->strCustContNo }}</td>
                      		<td>{{ $cust->strCustLiscNo }}</td>

                      	
                      		<td>
							
                      		<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#activate{{ $cust->strCustId }}" ><span data-toggle="tooltip" title="Activate" data-placement="right" ><i class="glyphicon glyphicon-arrow-up"></i><span></a>
                      			
                      		
								<!-- Modal Delete -->
									<div id="activate{{ $cust->strCustId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									     
									  
									        
									      <div class="modal-body" style="background-color:black; color:white">
									      	 <input value="{{ $cust->strCustId }}" id="customer_id_del" name="customer_id_del" type="text" hidden>
											  
									      	<form id="reactivate" action="/customerReactive" method="post">
									        <div class="form-group" >
									        <!-- 	<label>Car Model ID </label> -->
									        <label>Are you sure you want to activate?</h4>

									     
											    <input value="{{ $cust->strCustId }}" id="customer_id_del" name="customer_id_del" type="text" hidden>
											    <br>
											    <label> {{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}  </label>
											  					  	<div class="container" style="margin-left:430px">
									        <button type="submit" class="btn btn-danger">Yes</button>
									        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
									      </div>
										  	</div>
									      </div>
									      
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Delete -->
							</td>
						</tr>
							@endif
						
							
                        @endforeach
                      </tbody>                   
                          </table>
                            </div>
                            <!-- /.table-responsive -->
                  
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
           		</div>
           	</div>
  		<div class="panel" style="border:0px; color:white; background-color:white; width:1010px">
				
  			<div class="panel-heading drop_navbar">
  				<form id="Customers" >  
													  
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
														<input id="cus_Add_add" name="cus_Add_add" class="form-control" type="text" placeholder="Address">
													   

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

  			            <div class="panel-heading" >
				  			<h1 style="color:gray"><i class="glyphicon glyphicon-user"></i> &nbsp;&nbsp;&nbsp;CUSTOMERS</H1>
                        </div>
                        <div class="panel-body">
                            <div>
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead style="background-color:white" >
                                        <tr>
											  <th>Customer Name</th>
					                          <th>Address</th>
					                          <th>Contact No.</th>
					                          <th>License No.</th>
					                          <th>Car/s</th>
					                          <th>Actions</th>				   
					                          <th hidden> problem</th>
					                          
                                        </tr>
                                    </thead>

                      <tbody>
                      	@foreach($customers as $cust)
                      		@if($cust->status == 1)
                      		
                      	<tr>
                      		<form action="/details" method="post">
                      			
                      		<td hidden><input value="{{ $cust->strCustId }}"  id="customerId" name="customerId" type="text" hidden></td>
                      		<td>{{ $cust->strCustFName }} {{ $cust->strCustMInit }}. {{ $cust->strCustLName }}</td>
                      		<td>{{ $cust->strCustAdd }}</td>
                      		<td>{{ $cust->strCustContNo }}</td>
                      		<td>{{ $cust->strCustLiscNo }}</td> 		        
                      		
                      		<td>
								<button type="submit" class="btn btn-danger">List of Cars</button>
                      		</form>
                      		</td>
                      				
                      		<td>
                      			
                      			<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#edit{{ $cust->strCustId }}" ><span data-toggle="tooltip" title="Edit" data-placement="left" ><i class="glyphicon glyphicon-pencil"></i><span></a></li>
  								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#delete{{ $cust->strCustId }}" ><span data-toggle="tooltip" title="Delete" data-placement="right" ><i class="glyphicon glyphicon-remove"></i><span></a></li>
                      			
                      			
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
														<input value="{{ $cust->strCustMInit }}" id="cus_Mname_edit" name="cus_Mname_edit" class="form-control" type="text" placeholder="Middle Initial" maxlength="2" required>
														<input value="{{ $cust->strCustLName }}" id="cus_Lname_edit" name="cus_Lname_edit" class="form-control" type="text" placeholder="Last name" required>
												    </div>

												    <div class="form-group">
														<label>Address </label>
														<input value="{{ $cust->strCustAdd }}" id="cus_Add_edit" name="cus_Add_edit" class="form-control" type="text" placeholder="Street">
													  	</div>

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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
  		</div>

		
  	</div>
  </div>

</div>
    </form>
@stop