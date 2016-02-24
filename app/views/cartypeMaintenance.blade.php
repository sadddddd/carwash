@extends('maintenance')

@section('contentMaintenance')
	<form id="Car_Type" >  			
<<<<<<< HEAD
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:transparent; border:0px" >
				    <div class="container" >
				        <div class="collapse navbar-collapse" >
				            <ul class="nav navbar-nav" >
				            <!-- <button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:940px;"><i class="glyphicon glyphicon-plus"></i> </button> </td> -->
            				<li>	<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger btn-circle btn-lg " href="#modalAdd" style="position:absolute; margin-left:1152px;margin-top:70px; border:0px"><span data-toggle="tooltip" title="Add" data-placement="bottom" ><i class="glyphicon glyphicon-plus"></i><span></a></li>
  							<li>	<a data-toggle="collapse" id="inactive" data-parent="#accordion"  class="btn btn-danger btn-circle btn-lg " href="#Inactive" style="position:absolute; margin-left:1152px;margin-top:125px; border:0px "><span data-toggle="tooltip" title="Open Inactive" data-placement="bottom"><i class="glyphicon glyphicon-folder-open"></i><span></a></li>
 				            </ul>
				        </div>
				    </div>

</div>

<div id="Inactive" class="collapse" style="width:1010px; margin-left:-15px">
	<div class="panel drop_navbar" style="border:0px; background-color:white">
		<div class="panel-heading">
  		<h1 style="color:gray">INACTIVE</H1>
  			</div>
  		<div class="panel-body">

<div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables2-example" style="color:black; border:0px">
                                    <thead>
                                        <tr>
					                          <th>Car Type Name</th>
					                          <th>Car Type Description</th>
					                          <th>Actions</th>
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody>
                      	@foreach($carTypes as $ctypes)
                      		@if($ctypes->status == 0)
                      		<input value="{{$ctr++}}" hidden>
                      	<tr>
                      		<td hidden>{{ $ctypes->strCarTypeId }}</td>
                      		<td>{{ $ctypes->strCarTypeName }}</td>
                      		<td>{{ $ctypes->strCarTypeDesc }}</td>
                      		<td>
								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#activate{{ $ctypes->strCarTypeId }}" ><span data-toggle="tooltip" title="Activate" data-placement="right" ><i class="glyphicon glyphicon-arrow-up"></i><span></a></li>
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

                      		<!-- Modal Delete -->
									<div id="activate{{ $ctypes->strCarTypeId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									     
									  
									        
									      <div class="modal-body" style="background-color:black; color:white">
									      	<form id="delete" action="/cartypeReactive" method="post">
									        <div class="form-group" >
									        <!-- 	<label>Car Model ID </label> -->
									        <label>Are you sure you want to activate?</h4>

									     
											    <input value="{{ $ctypes->strCarTypeId }}" id="car_type_id_del" name="car_type_id_del" type="text" hidden>
											    <br>
											    <label>{{$ctypes->strCarTypeDesc}}</label>
											    <input value="{{$ctypes->strCarTypeDesc }}" id="car_type_name_del" name="car_type_name_del" type="text" hidden>
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

                    <!-- /.panel --> 
                    </div>
                </div>
            </div>	
  		<div class="panel drop_navbar" style="border:0px; background-color:white; width:1010px">
  			
  			<div class="panel-heading">
  				  

				<!-- Modal Add -->
									<div id="modalAdd" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white"><center>ADD CAR TYPE</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	
									      	<form action="/cartypeValidate" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>* Car Type ID </label> -->
												    <input value="{{$newID}}" id="car_type_id_add" name="car_type_id_add" type="text" hidden>
													
													<label>* Car Type Name </label>
												    <input id="car_type_name_add" name="car_type_name_add" class="form-control" type="text" required>
												    
												    <label>Car Type Description </label>
												    <input id="car_type_desc_add" name="car_type_desc_add" class="form-control" type="text" required>
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
				  			<h1 style="color:gray">CAR TYPES</H1>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead>
                                        <tr>
					                          <th>Car Type Name</th>
					                          <th>Car Type Description</th>
					                          <th>Actions</th>
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                                                          <tbody>
=======
  			<h2 style="color:white">CAR TYPES</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px; color:white;">

  			  		<thead>
                        <tr>
                         
                          <th>Car Type Name</th>
                          <th>Car Type Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                      	@foreach($carTypes as $ctypes)
                      		@if($ctypes->status == 1)
                      		<input value="{{$ctr++}}" hidden>
                      	<tr>
                      		<td hidden>{{ $ctypes->strCarTypeId }}</td>
                      		<td>{{ $ctypes->strCarTypeName }}</td>
                      		<td>{{ $ctypes->strCarTypeDesc }}</td>
                      		<td>
<<<<<<< HEAD
									<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#edit{{  $ctypes->strCarTypeId }}" ><span data-toggle="tooltip" title="Edit" data-placement="left" ><i class="glyphicon glyphicon-pencil"></i><span></a></li>
  								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#delete{{  $ctypes->strCarTypeId }}" ><span data-toggle="tooltip" title="Delete" data-placement="right" ><i class="glyphicon glyphicon-remove"></i><span></a></li>
                      			
=======
								<button id="btn_edit" type="button" class="btn btn-danger" data-toggle="modal" href="#edit{{ $ctypes->strCarTypeId }}" title="Edit"><i class="glyphicon glyphicon-pencil"></i> </button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{ $ctypes->strCarTypeId }}" title="Delete"><i class="glyphicon glyphicon-remove"></i></button>
                      		
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997

                      				
				
                      				<!-- Modal Delete -->
									<div id="delete{{ $ctypes->strCarTypeId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body" style="background-color:black; color:white;">
									      	<p>
									      	<form id="delete" action="/cartypeDel" method="post">
									        <div class="form-group" >
									        <label>Are you sure you want to delete?</label><br>
											    <input value="{{$ctypes->strCarTypeId}}" id="car_type_id_del" name="car_type_id_del" type="text" hidden>
											    <label style="margin-left:20px">{{ $ctypes->strCarTypeName }} </label>
											    <input value="{{ $ctypes->strCarTypeName }}" id="car_type_name_del" name="car_type_name_del" type="text" hidden>
										  	</div>
									      
									      <div class="container" style="margin-left:420px">
									        <button type="submit" class="btn btn-danger">Yes</button>
									        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
									      </div>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Delete -->

									<!-- Modal Edit -->
									<div id="edit{{ $ctypes->strCarTypeId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><center>EDIT CAR TYPE</CENTER></h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/cartypeUp" method="post">
										        <div class="form-group" style="color:black;">
										        	<!-- <label>Car Type ID </label> -->
												    <input value="{{$ctypes->strCarTypeId}}" name="car_type_id_edit" id="car_type_id_edit" type="text" hidden>
<<<<<<< HEAD
												    <br>
=======
												    
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
													<label>Car Type Name </label>
												    <br>
												    <input value="{{ $ctypes->strCarTypeName }}" name="car_type_name_edit" id="car_type_name_edit" class="form-control" type="text" required>
												    <br>
												    <label>Car Type Description </label>
												    <br>
												    <input value="{{ $ctypes->strCarTypeDesc }}" name="car_type_desc_edit" id="car_type_desc_edit" class="form-control" type="text" required>
													<br>
												</div>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-primary">Save</button>
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
<<<<<<< HEAD

                          </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
=======
  			  	</table>
			</div>
  			<div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
  		</div>





  			
    </form>

@stop