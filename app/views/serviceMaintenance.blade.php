@extends('maintenance')

@section('contentMaintenance')

	<form id="Service_Details" >  	
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
									        <h4 class="modal-title"><center>ADD SERVICE</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/serviceAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>* Service ID </label> -->
												    <input value="{{$newID}}" name="service_id_add" id="service_id_add"  type="text" hidden>

													<label>* Service Name </label>
												    <input name="service_name_add" id="service_name_add" class="form-control" type="text" required>

										        	<label>* Service Category</label>
													<select class="form-control" name="service_cat_add" id="service_cat_add" required>
								                        <option selected disabled value="Pick a category">Pick a category</option>
								                        @foreach($categories as $cat)
						                                @if($cat->status=='1' && $cat->strCategType == 1)
						                                <option value="{{ $cat->strCategId }}">{{ $cat->strCategName }}</option>
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
													
													<input value="{{$spID}}" name="sp_id_add" id="sp_id_add" type="text" hidden>
													<label>* Product Included in the Service </label>
												    <div class="input-field">
												    <select class="form-control" name="prod_add" id="prod_add" required>
								                        <option selected disabled value="Pick a product">Pick a product</option>
						                                @foreach($product as $prod)
						                                @if($prod->status=='1')
						                                <option value="{{ $prod->strProdId }}">{{ $prod->strProdName }} (per {{$prod->strUOMDesc}})</option>
						                                @endif
						                                @endforeach
								                    </select>
								                    </div>

								                    <label>* Product Measurement </label>
												    <input name="prodM_add" id="prodM_add" class="form-control" type="number" required>				
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


  			            <div class="panel-heading" >
				  			<h1 style="color:gray"><i class="glyphicon glyphicon-user"></i> &nbsp;&nbsp;&nbsp;SERVICE DETAILS</H1>
                        </div>
                        <div class="panel-body">
                            <div>
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead style="background-color:white" >
                                        <tr>
				                        <!-- 	<th>Service ID</th> -->
				                          	<th>Service Name</th>
				                          	<th>Service Category Name</th>
				                          	<th>Car Type</th>
				                          	<th>Price</th>
				                          	<th>Products</th>
				                          	<th>Actions</th>			                          
					                        <th hidden> problem</th>
                                        </tr>
                                    </thead>
                    <tbody>
                      	@foreach($services as $serv)
                      	@if($serv->status == 1)
                      	
                      	<tr>
							<form action="/ProdPerServ" method="post">								
                      		<td hidden><input value="{{$serv->strServId}}"  id="servId" name="servId" type="text" hidden></td>
                      		<td>{{$serv->strServName}}</td>
                      		<td>{{$serv->strCategName}}</td>
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
								<button id="btn_edit" type="button"  class="btn btn-danger" data-toggle="modal" href="#edit{{$serv->strServId}}"><i class="glyphicon glyphicon-pencil"></i></button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$serv->strServId}}"><i class="glyphicon glyphicon-remove"></i></button>
                      		

                      				
				
                      				<!-- Modal Delete -->
									<div id="delete{{$serv->strServId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									    
									      <div class="modal-body" style="background-color:black; color:white">
									      	<p>
									      	<form id="delete" action="/serviceDel" method="post">
									        <div class="form-group" >
									        	<label>Are you sure you want to delete? </label><br>
											    <input value="{{$serv->strServId}}" id="ser_id_del" name="ser_id_del"  type="text" hidden>
											    <label>{{$serv->strServName}} </label>
											    <input value="{{$serv->strServName}}" id="ser_name_del" name="ser_name_del"  type="text" hidden>
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

									<!-- Modal Edit -->
									<div id="edit{{$serv->strServId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"> <Center>EDIT SERVICE</center></h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/serviceUp" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>Service ID </label> -->
												    <input value="{{$serv->strServId}}" name="service_id_edit" id="service_id_edit"  type="text" hidden>
												    
													<label>Service Name </label>
												    <br>
												    <input value="{{$serv->strServName}}" name="service_name_edit" id="service_name_edit" class="form-control" type="text" required>
												    <br>
												    <label> Service Category Name</label>
													<br>
													<select class="form-control" name="service_cat_edit" id="service_cat_edit" required>
								                        <option selected value="{{$serv->strSServCat}}">{{$serv->strCategName}}</option>
								                        @foreach($categories as $category)
							                                @if($category->status=='1' && $category->strCategType=='1' && $category->strCategId != $serv->strSServCat)
							                                	<option value="{{ $category->strCategId }}">{{ $category->strCategName }}</option>
							                                @endif
						                                @endforeach
								                    </select>
								                    <br>
												    <label>Car Type </label>
												    <br>
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
								                	<br>
								                	<label>Price </label>
								                	<br>
												    <input value="{{$var}}" name="service_price_edit" id="service_price_edit" class="form-control" type="number" min="0" required>
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
                      </tbody>                          </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			

  		</div>
    </form>

@stop