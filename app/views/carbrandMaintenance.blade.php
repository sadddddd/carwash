@extends('maintenance')

@section('contentMaintenance')

	<form id="Car_Brand" >  			
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
		<div id="Inactive" class="collapse" style="border:0px; background-color:white; width:1010px; margin-left:-15px">
		<div class="panel drop_navbar">
		<div class="panel-heading">
  		<h1 style="color:gray">INACTIVE</H1>
  			</div>
  		<div class="panel-body">

<div class="panel-heading">
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
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables2-example" style="color:black">
                                    <thead>
                                        <tr>
					                          <!-- <th>Car Brand ID</th> -->
					                          <th>Car Brand Name</th>
					                          <th>Actions</th>
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody>
                      	@foreach($carbrands as $cbrands)
                      		@if($cbrands->status == 0)
                      	<tr>
                      		<td hidden>{{ $cbrands->strCarBrandId }}</td>
                      		<td>{{ $cbrands->strCarBrandDesc }}</td>
                      		<td>
								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#activate{{$cbrands->strCarBrandId  }}" ><span data-toggle="tooltip" title="Activate" data-placement="right" ><i class="glyphicon glyphicon-arrow-up"></i><span></a></li>
                      <!-- Modal Delete -->
									<div id="activate{{ $cbrands->strCarBrandId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!- Modal content-->
									    <div class="modal-content">
									   								        
									      <div class="modal-body" style="background-color:black; color:white">
									      	<form id="delete" action="/carbrandReactive" method="post">
									        <div class="form-group" >
									        <!-- 	<label>Car Model ID </label> -->
									        <label>Are you sure you want to activate?</h4>

									     
											    <input value="{{ $cbrands->strCarBrandId }}" id="car_brand_id_del" name="car_brand_id_del" type="text" hidden>
											    <br>
											    <label>{{ $cbrands->strCarBrandDesc }} </label>
											    <input value="{{ $cbrands->strCarBrandDesc }}" id="car_brand_name_del" name="car_brand_name_del" type="text" hidden>
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
  		<div class="panel drop_navbar" style="border:0px; width:1010px; background-color:white;">
  			<div class="panel-heading">
  				

				<!-- Modal Add -->
										<div id="modalAdd" class="modal fade" role="dialog">
										  <div class="modal-dialog">

										    <!-- Modal content-->
										    <div class="modal-content">
										      <div class="modal-header" style="background-color:black">
										        <button type="button" class="close" data-dismiss="modal" style="background-color:black; color:white">&times;</button>
										        <h4 class="modal-title"><center>ADD CAR BRAND</center></h4>
										      </div>
										      <div class="modal-body">
										      	<form action="/carbrandValidate" method="post">
										        <div class="form-group" style="color:black">										        	 	
										        	<!-- <label>* Car Brand ID </label> -->
												    <input value="{{$newID}}" id="car_brand_id_add" name="car_brand_id_add" type="text" hidden>
													<label>* Car Brand Name </label>
												    <input id="car_brand_name_add" name="car_brand_name_add" class="form-control" type="text" required>
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



  			            <div class="panel-heading">
				  			<h1 style="color:gray">CAR BRANDS</H1>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="color:black; border:0px">
                                    <thead>
                                        <tr>                          
                                        		<!-- <th>Car Brand ID</th> -->
					                            <th>Car Brand Name</th>
					                            <th>Actions</th>

					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody>
                      	@foreach($carbrands as $cbrands)
                      		@if($cbrands->status == 1)
                      	<tr>
                      		<td hidden>{{ $cbrands->strCarBrandId }}</td>
                      		<td>{{ $cbrands->strCarBrandDesc }}</td>
                      		<td>
									<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#edit{{  $cbrands->strCarBrandId}}" ><span data-toggle="tooltip" title="Edit" data-placement="left" ><i class="glyphicon glyphicon-pencil"></i><span></a></li>
  								<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger" href="#delete{{  $cbrands->strCarBrandId }}" ><span data-toggle="tooltip" title="Delete" data-placement="right" ><i class="glyphicon glyphicon-remove"></i><span></a></li>
                      			
									

                      				<!-- Modal Delete -->
									<div id="delete{{ $cbrands->strCarBrandId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body" style="background-color:black;color:white">
									      	<form id="delete" action="/carbrandDel" method="post">
									        <div class="form-group">
									        	<!-- <label>Car Brand ID </label> -->
											    <input value="{{$cbrands->strCarBrandId}}" id="car_brand_id_del" name="car_brand_id_del" type="text" hidden>
												<label>Are you sure you want to delete?</label><br>
											    <label>{{ $cbrands->strCarBrandDesc }}</label>
											    <!-- <input value="{{ $cbrands->strCarBrandDesc }}" id="car_brand_name_del" name="car_brand_name_del" class="form-control" type="text" readonly>
										 -->	<div class="container" style="margin-left:430px">
									        <button type="submit" class="btn btn-danger">Yes</button>
									        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
									      </div>
											</div>
									      </div>
									      
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal Delete -->

									<!-- Modal Edit -->
									<div id="edit{{ $cbrands->strCarBrandId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white"><center>EDIT CAR BRAND</center></h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/carbrandUp" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>Car Brand ID </label> -->
												    <input value="{{$cbrands->strCarBrandId}}" name="car_brand_id_edit" id="car_brand_id_edit"  type="text" hidden>
												    
													<label>Car Brand Name </label>
													<br>
												    <input value="{{ $cbrands->strCarBrandDesc }}" name="car_brand_name_edit" id="car_brand_name_edit" class="form-control" type="text" required>
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

@stop