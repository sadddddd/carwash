@extends('maintenance')

@section('contentMaintenance')
	
	<form id="Car_Model" >  

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
						<div id="Inactive" class="collapse" style="border:0px; background-color:white; width:1010px; margin-left:-15px">
		<div class="panel drop_navbar">
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
					                          <th>Car Model Name</th>
					                          <th>Car Brand</th>
					                          <th>Car Type</th>
					                          <th>Actions</th>	                          
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody style="overflow:auto;height:300px">
                      	

						
                      	@foreach($carModels as $cmodel)
                      
                      		@if($cmodel->status == 0)
                      		     
                      	<tr>
                      		<td hidden>{{ $cmodel->strCarModelId }}</td>
                      		<td>{{ $cmodel->strCarModelDesc }}</td>
                      		<td>{{ $cmodel->strCarBrandDesc }}</td>
                      		<td>{{ $cmodel->strCarTypeName }}</td>
                      		<td>
								<button id="btn_activate" type="button" class="btn btn-danger" data-toggle="modal" href="#activate{{ $cmodel->strCarModelId }}" title="activate"><i class="glyphicon glyphicon-arrow-up"></i></button>
								<!-- Modal Delete -->
									<div id="activate{{ $cmodel->strCarModelId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">									        
									      <div class="modal-body" style="background-color:black; color:white">
									      	<form id="delete" action="/carmodelReactive" method="post">
									        <div class="form-group" >
									        <!-- 	<label>Car Model ID </label> -->
									        <label>Are you sure you want to activate?</h4>

									     
											    <input value="{{ $cmodel->strCarModelId }}" id="car_model_id_del" name="car_model_id_del" type="text" hidden>
											    <br>
											    <label>{{ $cmodel->strCarModelDesc }} </label>
											    <input value="{{ $cmodel->strCarModelDesc }}" id="car_model_name_del" name="car_model_name_del" type="text" hidden>
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

<<<<<<< HEAD

  		<div class="panel drop_navbar" style="border:0px; background-color:white; width:1010px">
  			
  			<div class="panel-heading">
  				
           <!--   <a href="#Inactive" class="btn btn-info" data-toggle="collapse">Simple collapsible</a>
          -->     <!-- Modal dummy -->
=======
	<form id="Car_Model" >  			
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

									<!-- Modal Add -->
									<div id="modalAdd" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" ><center>ADD CAR MODEL</center></h4>
									      </div>
									      <div class="modal-body">
									      	<form action="/carmodelValidate" method="post">
									        <div class="form-group" style="color:black">

<<<<<<< HEAD
									  		    <label>*Pick the car's type:</label>
											    <div class="input-field">
											      <select class="form-control" name="cartype_add" id="cartype_add" required >
											        <option value="" disabled selected>Pick a Model</option> @foreach($carTypes as $type)
=======
									        	
											    <label>*Pick the car's type:</label>
											    <div class="input-field">
											      <select class="form-control" name="cartype_add" id="cartype_add" required >
											        <option selected disabled value="Pick a car type">Pick a type</option>
					                                @foreach($carTypes as $type)
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
					                                <option value="{{ $type->strCarTypeId }}">{{ $type->strCarTypeName }}</option>
					                                @endforeach
											      </select>

												<label>* Pick the car's brand:</label>
											    <div class="input-field">
											      <select class="form-control" name="carbrand_add" id="carbrand_add" required>
											        <option value="" disabled selected>Pick a Brand</option>
					                                @foreach($carBrands as $brand)
					                                	@if($brand->status == '1')
					                                		<option value="{{ $brand->strCarBrandId }}">{{ $brand->strCarBrandDesc }}</option>
					                                	@endif
					                                @endforeach
											      </select>
											    </div>

											    <!--   <label>* Car Model ID </label> -->
											    <input value="{{$newID}}" id="car_model_id_add" name="car_model_id_add" type="text" hidden>
												
												<label>* Car Model Name </label>
											    <input id="car_model_name_add" name="car_model_name_add" class="form-control" type="text" required>
												

											    </div>

											</div>
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
				  			<h1 style="color:gray">CAR MODELS</H1>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead>
                                        <tr>
											    <th>Car Model Name</th>
					                            <th>Car Brand</th>
					                            <th>Car Type</th>
					                            <th>Actions</th>      
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody style="height:100px;overflow-y:scroll; ">
=======
  			<h2 style="color:white">CAR MODELS</H2>
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px; color:white">

                        		<thead>
                        <tr>
                          
                          <th>Car Model Name</th>
                          <th>Car Brand</th>
                          <th>Car Type</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                      	@foreach($carModels as $cmodel)
                      		@if($cmodel->status == 1)
                      		<input value="{{$ctr++}}" hidden>
                      	<tr>
                      		<td hidden>{{ $cmodel->strCarModelId }}</td>
                      		<td>{{ $cmodel->strCarModelDesc }}</td>
                      		<td>{{ $cmodel->strCarBrandDesc }}</td>
                      		<td>{{ $cmodel->strCarTypeName }}</td>
                      		<td>
<<<<<<< HEAD
								
                      			<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#edit{{ $cmodel->strCarModelId  }}" ><span data-toggle="tooltip" title="Edit" data-placement="left" ><i class="glyphicon glyphicon-pencil"></i><span></a></li>
  								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#delete{{ $cmodel->strCarModelId  }}" ><span data-toggle="tooltip" title="Delete" data-placement="right" ><i class="glyphicon glyphicon-remove"></i><span></a></li>
                      			
=======
								<button id="btn_edit" type="button" class="btn btn-danger" data-toggle="modal" href="#edit{{ $cmodel->strCarModelId }}"><i class="glyphicon glyphicon-pencil"></i></button>
								<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{ $cmodel->strCarModelId }}"><i class="glyphicon glyphicon-remove	"></i></button>

>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                      			<!-- Modal Edit -->
									<div id="edit{{ $cmodel->strCarModelId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content" >
									      <div class="modal-header" style="background-color:black; color:white">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><center>EDIT CAR MODEL</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/carmodelEdit" method="post">
									        <div class="form-group" style="color:black">

									        	
												

											    <label>Pick the car's type:</label>
<<<<<<< HEAD
											    <br>
=======
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
											    <div class="input-field">
											      <select class="form-control" name="cartype_edit" id="cartype_edit" required>
											        <option selected value="{{ $cmodel->strCMType }}">{{ $cmodel->strCarTypeName }}</option>
					                                @foreach($carTypes as $type)
					                                	@if(($type->status == '1') && ($type->strCarTypeId != $cmodel->strCMType))
					                                		<option value="{{ $type->strCarTypeId }}">{{ $type->strCarTypeName }}</option>
					                                	@endif
					                                @endforeach
											      </select>
<<<<<<< HEAD
												<br>
												<label>Pick the car's brand:</label>
												<br>
=======
												
												<label>Pick the car's brand:</label>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
											    <div class="input-field">
											      <select class="form-control" name="carbrand_edit" id="carbrand_edit" required>
											        <option selected value="{{ $cmodel->strCMBrand }}">{{ $cmodel->strCarBrandDesc }}</option>
					                                @foreach($carBrands as $brand)
					                                	@if(($brand->status == '1') && ($brand->strCarBrandId != $cmodel->strCMBrand))
					                                		<option value="{{ $brand->strCarBrandId }}">{{ $brand->strCarBrandDesc }}</option>
					                                	@endif
					                                @endforeach
											      </select>
											    </div>
<<<<<<< HEAD
											     <br>
=======
											     
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
											   <!--   <label>Car Model ID </label> -->
											    <input value="{{ $cmodel->strCarModelId }}" id="car_model_id_edit" name="car_model_id_edit"  type="text" hidden>
												
												<label>Car Model Name </label>
<<<<<<< HEAD
											    <br>
											    <input value="{{ $cmodel->strCarModelDesc }}" id="car_model_name_edit" name="car_model_name_edit" class="form-control" type="text" required>
												<br>
=======
											    <input value="{{ $cmodel->strCarModelDesc }}" id="car_model_name_edit" name="car_model_name_edit" class="form-control" type="text" required>
												
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
											    </div>
											</p>
											</div>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Save</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Edit -->

									<!-- Modal Delete -->
									<div id="delete{{ $cmodel->strCarModelId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									     
									  
									        
									      <div class="modal-body" style="background-color:black; color:white">
									      	<form id="delete" action="/carmodelDel" method="post">
									        <div class="form-group" >
									        <!-- 	<label>Car Model ID </label> -->
									        <label>Are you sure you want to delete?</h4>
									     
											    <input value="{{ $cmodel->strCarModelId }}" id="car_model_id_del" name="car_model_id_del" type="text" hidden>
											    <br>
											    <label>{{ $cmodel->strCarModelDesc }} </label>
											    <input value="{{ $cmodel->strCarModelDesc }}" id="car_model_name_del" name="car_model_name_del" type="text" hidden>
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

</div>
    </form>
@stop