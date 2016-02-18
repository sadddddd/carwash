@extends('maintenance')

@section('contentMaintenance')

	<form id="Customer_Cars" >  			
  		<div class="panel" style="border:0px;">
  			<div class="panel-heading">
  				<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%;" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button>     
  				
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
									        <button type="submit" class="btn btn-danger">Confirm</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal dummy -->

                <!-- Modal Car Add -->
									<div id="modalAdd" class="modal fade" role="dialog" style="min-height:700px;">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">CAR ADD</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/carAdd" method="post">
										        <div class="form-group" style="color:black">
												    <input value="{{ $custid }}" id="custid_caradd" name="custid_caradd"type="text" hidden>
													
													<div class="form-group">
														<label>Plate Number</label>
													    <input class="form-control" type="text" name="carplate_add" id="carplate_add" required>
												    </div>

												    <label>Pick the car's model:</label>
												    <div class="input-field">
												      <select class="form-control" name="carmodel_add" id="carmodel_add" required>
												        <option selected disabled value="Pick car model">Pick car model</option>
						                                @foreach($carmodels as $cmodel)
						                                	@if(($cmodel->status == '1'))
						                                		<option value="{{ $cmodel->strCarModelId }}">{{ $cmodel->strCarModelDesc }}</option>
						                                	@endif
						                                @endforeach
												      </select>
												    </div>
												</div>
									      	</p>
										      <div class="modal-footer">
										        <button type="submit" class="btn btn-info">Save</button>
										        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										      </div>
									  		</form>
									    </div>
									  </div>
									</div><!-- Car Add-->
                     <br>
            </div>
       
  				<h2 style="color:white">LIST OF CARS</H2>		
  		
  			
  			<div class="table-bordered table-responsive" style="border:0px;">
  				<table id="table" class="table table-bordered table-responsive" style="color:white">
					<thead>
						<tr>
							
							<th>Plate No.</th>
							<th>Car Model</th>
							<th>Car Brand</th>
							<th>Car Type</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($custcars as $custcar)
                      	@if(($custcar->status == 1) && ($custcar->strCCCust == $custid))
							<tr>
								<!-- Modal Car Edit -->
									<div id="carEdit{{$custcar->strCCPlateNo}}" class="modal fade" role="dialog" style="min-height:700px;">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">CAR EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/carEdit" method="post">
										        <div class="form-group" style="color:black">
												    <input value="{{ $custid }}" id="custid_caredit" name="custid_caredit" type="text" hidden>
													<input value="{{ $custcar->strCCPlateNo }}" id="carplate_old" name="carplate_old" type="text" hidden>
													<div class="form-group">
														<label>Plate Number</label>
													    <input value="{{ $custcar->strCCPlateNo }}" id="carplate_edit" name="carplate_edit" class="form-control" type="text" required>
												    </div>

												    <label>Pick the car's brand:</label>
												    <div class="input-field">
												      <select class="form-control" name="carmodel_edit" id="carmodel_edit" required>
												        <option selected value="{{$custcar->strCCModel}}">{{$custcar->strCarModelDesc}}</option>
						                                @foreach($carmodels as $cmodel)
						                                	@if(($cmodel->status == '1') && ($cmodel->strCarModelId != $custcar->strCCModel))
						                                		<option value="{{ $cmodel->strCarModelId }}">{{ $cmodel->strCarModelDesc }}</option>
						                                	@endif
						                                @endforeach
												      </select>
												    </div>
												</div>
									      	</p>
										      <div class="modal-footer">
										        <button type="submit" class="btn btn-info">Save</button>
										        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										      </div>
									  		</form>
									    </div>
									  </div>
									</div><!-- Car Edit -->	
									
								<td hidden>{{$custcar->strCCCust}}</td>
								<td>{{$custcar->strCCPlateNo}}</td>
								<td>{{$custcar->strCarModelDesc}}</td>
								<td>{{$custcar->strCarBrandDesc}}</td>
								<td>{{$custcar->strCarTypeName}}</td>
								<td>
									<button id="btn_caredit" type="button" class="btn btn-info" data-toggle="modal" href="#carEdit{{$custcar->strCCPlateNo}}" data-dismiss="modal">Edit</button>
									<button id="btn_cardelete" type="button" class="btn btn-info" data-toggle="modal" href="#carDelete{{$custcar->strCCPlateNo}}" data-dismiss="modal">Delete</button>

								</td>	
								
									<!-- Modal Car Delete -->
									<div id="carDelete{{$custcar->strCCPlateNo}}" class="modal fade" role="dialog" style="min-height:700px;">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:black">CAR DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/carDelete" method="post">
										        <div class="form-group" style="color:black">
												    <input value="{{ $custid }}" id="custid_cardelete" name="custid_cardelete" type="text" hidden>
													<div class="form-group">
														<label>Plate Number</label>
													    <input value="{{ $custcar->strCCPlateNo }}" id="carplate_delete" name="carplate_delete" class="form-control" type="text" readonly>
												    </div>
												    <div class="form-group">
														<label>Car Model</label>
													    <input value="{{$custcar->strCarModelDesc}}" id="carmodel_delete" name="carmodel_delete" class="form-control" type="text" readonly>
												    </div>
												</div>
									      	</p>
										      <div class="modal-footer">
										        <button type="submit" class="btn btn-info">Save</button>
										        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										      </div>
									  		</form>
									    </div>
									  </div>
									</div><!-- Car Delete -->

								



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
									        <button type="submit" class="btn btn-danger">Confirm</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div>
									</div><!-- Modal dummy -->				
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