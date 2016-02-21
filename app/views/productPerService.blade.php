@extends('maintenance')

@section('contentMaintenance')

	<form id="ProductService_Details" >  	
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
									        	<label>Product ID </label>
											    <input value="" id="prod_ser_cat_id_del" name="prod_ser_cat_id_del" class="form-control" type="text" readonly>
											    <label>Product Name </label>
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
									      	<form action="/ppsAdd" method="post">
										        <div class="form-group" style="color:black">

										        	<input value="{{$newID}}" id="product_id_edit" name="product_id_edit" type="text" hidden>
										        	<input value="{{$servid}}" id="serv_id_edit" name="serv_id_edit" type="text" hidden>
										        	<label>Product Name</label>
													<div class="input-field">
												      <select class="form-control" name="prod_edit" id="prod_edit" required>
												        <option selected disabled value="Pick a product">Pick a product</option>
						                                @foreach($product as $prod)
						                                	@if(($prod->status == '1'))
						                                		<option value="{{ $prod->strProdId }}">{{ $prod->strProdName }}</option>
						                                	@endif
						                                @endforeach
												      </select>
												    </div>

										        	<label>Product Measurement</label>
												    <input name="measure_add" id="measure_add" class="form-control" type="number" min="0" required>
												   
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

  				<h2 style="color:white">PRODUCTS PER SERVICE</H2>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
                        <tr>
                          	<th>Product Name</th>
                      		<th>Product Measurement</th>
                 			<th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($pps as $prodserv)
                      	@if(($prodserv->status == 1) && ($prodserv->strSPServ == $servid))
                      	<tr>

                      		<td hidden>{{$prodserv->strServProd}}</td>
                      		<td hidden>{{$prodserv->strSPServ}}</td>
                      		<td>{{$prodserv->strProdName}}</td>
                      		<td>{{$prodserv->dblUseProd}} {{$prodserv->strUOMDesc}}</td>
                      		<td>
								<button id="btn_edir" type="button" class="btn btn-info" data-toggle="modal" href="#edit{{$prodserv->strSPServ}}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$prodserv->strSPServ}}">Delete</button>
                      				
                      				<!-- Modal Delete -->
									<div id="delete{{$prodserv->strSPServ}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/ppsDel" method="post">
									        <div class="form-group" style="color:black">

									        	<input value="{{$prodserv->strServProd}}" id="product_id_del" name="product_id_del" type="text" hidden>
									        	<label>Product Name </label>
											    <input value="{{$prodserv->strProdName}}" id="product_name_del" name="product_name_del" class="form-control" type="text" readonly>
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
									<div id="edit{{$prodserv->strSPServ}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

										<!-- Modal content -->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/ppsUp" method="post">
										        <div class="form-group" style="color:black">

										        	<input value="{{$prodserv->strServProd}}" id="product_id_edit" name="product_id_edit" type="text" hidden>
										        	<input value="{{$prodserv->strSPServ}}" id="serv_id_edit" name="serv_id_edit" type="text" hidden>
										        	<label>Product Name</label>
													<div class="input-field">
												      <select class="form-control" name="prod_edit" id="prod_edit" required>
												        <option selected value="{{$prodserv->strSPProd}}">{{$prodserv->strProdName}}</option>
						                                @foreach($product as $prodEdit)
						                                	@if(($prod->status == '1') && ($prodEdit->strProdId != $prodserv->strSPProd))
						                                		<option value="{{ $prodEdit->strProdId }}">{{ $prodEdit->strProdName }}</option>
						                                	@endif
						                                @endforeach
												      </select>
												    </div>

										        	<label>Product Measurement</label>
												    <input value="{{$prodserv->dblUseProd}}" name="measure_edit" id="measure_edit" class="form-control" type="number" min="0" required>
												   
											</div>
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="submit" class="btn btn-info">Save</button>
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