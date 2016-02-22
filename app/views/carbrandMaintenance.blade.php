@extends('maintenance')

@section('contentMaintenance')

	<form id="Car_Brand" >  			
  		<div class="panel" style="border:0px;">
  			<div class="panel-heading">
  				<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:1000px; top:30px"><i class="glyphicon glyphicon-plus"></i> </button> 
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
										      	<form action="/carbrandAdd" method="post">
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
  			<h2 style="color:white">CAR BRANDS</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px;color:white">

  			  		<thead>
                        <tr>
                          <!-- <th>Car Brand ID</th> -->
                          <th>Car Brand Name</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($carbrands as $cbrands)
                      		@if($cbrands->status == 1)
                      	<tr>
                      		<td hidden>{{ $cbrands->strCarBrandId }}</td>
                      		<td>{{ $cbrands->strCarBrandDesc }}</td>
                      		<td>
								<button id="btn_edit" type="button" class="btn btn-danger" data-toggle="modal" href="#edit{{ $cbrands->strCarBrandId }}"><i class="glyphicon glyphicon-pencil"></i></button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{ $cbrands->strCarBrandId }}"><i class="glyphicon glyphicon-remove"></i></button>
                      		
									

                      				<!-- Modal Delete -->
									<div id="delete{{ $cbrands->strCarBrandId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body" style="background-color:black">
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
  			<div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
  		</div>
    </form>

@stop