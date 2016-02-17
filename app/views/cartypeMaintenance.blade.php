@extends('layouts.master')

@section('content')

	<form id="Car_Type" >  			
  		<div class="panel panel-primary">
  			<div class="panel-heading">
  				Car Types 
  				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalAdd">Add</button>
  			</div>
  			<div class="panel-body">

  			  	<table id="table" class="table table-bordered table-responsive">

  			  		<thead>
                        <tr>
                          <th>Car Type Id</th>
                          <th>Car Type Name</th>
                          <th>Car Type Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($carTypes as $ctypes)
                      		@if($ctypes->status == 1)
                      	<tr>
                      		<td>{{ $ctypes->strCarTypeId }}</td>
                      		<td>{{ $ctypes->strCarTypeName }}</td>
                      		<td>{{ $ctypes->strCarTypeDesc }}</td>
                      		<td>
								<button id="btn_edit" type="button" class="btn btn-info" data-toggle="modal" href="#edit{{ $ctypes->strCarTypeId }}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-info" data-toggle="modal" href="#delete{{ $ctypes->strCarTypeId }}">Delete</button>
                      		

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
											    <input value="{{$ctypes->strCarTypeId}}" id="car_type_id_del" name="car_type_id_del" class="form-control" type="text" readonly>
											    <label>Car Type Name </label>
											    <input value="{{ $ctypes->strCarTypeName }}" id="car_type_name_del" name="car_type_name_del" class="form-control" type="text" readonly>
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
									<div id="delete{{ $ctypes->strCarTypeId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/cartypeDel" method="post">
									        <div class="form-group" style="color:black">
									        	<label>Car Type Id </label>
											    <input value="{{$ctypes->strCarTypeId}}" id="car_type_id_del" name="car_type_id_del" class="form-control" type="text" readonly>
											    <label>Car Type Name </label>
											    <input value="{{ $ctypes->strCarTypeName }}" id="car_type_name_del" name="car_type_name_del" class="form-control" type="text" readonly>
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
									<div id="edit{{ $ctypes->strCarTypeId }}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/cartypeUp" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Car Type Id </label>
												    <input value="{{$ctypes->strCarTypeId}}" name="car_type_id_edit" id="car_type_id_edit" class="form-control" type="text" readonly>
												    
													<label>Car Type Name </label>
												    <input value="{{ $ctypes->strCarTypeName }}" name="car_type_name_edit" id="car_type_name_edit" class="form-control" type="text" required>

												    <label>Car Type Description </label>
												    <input value="{{ $ctypes->strCarTypeDesc }}" name="car_type_desc_edit" id="car_type_desc_edit" class="form-control" type="text" required>
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

									<!-- Modal Add -->
									<div id="modalAdd" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">ADD</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/cartypeAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Car Type Id </label>
												    <input value="{{$newID}}" id="car_type_id_add" name="car_type_id_add" class="form-control" type="text" required>
													
													<label>Car Type Name </label>
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
                      		</td>
                      	</tr>
                      		@endif
                        @endforeach
                      </tbody>
  			  	</table>
			</div>
  			<div class="panel-footer">

  			</div>
  		</div>
    </form>

@stop