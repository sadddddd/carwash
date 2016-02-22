@extends('maintenance')

@section('contentMaintenance')

	<form id="Product_Details" >  	
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
									        <h4 class="modal-title"><center>ADD PRODUCT</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/productAdd" method="post">
										        <div class="form-group" style="color:black">

										        <!-- 	<label>* Product ID </label> -->
												    <input value="{{$newID}}" name="prod_id_add" id="prod_id_add"  type="text" hidden>
												    
													<label>* Product Name </label>
												    <input name="prod_name_add" id="prod_name_add" class="form-control" type="text" required>

												    <label>Product Description </label>
												    <input name="prod_desc_add" id="prod_desc_add" class="form-control" type="text">
													
												    <label>* Service Category Name</label>
								                    <select class="form-control" name="prod_sercat_add" id="prod_sercat_add" required>
												        <option selected disabled value="Pick a category">Pick a category</option>
						                                @foreach($categories as $cat)
						                                @if($cat->status=='1')
						                                <option value="{{ $cat->strProdSerCatId }}">{{ $cat->strProdSerName }}</option>
						                                @endif
						                                @endforeach
											      	</select>

											      	<label>* Supplier Name</label>
								                    <select class="form-control" name="prod_supp_add" id="prod_supp_add" required>
												        <option selected disabled value="Pick a supplier">Pick a supplier</option>
						                                @foreach($suppliers as $supp)
						                                @if($supp->status=='1')
						                                <option value="{{ $supp->strSuppId }}">{{ $supp->strSuppName }}</option>
						                                @endif
						                                @endforeach
											      	</select>

											      	<label>* Unit of Measurement</label>
								                    <select class="form-control" name="prod_uom_add" id="prod_uom_add" required>
												        <option selected disabled value="unit of measurement">unit of measurement</option>
						                                @foreach($uom as $uom)
						                                @if($uom->status=='1')
						                                <option value="{{ $uom->strUOMId }}">{{ $uom->strUOMDesc }}</option>
						                                @endif
						                                @endforeach
											      	</select>

													<label>* Reorder Level </label>
												    <input name="prod_reorderLevel_add" id="prod_reorderLevel_add" class="form-control" type="number" min="0" required>
																					
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

  				<h2 style="color:white">PRODUCTS</H2>	
			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px; color:white;">

  			  		<thead>
                        <tr>
                          	<!-- <th>Product ID</th> -->
                          	<th>Product Name</th>
                          	<th>Product Description</th>
                          	<th>Category Name</th>
                          	<th>Supplier</th>
                        	<th>Reorder Level</th>
							<th>Actions</th>
							<th hidden>Stock</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($products as $prod)
                      		@if($prod->status == '1')
                      	<tr>
                      		<td hidden>{{$prod->strProdId}}</td>
                      		<td>{{$prod->strProdName}}</td>
                      		<td>{{$prod->strProdDesc}}</td>
                      		<td>{{$prod->strProdSerName}}</td>
                      		<td>{{$prod->strSuppName}}</td>
                      		<td>{{$prod->intProdReOLvl}}</td>
                      		<td>
								<button id="btn_edit" type="button"  class="btn btn-danger" data-toggle="modal" href="#edit{{$prod->strProdId}}"><i class="glyphicon glyphicon-pencil"></i></button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$prod->strProdId}}"><i class="glyphicon glyphicon-remove"></i></button>
                      		

                      				<!-- Modal Edit -->
									<div id="edit{{$prod->strProdId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"> <center>EDIT PRODUCT</center></h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/productUp" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>Product ID </label> -->
												    <input value="{{$prod->strProdId}}" name="prod_id_edit" id="prod_ser_cat_id_edit"  type="text" hidden>
												    
													<label>Product Name </label>
												    <input value="{{$prod->strProdName}}" name="prod_name_edit" id="prod_ser_cat_id_name_edit" class="form-control" type="text" required>

												    <label>Product Description </label>
												    <input value="{{$prod->strProdDesc}}" name="prod_desc_edit" id="prod_ser_cat_desc_edit" class="form-control" type="text">
												
												    <label>Service Category Name</label>
								                    <select class="form-control" name="prod_sercat_edit" id="prod_sercat_edit" required>
												        <option selected value="{{$prod->strPCategory}}">{{$prod->strProdSerName}}</option>
						                                @foreach($categories as $cat)
						                                @if(($cat->status=='1') && ($cat->strProdSerCatId != $prod->strPCategory))
						                                <option value="{{ $cat->strProdSerCatId }}">{{ $cat->strProdSerName }}</option>
						                                @endif
						                                @endforeach
											      	</select>

											      	<label>Supplier Name</label>
								                    <select class="form-control" name="prod_supp_edit" id="prod_supp_edit" required>
												        <option selected value="{{$prod->strPSupp}}">{{$prod->strSuppName}}</option>
						                                @foreach($suppliers as $supp)
						                                @if(($supp->status=='1') && ($supp->strSuppId != $prod->strPSupp))
						                                <option value="{{ $supp->strSuppId }}">{{ $supp->strSuppName }}</option>
						                                @endif
						                                @endforeach
											      	</select>

											      	<label>Unit of Measurement</label>
								                    <select class="form-control" name="prod_uom_edit2" id="prod_uom_edit2" required>
												        <option selected value="{{$prod->strPUOM}}">{{$prod->strUOMDesc}}</option>
						                                @foreach($uom2 as $ewan)
						                                @if(($ewan->status=='1') && ($ewan->strUOMId != $prod->strPUOM))
						                                <option value="{{ $ewan->strUOMId }}">{{ $ewan->strUOMDesc }}</option>
						                                @endif
						                                @endforeach
											      	</select>

											      	<input value="{{$prod->strPUOM}}" name="prod_uom_edit" id="prod_uom_edit" type="text" hidden>
												

												 	<label >Reorder Level </label>
												    <input value="{{$prod->intProdReOLvl}}" name="prod_reorderLevel_edit" id="prod_reorderLevel_edit" class="form-control" type="text" required>
												

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
				
                      				<!-- Modal Delete -->
									<div id="delete{{$prod->strProdId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      
									      <div class="modal-body" style="background-color:black; color:white">
									      	<p>
									      	<form id="delete" action="/productDel" method="post">
									        <div class="form-group" >
									        	<label>Are you sure you want to delete?</label><Br>
											    <input value="{{$prod->strProdId}}" id="prod_id_del" name="prod_id_del" type="text" hidden>
											    <label>{{$prod->strProdName}}</label>
											    <input value="{{$prod->strProdName}}" id="prod_name_del" name="prod_name_del"  type="text" hidden >
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