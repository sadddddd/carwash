@extends('maintenance')

@section('contentMaintenance')
  				<br>
  				<br>
  				<br>
  				<br>
	<form id="pro_ser_cat" >

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

		<div class="panel" style="border:0px; width:1010px; margin-top:-75px; background-color:white">
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
									        	<label>Product and Service Category ID </label>
											    <input value="" id="categ_id_del" name="cat_id_del" class="form-control" type="text" readonly>
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
									        <h4 class="modal-title"><center>ADD CATEGORY</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/categoryAdd" method="post">
										        <div class="form-group" style="color:black">
										        	<!-- <label>* Category ID </label> -->
												    <input value="{{$newID}}" name="categ_id_add" id="categ_id_add" type="text" hidden>
												    
												    <label>* Category Classification</label>
												    <select id="categ_type_add" name="categ_type_add"class="form-control">
												    	<option value ="1"> Service </option>
												    	<option value ="2"> Product </option>

												    </select>	
													<label>* Category Name </label>
												    <input name="categ_name_add" id="categ_name_add" class="form-control" type="text" required>

												    <label>Product and Service Description </label>
												    <input name="categ_desc_add" id="categ_desc_add" class="form-control" type="text">
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
				  			<h2 style="color:gray">SERVICE CATEGORY</H2>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="color:black; border:0px">
                                    <thead>
                                        <tr>
					                         <!--  <th>Category ID</th> -->
					                          <th>Category Name</th>
					                          <th>Category Description</th>
					                          <th>Actions</th>
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody>
                      	@foreach($categories as $cat)
                      		@if(($cat->status == '1') && ($cat->strCategType == '1'))
                      	<tr>
                      		<td hidden>{{$cat->strCategId}}</td>
                      		<td>{{$cat->strCategName}}</td>
                      		<td>{{$cat->strCategDesc}}</td>
                      		<td>
								<button id="btn_edit" type="button"  class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit{{$cat->strCategId}}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$cat->strCategId}}">Delete</button>                     		
                      			
                      				<!-- Modal Delete -->
									<div id="delete{{$cat->strCategId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><center> DELETE</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/categoryDel" method="post">
									        <div class="form-group" style="color:black">
									        	<!-- <label> Category ID </label> -->
											    <input value="{{$cat->strCategId}}" id="categ_id_del" name="categ_id_del" type="text" hidden>

											    <label>Category Name </label>
											    <input value="{{$cat->strCategName}}" id="categ_name_del" name="categ_name_del" class="form-control" type="text" readonly>
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
									<div id="edit{{$cat->strCategId}}" class="modal fade" role="dialog">
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
										        	<!-- <label>Category ID </label> -->
												    <input value="{{$cat->strCategId}}" name="categ_id_edit" id="categ_id_edit" type="text" hidden>
												    <input value="{{$cat->strCategType}}" name="categ_type_edit" id="categ_type_edit" type="text" hidden>

												    <label>* Category Name </label>
												    <input value="{{$cat->strCategName}}" name="categ_name_edit" id="categ_name_edit" class="form-control" type="text" required>

												    <label>Category Description </label>
												    <input value="{{$cat->strCategDesc}}" name="categ_desc_edit" id="categ_desc_edit" class="form-control" type="text">
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			

		<div class="panel-heading">
			<h2 style="color:gray">PRODUCT CATEGORY</H2></div>

                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables2-example" style="color:black; border:0px">
                                    <thead>
                                        <tr>
					                         <!--  <th>Category ID</th> -->
					                          <th>Category Name</th>
					                          <th>Category Description</th>
					                          <th>Actions</th>		                          
					                          <th hidden = "true"> problem</th>
                                        </tr>
                                    </thead>
                      <tbody>
                      	@foreach($categories as $cat)
                      		@if(($cat->status == '1')&&($cat->strCategType == '2'))
                      	<tr>
                      		<td hidden>{{$cat->strCategId}}</td>
                      		<td>{{$cat->strCategName}}</td>
                      		<td>{{$cat->strCategDesc}}</td>
                      		<td>
								<button id="btn_edit" type="button"  class="btn btn-default" style="background-color:black; border:black; color:white" data-toggle="modal" href="#edit{{$cat->strCategId}}">Edit</button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$cat->strCategId}}">Delete</button>
                      		
                      			<!-- Modal Delete -->
									<div id="delete{{$cat->strCategId}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header" style="background-color:black; color:white;">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title"><center> DELETE</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form id="delete" action="/categoryDel" method="post">
									        <div class="form-group" style="color:black">
									        	<!-- <label> Category ID </label> -->
											    <input value="{{$cat->strCategId}}" id="categ_id_del" name="categ_id_del" type="text" hidden>

											    <label>Category Name </label>
											    <input value="{{$cat->strCategName}}" id="categ_name_del" name="categ_name_del" class="form-control" type="text" readonly>
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
									<div id="edit{{$cat->strCategId}}" class="modal fade" role="dialog">
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
										        	<!-- <label>Category ID </label> -->
												    <input value="{{$cat->strCategId}}" name="categ_id_edit" id="categ_id_edit" type="text" hidden>
												    <input value="{{$cat->strCategType}}" name="categ_type_edit" id="categ_type_edit" type="text" hidden>

												    <label>* Category Name </label>
												    <input value="{{$cat->strCategName}}" name="categ_name_edit" id="categ_name_edit" class="form-control" type="text" required>

												    <label>Category Description </label>
												    <input value="{{$cat->strCategDesc}}" name="categ_desc_edit" id="categ_desc_edit" class="form-control" type="text">
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
  		</div>

           		
  				
    </form>

@stop