@extends('maintenance')

@section('contentMaintenance')

	<form id="pro_ser_cat" >
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
									        	<label>Product and Service Category ID </label>
											    <input value="" id="prod_ser_cat_id_del" name="prod_ser_cat_id_del" class="form-control" type="text" readonly>
											    <label>Product and Service Category Name </label>
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
									      	<form action="/categoryAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<label>* Product and Service ID </label>
												    <input value="{{$newID}}" name="prod_ser_cat_id_add" id="prod_ser_cat_id_add" class="form-control" type="text" required>
												    
													<label>* Product and Service Name </label>
												    <input name="prod_ser_cat_name_add" id="prod_ser_cat_name_add" class="form-control" type="text" required>

												    <label>Product and Service Description </label>
												    <input name="prod_ser_cat_desc_add" id="prod_ser_cat_desc_add" class="form-control" type="text">
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

  				<h2 style="color:white">PRODUCT AND SERVICE CATEGORY</H2>
  			</div>
  			
  			<div class="table-bordered table-responsive" style="border:0px;">

  			  	<table id="table" class="table" style="border:1px">

  			  		<thead>
                        <tr>
                          <th>Category ID</th>
                          <th>Category Name</th>
                          <th>Category Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($categories as $cat)
                      		@if($cat->status == '1')
                      	<tr>
                      		<td>{{$cat->strProdSerCatId}}</td>
                      		<td>{{$cat->strProdSerName}}</td>
                      		<td>{{$cat->strProdSerDesc}}</td>
                      		<td>
								<button id="btn_edit" type="button"  class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit{{$cat->strProdSerCatId}}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$cat->strProdSerCatId}}">Delete</button>
                      		

                      				
				
                      				<!-- Modal Delete -->
									<div id="delete{{$cat->strProdSerCatId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">DELETE</h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/categoryDel" method="post">
									        <div class="form-group" style="color:black">
									        	<label>Product Service Category ID </label>
											    <input value="{{$cat->strProdSerCatId}}" id="prod_ser_cat_id_del" name="prod_ser_cat_id_del" class="form-control" type="text" readonly>
											    <label>Product/Service Category Name </label>
											    <input value="{{$cat->strProdSerName}}" id="prod_ser_cat_name_del" name="prod_ser_cat_name_del" class="form-control" type="text" readonly>
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
									<div id="edit{{$cat->strProdSerCatId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
									  	
									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header"  style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"> EDIT</h4>
									      </div>
									      <div class="modal-body">
									      	<form id="update" action="/categoryUp" method="post">
										        <div class="form-group" style="color:black">
										        	<label>Product and Service ID </label>
												    <input value="{{$cat->strProdSerCatId}}" name="prod_ser_cat_id_edit" id="prod_ser_cat_id_edit" class="form-control" type="text" readonly>
												    
													<label>Product and Service Name </label>
												    <input value="{{$cat->strProdSerName}}" name="prod_ser_cat_name_edit" id="prod_ser_cat_name_edit" class="form-control" type="text" required>

												    <label>Product and Service Description </label>
												    <input value="{{$cat->strProdSerDesc}}" name="prod_ser_cat_desc_edit" id="prod_ser_cat_desc_edit" class="form-control" type="text" required>
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