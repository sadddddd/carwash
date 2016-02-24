@extends('maintenance')

@section('contentMaintenance')

	<form id="Customer_Cars" >


<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:transparent; border:0px" >
				    <div class="container" >
				        <div class="collapse navbar-collapse" >
				            <ul class="nav navbar-nav" >
				            <!-- <button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" data-toggle="modal" data-target="#modalAdd" style="position:absolute; left:940px;"><i class="glyphicon glyphicon-plus"></i> </button> </td> -->
            				<li>	<a data-toggle="modal" data-parent="#accordion" class="btn btn-danger btn-circle btn-lg " href="#modalAdd" style="position:absolute; margin-left:1152px;margin-top:70px; border:0px"><span data-toggle="tooltip" title="Add" data-placement="bottom" ><i class="glyphicon glyphicon-plus"></i><span></a></li>
  							<li>	<a data-toggle="collapse" id="inactive" data-parent="#accordion" title="inactive" class="btn btn-danger btn-circle btn-lg " href="#Inactivediv" style="position:absolute; margin-left:1152px;margin-top:125px; border:0px "><span data-toggle="tooltip" title="Open Inactive" data-placement="bottom"><i class="glyphicon glyphicon-folder-open"></i><span></a></li>
 				            </ul>
				        </div>
				    </div>
				</div>  			
  		<div class="panel" style="border:0px; width:1010px; background-color:white">
  			<div class="panel-heading">
  				
            <!-- Modal dummy -->
	
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
									      <div class="modal-header" style="background-color:black">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title" style="color:white"><center>ADD CAR</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/carAdd" method="post">
										        <div class="form-group" style="color:black">
												    <input value="{{ $custid }}" id="custid_caradd" name="custid_caradd"type="text" hidden>
													
													<div class="form-group">
														<label>* Plate Number</label>
													    <input class="form-control" type="text" name="carplate_add" id="carplate_add" required>
												    </div>

												    <label>* Pick the car's model:</label>
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
										        <button type="submit" class="btn btn-info">Add</button>
										        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										      </div>
									  		</form>
									    </div>
									  </div>
									</div><!-- Car Add-->
                     <br>
            </div>
       
       			@foreach($custcars as $cc)
                    @if(($cc->strCCCust == $custid))
                    <label hidden>{{$label = $cc->strCustFName}}</label>
  					@endif	
  				@endforeach

  				<h2 style="color:gray">{{$label}}'s Car(s)</H2>		
  		
  			
  			<div class="table-bordered table-responsive" style="border:0px; ">
  				<table id="table" class="table table-bordered table-responsive" style="color:black">
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
									      <div class="modal-header"  style="color:white; background-color:black">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><center>CAR EDIT</center></h4>
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

												    <label>Pick the car's model:</label>
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
									<button id="btn_caredit" type="button" class="btn btn-danger" data-toggle="modal" href="#carEdit{{$custcar->strCCPlateNo}}" data-dismiss="modal" title="Edit"><i class="glyphicon glyphicon-pencil"></i></button>
									<button id="btn_cardelete" type="button" class="btn btn-danger" data-toggle="modal" href="#carDelete{{$custcar->strCCPlateNo}}" data-dismiss="modal" title="Delete"><i class="glyphicon glyphicon-remove"></i></button>

								</td>	
								
									<!-- Modal Car Delete -->
									<div id="carDelete{{$custcar->strCCPlateNo}}" class="modal fade" role="dialog" style="min-height:700px;">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body"  style="background-color:black; color:white">
									      	<p>
									      	<form action="/carDelete" method="post">
										      
												    <input value="{{ $custid }}" id="custid_cardelete" name="custid_cardelete" type="text" hidden>
													<div class="form-group">
														<label>Are you sure you want to delete?</label><br>
													    <input value="{{ $custcar->strCCPlateNo }}" id="carplate_delete" name="carplate_delete" type="text" hidden>
												   
														<label>{{$custcar->strCarModelDesc}}</label><br>
														<label>Plate no.: {{$custcar->strCCPlateNo}}</label>
													    <input value="{{$custcar->strCCPlateNo}}" id="carmodel_delete" name="carmodel_delete" type="text" hidden>
												    </div>
											</p>
										    
									  		<div class="container" style="margin-left:430px">
										        <button type="submit" class="btn btn-danger">Yes</button>
										        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
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
  		</div>
  									
    </form>
@stop