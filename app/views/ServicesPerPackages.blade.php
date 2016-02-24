@extends('maintenance')

@section('contentMaintenance')

<<<<<<< HEAD
	<form id="servicesPackage_Details" >  	
	<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%; top:21px" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button>     
                    			
  				<h2 style="color:white">SERVICE PER PACKAGE</H2>		
=======
<form id="servicesPackage_Details" > 

	<script type="text/javascript">

		$(document).ready(function(){

		    $("#amount").hide();
		    $("#percentage").hide();	

		    $("#package_disc").click(function(){
		    	$("#amount_disc").attr('checked', false);
		        $("#amount").hide();
		        $("#percentage").show();
		    });
		    $("#amount_disc").click(function(){
		    	$("#package_disc").attr('checked', false);
		    	$("#amount").show();
		        $("#percentage").hide();
		        
		    });
		});
	</script>  
	<div class="container" style="color:white"> 	
		<label>Total Price </label>
		<label id="tp"></label>
		<label>Less Price </label>
		<label id="lp"></label>
		<label>Package Price </label>
		<label id="pp"></label>
	</div>
	<button type="button" class="btn btn-danger btn-circle btn-lg" title="Add" style="position:absolute; left:96%; top:21px" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon-plus"></i> </button>     
                 @foreach($servpack as $services)
                    @if(($services->strPTSPack == $packID))
                    <label hidden>{{$label = $services->strPackName}}</label>
  					@endif
  				@endforeach
  				<h2 style="color:white">Services of {{$label}}</H2>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
  		<div class="panel panel-primary" style="border:0px;">
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
                        <tr>
<<<<<<< HEAD
                        	
                          <th>Service ID</th>
                          <th>Service Name</th>
                      
                          <th>Service Description</th>
                 
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	
                      	<tr>

                      		
                      		<td></td>
                      		<td></td>
                      		<td></td>
                      		
                      		
								
                      		<td>
								
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete">Delete</button>
=======
                            <th>Service Name</th>
                      	    <th>Service Description</th>
                      	    <th>Service Price</th>
                 			<th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($servpack as $services)
                      	@if(($services->status == 1)&&($services->strPTSPack == $packID))
                      	<tr>
                      		<td>{{$services->strPTSServ}}</td>
							<td>{{$services->strServName}}</td>
							@foreach($service as $price)
                      			@if($price->strServId == $services->strPTSServ)
                      			<input value="{{$var = $price->dblServPrice}}"  id="price" name="price" type="text" hidden>
                      			@endif
                      		@endforeach
                      		<td>{{$var}}</td>
                      		<input value="{{$sum = $sum+$var}}"  id="price" name="price" type="text" hidden>
                      		<td>
								
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$services->strPTSId}}">Delete</button>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
                      		

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
									        	<label>Service ID </label>
											    <input value="" id="prod_ser_cat_id_del" name="prod_ser_cat_id_del" class="form-control" type="text" readonly>
											    <label>Service Name </label>
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
<<<<<<< HEAD
									<div id="delete" class="modal fade" role="dialog">
=======
									<div id="delete{{$services->strPTSId}}" class="modal fade" role="dialog">
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
<<<<<<< HEAD
									      	<form id="delete" action="" method="post">
									        <div class="form-group" style="color:black">
									        	<label>Service ID </label>
											    <input value="" id="service_id_del" name="service_id_del" class="form-control" type="text" readonly>
											    <label>Service Name </label>
											    <input value="" id="service_id_del" name="service_name_del" class="form-control" type="text" readonly>
=======
									      	<form id="delete" action="/servpackDel" method="post">
									        <div class="form-group" style="color:black">
											    <input value="{{$services->strPTSId}}" id="servpack_id_del" name="servpack_id_del" type="text" hidden>
											    <label>Service Name </label>
											    <input value="{{$services->strServName}}" id="servpack_name_del" name="servpack_name_del" class="form-control" type="text" readonly>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
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
<<<<<<< HEAD
									      	<form action="" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Service ID</label>
													<select class="form-control" value="" name="service_id_add" id="service_id_add">
								                        <option>1</option>
								                        <option>2</option>
								                        <option>3</option>
								                        <option>4</option>
								                        <option>5</option>
								                    </select>

										        	<label>Service Name</label>
												    <input value="" name="service_name_add" id="service_name_add" class="form-control" type="text" required>
												   
											</div>
											</p>
									      </div>
=======
									      	<form action="/servpackAdd" method="post">
										        <div class="form-group" style="color:black">

										        	<input value="{{ $newID }}" id="servpack_id_add" name="servpack_id_add" type="text" >
										        	<input value="{{ $packID }}" id="pack_id_add" name="pack_id_add" type="text" >
										        	
										        	<label>Service Name</label>
													<select class="form-control" value="" name="service_id_add" id="service_id_add">
								                        <option value="Choose a service">Choose a service</option>
								                       
						                                @foreach($serv as $serv2)
						                                	@if($serv2->status == 1)
						                                		<option value="{{ $serv2->strServId }}">{{ $serv2->strServName }}</option>
						                                	@endif
						                                @endforeach
								                    </select>
								                </div>
											</p>
									    </div>
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
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
<<<<<<< HEAD
                      	
                      </tbody>
  			  	</table>
=======
                      	@endif
                      	@endforeach
                    </tbody>
  			  	</table>
  			  	<label>Total Price</label>
  			  	<input value="{{$sum}}"  id="price" name="price" type="text" style="color:black">

  			  	<button type="button" class="btn btn-sm" data-toggle="modal" href="#editPrice">Price Edit</button>

  			  	<!-- Modal Edit Price -->
									<div id="editPrice" class="modal fade" role="dialog">
									  <div class="modal-dialog">

										<!-- Modal content -->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Package Price Edit</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Discount via:</label>						
													<table >
														<tr>	
															<td>
															<input type="radio" id="package_disc" name="package_disc" value="percentage" onchange="changeP();"> Percentage
															<br>
															<input id="percentage" style="width:100px; margin-left:20px" type="number" class="form-control" placeholder="%" hidden>
															</td>
														</tr>
														<br>
														<tr>
															<td><input type="radio" id="amount_disc" name="amount_disc" value="amount" > Amount
															<br>
															<input id="amount" style="width:100px; margin-left:20px" type="number" step="any" min="0" class="form-control" hidden>
															</td>
														</tr>
														</table>
													<label>Total Price </label>
												    <input value="{{$sum}}" name="service_price_edit" id="service_price_edit" class="form-control" type="number" readonly>
												
												 	
												 	<label>Package Price </label>
												    <input value="" name="service_price_edit" id="service_price_edit" class="form-control" type="number" readonly>
												
												</div>
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Save Price</button>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									      </div>
									  	</form>
									    </div>
									  </div> 
									</div><!-- Modal Edit Price -->
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
			</div>
  			<div class="panel-footer" style="border:0px;">
				<label style="color:black"> No. of records:  </label>
  			</div>
  		</div>
    </form>

@stop