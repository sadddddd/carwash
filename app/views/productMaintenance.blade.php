@extends('maintenance')

@section('contentMaintenance')

	<form id="Product_Details" >  	
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

	<div class="panel" style="border:0px; background-color:white; width:1010px">
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
												    
												    <label>* Product Category</label>
								                    <select class="form-control" name="prod_sercat_add" id="prod_sercat_add" required>
												        <option selected disabled value="Pick a category">Pick a category</option>
						                                @foreach($categories as $cat)
						                                @if($cat->status=='1' && $cat->strCategType == 2)
						                                <option value="{{ $cat->strCategId }}">{{ $cat->strCategName }}</option>
						                                @endif
						                                @endforeach
											      	</select>

													<label>* Product Name </label>
												    <input name="prod_name_add" id="prod_name_add" class="form-control" type="text" required>

												    <label>Product Description </label>
												    <input name="prod_desc_add" id="prod_desc_add" class="form-control" type="text">
													
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
											      	<table>
									                 <tr><td colspan="9">   <select class="form-control" name="prod_uom_add" id="prod_uom_add" style="width:530px; margin-right:10px"required>
													        <option selected disabled value="unit of measurement">unit of measurement</option>
							                                @foreach($uom as $uom)
							                                @if($uom->status=='1')
							                                <option value="{{ $uom->strUOMId }}">{{ $uom->strUOMDesc }}</option>
							                                @endif
							                                @endforeach
												      	</select>
															</td>

															<td>
			                                                <!--<button class="btn btn-danger btn-circle btn-sm" type="button" id="addUom" name="addUom" data-toggle="modal" href="#addUom"><i class="glyphicon glyphicon-plus"></i>-->
											                                                <!-- Modal Delete -->
																	<div id="addUom" class="modal fade" role="dialog">
																	  <div class="modal-dialog">

																	    <!-- Modal content-->
																	    <div class="modal-content">
																	      
																	      <div class="modal-body" style="background-color:black; color:white">
																	      	<p>hasdahhahhdahdhagdha</p>
																	      	
																	    </div>
																	  </div>
																	</div><!-- Modal Delete -->

			                                                </button>
			                                         </td>

			                                          </tr>
			                                          </table>
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

  			            <div class="panel-heading">
				  			<h2 style="color:gray">PRODUCTS</H2>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead>
                                        <tr>
					                          	<!-- <th>Product ID</th> -->
					                          	<th>Product Name</th>
					                          	<th>Product Description</th>
					                          	<th>Category Name</th>
					                          	<th>Supplier</th>
					                        	<th>Reorder Level</th>
												<th>Actions</th>
					                            <th hidden> Stock</th>
                                        </tr>
                                    </thead>
                      <tbody>
                      	@foreach($products as $prod)
                      		@if($prod->status == '1')
                      	<tr>
                      		<td hidden>{{$prod->strProdId}}</td>
                      		<td>{{$prod->strProdName}}</td>
                      		<td>{{$prod->strProdDesc}}</td>
                      		<td>{{$prod->strCategName}}</td>
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
												    
												    <label>Product Category</label>
												    <br>
								                    <select class="form-control" name="prod_sercat_edit" id="prod_sercat_edit" required>
												        <option selected value="{{$prod->strPCategory}}">{{$prod->strCategName}}</option>
						                                @foreach($categories as $cat)
						                                @if(($cat->status=='1') && ($cat->strCategId != $prod->strPCategory) && ($cat->strCategType == 2))
						                                <option value="{{ $cat->strCategId }}">{{ $cat->strCategName }}</option>
						                                @endif
						                                @endforeach
											      	</select>
											      	<br>

													<label>Product Name </label>
													<br>
												    <input value="{{$prod->strProdName}}" name="prod_name_edit" id="prod_ser_cat_id_name_edit" class="form-control" type="text" required>
												    <br>
												    <label>Product Description </label>
												    <br>
												    <input value="{{$prod->strProdDesc}}" name="prod_desc_edit" id="prod_ser_cat_desc_edit" class="form-control" type="text">
													<br>
												    <label>Supplier Name</label>
												    <br>
								                    <select class="form-control" name="prod_supp_edit" id="prod_supp_edit" required>
												        <option selected value="{{$prod->strPSupp}}">{{$prod->strSuppName}}</option>
						                                @foreach($suppliers as $supp)
						                                @if(($supp->status=='1') && ($supp->strSuppId != $prod->strPSupp))
						                                <option value="{{ $supp->strSuppId }}">{{ $supp->strSuppName }}</option>
						                                @endif
						                                @endforeach
											      	</select>
											      	<br>
											      	<label>Unit of Measurement</label>
								                    <br>
								                    <select class="form-control" name="prod_uom_edit2" id="prod_uom_edit2" required>
												        <option selected value="{{$prod->strPUOM}}">{{$prod->strUOMDesc}}</option>
						                                @foreach($uom2 as $ewan)
						                                @if(($ewan->status=='1') && ($ewan->strUOMId != $prod->strPUOM))
						                                <option value="{{ $ewan->strUOMId }}">{{ $ewan->strUOMDesc }}</option>
						                                @endif
						                                @endforeach
											      	</select>
											      	<br>
											      	<input value="{{$prod->strPUOM}}" name="prod_uom_edit" id="prod_uom_edit" type="text" hidden>
													<br>

												 	<label >Reorder Level </label>
												    <br>
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
  		</div>

    </form>

@stop