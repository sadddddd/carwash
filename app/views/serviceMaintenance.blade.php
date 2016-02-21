@extends('maintenance')

@section('contentMaintenance')

	<form id="Service_Details" >  	
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
									      	<form action="/serviceAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<label>* Service ID </label>
												    <input value="{{$newID}}" name="service_id_add" id="service_id_add" class="form-control" type="text" required>
												    
													<label>* Service Name </label>
												    <input name="service_name_add" id="service_name_add" class="form-control" type="text" required>

										        	<label>* Service Category Name</label>
													<select class="form-control" name="service_cat_add" id="service_cat_add" required>
								                        <option selected disabled value="Pick a category">Pick a category</option>
								                        @foreach($categories as $cat)
						                                @if($cat->status=='1')
						                                <option value="{{ $cat->strProdSerCatId }}">{{ $cat->strProdSerName }}</option>
						                                @endif
						                                @endforeach
								                    </select>
										        	
												    <label>* Car Type </label>
												    <div class="input-field">
												    <select class="form-control" name="ser_cartype_add" id="er_cartype_add" required>
								                        <option selected disabled value="Pick a car type">type of car</option>
						                                @foreach($cartypes as $type)
						                                @if($type->status=='1')
						                                <option value="{{ $type->strCarTypeId }}">{{ $type->strCarTypeName }}</option>
						                                @endif
						                                @endforeach
								                    </select>
								                    </div>

								                    <input value="{{$priceId}}" name="price_id_add" id="price_id_add" type="text" hidden>
								                	<label>* Price </label>
												    <input name="service_price_add" id="service_price_add" class="form-control" type="number" required>
																			
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
  				<h2 style="color:white">SERVICES</H2>
  				
  			
            <div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
  			  			
                        <tr>
                        	<th>Service ID</th>
                          	<th>Service Name</th>
                          	<th>Service Category Name</th>
                          	<th>Car Type</th>
                          	<th>Price</th>
                          	<th>Products</th>
                          	<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      	@foreach($services as $serv)
                      	@if($serv->status == 1)
                      	
                      	<tr>
							<form action="/ProdPerServ" method="post">
								<input value="{{$serv->strServId}}"  id="servId" name="servId" type="text" hidden>
                      		<td>{{$serv->strServId}}</td>
                      		<td>{{$serv->strServName}}</td>
                      		<td>{{$serv->strProdSerName}}</td>
                      		<td>{{$serv->strCarTypeName}}</td>
                      		@foreach($servprice as $price)
                      			@if($price->strSPServ == $serv->strServId)
                      			<input value="{{$var = $price->dblServPrice}}"  id="price" name="price" type="text" hidden>
                      				
                      			@endif
                      		@endforeach
                      		<td>{{$var}}</td>
                      		<td> 
                      			<button type="submit" class="btn btn-info">Inclusive Products</button>
                      		</form>
                      		</td>
                      		<td>
								<button id="btn_edit" type="button"  class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit{{$serv->strServId}}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$serv->strServId}}">Delete</button>
                      		

                      				
				
                      				<!-- Modal Delete -->
									<div id="delete{{$serv->strServId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/serviceDel" method="post">
									        <div class="form-group" style="color:black">
									        	<label>Service ID </label>
											    <input value="{{$serv->strServId}}" id="ser_id_del" name="ser_id_del" class="form-control" type="text" readonly>
											    <label>Service Name </label>
											    <input value="{{$serv->strServName}}" id="ser_name_del" name="ser_name_del" class="form-control" type="text" readonly>
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
									<div id="edit{{$serv->strServId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"> EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/serviceUp" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Service ID </label>
												    <input value="{{$serv->strServId}}" name="service_id_edit" id="service_id_edit" class="form-control" type="text" readonly>
												    
													<label>Service Name </label>
												    <input value="{{$serv->strServName}}" name="service_name_edit" id="service_name_edit" class="form-control" type="text" required>

												    <label> Service Category Name</label>
													<select class="form-control" name="service_cat_edit" id="service_cat_edit" required>
								                        <option selected value="{{$serv->strSServCat}}">{{$serv->strProdSerName}}</option>
								                        @foreach($categories as $category)
						                                @if(($category->status=='1') && ($category->strProdSerCatId != $serv->strSServCat))
						                                <option value="{{ $category->strProdSerCatId }}">{{ $category->strProdSerName }}</option>
						                                @endif
						                                @endforeach
								                    </select>

												    <label>Car Type </label>
												    <div class="input-field">
												    <select class="form-control" name="ser_cartype_edit" id="ser_cartype_edit" required>
								                        <option selected value="{{$serv->strSCarType}}">{{$serv->strCarTypeName}}</option>
						                                @foreach($cartypes as $types)
						                                @if(($types->status=='1') && ($types->strCarTypeId != $serv->strSCarType))
						                                <option value="{{ $types->strCarTypeId }}">{{ $types->strCarTypeName }}</option>
						                                @endif
						                                @endforeach
								                    </select>
								                    </div>


								                    <input value="{{$priceId}}" name="price_id_edit" id="price_id_edit" type="text" hidden>
								                	<label>Price </label>
												    <input name="service_price_edit" id="service_price_edit" class="form-control" type="number" min="0" required>
													

												 	<!-- <label>Price </label>
												    <input value="" name="service_price_edit" id="service_price_edit" class="form-control" type="number" required> -->
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