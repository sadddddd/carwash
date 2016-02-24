@extends('maintenance')

@section('contentMaintenance')

<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:transparent; border:0px" >
				    <div class="container" >
				        <div class="collapse navbar-collapse" >
				            <ul class="nav navbar-nav" >
				            <!-- <button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:940px;"><i class="glyphicon glyphicon-plus"></i> </button> </td> -->
            				<li>	<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger btn-circle btn-lg " href="#modalAdd" style="position:absolute; margin-left:1152px;margin-top:70px; border:0px"><span data-toggle="tooltip" title="Add" data-placement="bottom" ><i class="glyphicon glyphicon-plus"></i><span></a></li>
  							<li>	<a data-toggle="collapse" id="inactive" data-parent="#accordion" title="inactive" class="btn btn-danger btn-circle btn-lg " href="#Inactive" style="position:absolute; margin-left:1152px;margin-top:125px; border:0px "><span data-toggle="tooltip" title="Open Inactive" data-placement="bottom"><i class="glyphicon glyphicon-folder-open"></i><span></a></li>
 				            </ul>
				        </div>
				    </div>
				</div>
	<form id="Supplier_Details" >
<<<<<<< HEAD
			<div id="Inactive" class="collapse" >
		<div class="panel drop_navbar" style="border:0px; width:1010px; background-color:white">
		<div class="panel-heading">
  		<h1 style="color:gray"><i class="glyphicon glyphicon-ban-circle"></i> &nbsp;&nbsp;&nbsp;INACTIVE</H1>
  			</div>
  		<div class="panel-body">
<!-- Modal dummy -->
=======
		<div class="panel" style="border:0px;">
  			<div class="panel-heading">
  				<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:1000px; top:30px"><i class="glyphicon glyphicon-plus"></i> </button> 
               <!-- Modal dummy -->
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
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
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables2-example">
                                    <thead>
                                        <tr>
					                          <th>Supplier Name</th>
					                          <th>Address</th>
					                          <th>Contact Number</th>
					                          <th>Email Address</th>
					                          <th>Contact Person</th>
					                          <th>Actions</th>				                          
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                                                          <tbody>
                   		@foreach($suppliers as $supp)
                      		@if($supp->status == 0)
                      	<tr>
                      		
                      		<td hidden>{{$supp->strSuppId}}</td>
                      		<td>{{$supp->strSuppName}}</td>
                      		<td>{{$supp->strSuppAdd}}</td>
                      		<td>{{$supp->strSSCont}}</td>
                      		<td>{{$supp->strSuppEAdd}}</td>
                      		<td>{{$supp->strSSContFName}} {{$supp->strSSContMInit}}. {{$supp->strSSContLName}}</td>
                      		
                      		
                      		<td>
							
                      		
                      			<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#activate{{$supp->strSuppId}}" ><span data-toggle="tooltip" title="Activate" data-placement="right" ><i class="glyphicon glyphicon-arrow-up"></i><span></a></li>
                      			<!-- Modal Delete -->
									<div id="activate{{$supp->strSuppId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									     
									  
									        
									      <div class="modal-body" style="background-color:black; color:white">
									      	<form id="reactivate" action="/supplierReactive" method="post">
									        <div class="form-group" >
									        <!-- 	<label>Car Model ID </label> -->
									        <label>Are you sure you want to activate?</h4>

									     
											    <input value="{{$supp->strSuppId}}" id="supplier_id_del" name="supplier_id_del" type="text" hidden>
											    <br>
											    <label> {{$supp->strSuppName}} </label>
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
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  </div></div>
		<div class="panel drop_navbar" style="border:0px; background-color:white; width:1010px">
  			<div class="panel-heading">
  				   

  				<!-- Modal Add -->
									<div id="modalAdd" class="modal fade" role="dialog">
									  <div class="modal-dialog">

										<!-- Modal content -->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><center>ADD SUPPLIER</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/supplierAdd" method="post">
										        <div class="form-group" style="color:black">
<<<<<<< HEAD
													<input value="{{$newID}}" name="supplier_id_add" id="supplier_id_add" type="text" hidden>
													<label>* Supplier Name </label>
												    <input name="supplier_name_add" id="supplier_name_add" class="form-control" type="text" required>
													<label>Address </label>
													<input name="supplier_Add_add" id="supplier_st_add" class="form-control" type="text">
												    <label>* Contact Number </label>
												    <input name="supplier_contactNo_add" id="supplier_contactNo_add" class="form-control" type="text" required>
												 	<label> Email Address </label>
												    <input name="supplier_emailAd_add" id="supplier_emailAd_add" class="form-control" type="email">
													<h4>* Contact Person</h4>
=======
													<!-- <label>* Supplier ID </label> -->
												    <input value="{{$newID}}" name="supplier_id_add" id="supplier_id_add" type="text" hidden>
												    
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
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
														<label>First Name</label>
												    	<input name="supplier_fname_add" id="supplier_fname_add" class="form-control" type="text"  required>
														<label>Middle Initial</label>
												    	<input name="supplier_mname_add" id="supplier_mname_add" class="form-control" type="text"  required>
													<label>Last Name</label>
												    	<input name="supplier_lname_add" id="supplier_lname_add" class="form-control" type="text"  required>
													
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

<<<<<<< HEAD
  			            <div class="panel-heading">
				  			<h1 style="color:gray"><i class="glyphicon glyphicon-user"></i> &nbsp;&nbsp;&nbsp;SUPPLIERS</H1>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead>
                                        <tr>
											<th>Supplier Name</th>
				                            <th>Address</th>
				                            <th>Contact Number</th>
				                            <th>Email Address</th>
				                            <th>Contact Person</th>
				                            <th>Actions</th>
					                         <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                                                          <tbody>
=======
  				<h2 style="color:white">SUPPLIERS</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px; color:white;">

  			  		<thead>
                        <tr>
                          
                          <th>Supplier Name</th>
                          <th>Address</th>
                          <th>Contact Number</th>
                          <th>Email Address</th>
                          <th>Contact Person</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                   		@foreach($suppliers as $supp)
                      		@if($supp->status == 1)
                      		<input value="{{$ctr++}}" hidden>
                      	<tr>
                      		
                      		<td hidden>{{$supp->strSuppId}}</td>
                      		<td>{{$supp->strSuppName}}</td>
                      		<td>{{$supp->strSuppAdd}}</td>
                      		<td>{{$supp->strSSCont}}</td>
                      		<td>{{$supp->strSuppEAdd}}</td>
                      		<td>{{$supp->strSSContFName}} {{$supp->strSSContMInit}}. {{$supp->strSSContLName}}</td>

                      		<td>
<<<<<<< HEAD
								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#edit{{$supp->strSuppId}}" ><span data-toggle="tooltip" title="Edit" data-placement="left" ><i class="glyphicon glyphicon-pencil"></i><span></a></li>
  								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#delete{{$supp->strSuppId}}" ><span data-toggle="tooltip" title="Delete" data-placement="right" ><i class="glyphicon glyphicon-remove"></i><span></a></li>
                      			
								
=======
								<button id="btn_edit" type="button" class="btn btn-danger" data-toggle="modal" href="#edit{{$supp->strSuppId}}"><i class="glyphicon glyphicon-pencil"></i></button>
								<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$supp->strSuppId}}"><i class="glyphicon glyphicon-remove"></i></button>
								
								<!-- Modal Delete -->
								<div id="delete{{$supp->strSuppId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body"  style="background-color:black; color:white;">
									      	<p>
									      	<form id="delete" action="/supplierDelete" method="post">
								
											<!-- <label>Supplier ID </label> -->
											<label style="margin-left:20px; font-weight:bold;">Are you sure you want to delete?</label><br>
													   
								    		<input value="{{$supp->strSuppId}}" id="sup_ID_del" name="sup_ID_del" type="text" hidden>						  
											<label style="margin-left:50px">{{$supp->strSuppName}}</label>
								    		<input value="{{$supp->strSuppName}}" id="sup_name_del" name="sup_name_del" type="text" hidden>
							   				 <div class="container" style="margin-left:430px">
									        <button type="submit" class="btn btn-danger">Yes</button>
									        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
									      </div>
											</div>
									      
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Delete -->

>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
								<!-- Modal Edit -->
									<div id="edit{{$supp->strSuppId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white"> <CENTER>EDIT SUPPLIER</CENTER></h4>
									      </div>
									      <div class="modal-body" style="color:black">
									      	<form id="update" action="/supplierUpdate" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>Supplier ID </label> -->
<<<<<<< HEAD
										        	<br>
												    <input value="{{$supp->strSuppId}}" name="supplier_id_edit" id="supplier_id_edit" type="text" hidden>
												    <br>
=======
												    <input value="{{$supp->strSuppId}}" name="supplier_id_edit" id="supplier_id_edit" type="text" hidden>
												    
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
													<label>Supplier Name </label>
													<br>
												    <input value="{{$supp->strSuppName}}" name="supplier_name_edit" id="supplier_name_edit" class="form-control" type="text" required>
												    <br>
												
												    <div class="form-group">
<<<<<<< HEAD
													    <label>Address </label>
													    <br>
													    <input value="{{$supp->strSuppAdd}}" name="supplier_Add_edit" id="supplier_Add_edit" class="form-control" type="text">
														<br>
														</div>
														<br>
=======
													    <label>Street </label>
													    <input value="{{$supp->strSuppStAdd}}" name="supplier_st_edit" id="supplier_st_edit" class="form-control" type="text">
														
														<label>Baranggay</label>
													    <input value="{{$supp->strSuppCityAdd}}" name="supplier_brgy_edit" id="supplier_brgy_edit" class="form-control" type="text">
													    
														<label>City </label>
													    <input value="{{$supp->strSuppStateAdd}}" name="supplier_city_edit" id="supplier_city_edit" class="form-control" type="text">
													</div>

>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
												    <label>Contact Number </label>
												    <br>
												    <input value="{{$supp->strSSCont}}" name="supplier_contactNo_edit" id="supplier_contactNo_edit" class="form-control" type="text" required>
												 	<br>
												 	<label>Email Address </label>
<<<<<<< HEAD
												 	<br>
												    <input value="{{$supp->strSuppEAdd}}" name="supplier_emailAd_edit" id="supplier_emailAd_edit" class="form-control" type="email">
													<br>
													<h3>Contact Person</h3>
=======
												    <input value="{{$supp->strSuppEAdd}}" name="supplier_emailAd_edit" id="supplier_emailAd_edit" class="form-control" type="email">
												
													<h4>Contact Person</h4>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
													<div class="form-group">
														<label>First Name</label>
														<br>
												    	<input value="{{$supp->strSSContFName}}" name="supplier_fname_edit" id="supplier_fname_edit" class="form-control" type="text"  required>
														<br>
														<label>Middle Initial</label>
														<br>
												    	<input value="{{$supp->strSSContMInit}}" name="supplier_mname_edit" id="supplier_mname_edit" class="form-control" type="text"  required>
														<br>
														<label>Last Name</label>
														<br>
												    	<input value="{{$supp->strSSContLName}}" name="supplier_lname_edit" id="supplier_lname_edit" class="form-control" type="text"  required>
														<br>
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
									<!-- Modal Delete -->
								<div id="delete{{$supp->strSuppId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body"  style="background-color:black; color:white;">
									      	<p>
									      	<form id="delete" action="/supplierDelete" method="post">
								
											<!-- <label>Supplier ID </label> -->
											<label style="margin-left:20px; font-weight:bold;">Are you sure you want to delete?</label><br>
													   
								    		<input value="{{$supp->strSuppId}}" id="sup_ID_del" name="sup_ID_del" type="text" hidden>						  
											<label style="margin-left:50px">{{$supp->strSuppName}}</label>
								    		<input value="{{$supp->strSuppName}}" id="sup_name_del" name="sup_name_del" type="text" hidden>
							   				 <div class="container" style="margin-left:430px">
									        <button type="submit" class="btn btn-danger">Yes</button>
									        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
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
<<<<<<< HEAD
                          </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
  		</div>

				
  </div>
     </form>
=======
  			  	</table>
			</div>
  			<div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
  		</div>
   </form>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997

@stop