

@extends('maintenance')

@section('contentMaintenance')
<script> 
	function searchUOM(x){

		var ID = x.value;
				alert(ID);

				document.getElementById('UOMama').value = ID;
function haha(toot){
	 
	 #searchUOM(toot);
	
}

			
	}
</script>

	<form id="ProductService_Details" >  
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
									        <h4 class="modal-title"><center>ADD PRODUCT FOR THE SERVICE</center></h4>
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
  			            <div class="panel-heading">
				  			<h2 style="color:gray">PRODUCTS PER SERVICE</H2>
                        </div>
                        <div class="panel-body">
                            <div class="dataTables_wrapper">
                                <table class="table table-bordered table-hover" id="dataTables-example" style="border:0px">
                                    <thead>
                                        <tr>
				                          	<th>Product Name</th>
				                      		<th>Product Measurement</th>
				                 			<th>Actions</th>    
					                        <th hidden = "true"> problem</th>
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
								<button id="btn_edir" type="button" class="btn btn-danger" data-toggle="modal" href="#edit{{$prodserv->strSPServ}}"><i class="glyphicon glyphicon-pencil"></i></button>
                      			<button id="btn_delete" type="button" class="btn btn-danger" data-toggle="modal" href="#delete{{$prodserv->strSPServ}}"><i class="glyphicon glyphicon-remove"></i></button>
                      				
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
									        <h4 class="modal-title"><center>EDIT PRODUCT FOR SERVICE</center></h4>
									      </div>
									      <div class="modal-body">
									      	<p>
									      	<form action="/ppsUp" method="post">
										        <div class="form-group" style="color:black">

										        	<input value="{{$prodserv->strServProd}}" id="product_id_edit" name="product_id_edit" type="text" hidden>
										        	
										        	<input value="{{$prodserv->strSPServ}}" id="serv_id_edit" name="serv_id_edit" type="text" hidden>
										        	<br>
										        	<label>Product Name</label>
													<div class="input-field">
												    <br>
												      <select class="form-control" name="prod_edit" id="prod_edit"  required>
												        
												        <option selected value="{{$prodserv->strSPProd}}" onclick="haha(prodid)">{{$prodserv->strProdName}}</option>
						                                @foreach($product as $prodEdit)
						                                	@if(($prodEdit->status == '1') && ($prodEdit->strProdId != $prodserv->strSPProd))
						                                		
						                                		<option id="prodid" value="{{ $prodEdit->strProdId }}" onclick="haha(prodid)">{{ $prodEdit->strProdName }}</option>
						                                	
						                                		<!-- <input value="{{ $prodEdit->strPUOM }}" id="serv_id_edit" name="serv_id_edit" type="text" hidden> -->
						                                	@endif
						                                @endforeach
												      </select>
												      <br>
												    </div>
												    

										        	<label>Product Measurement</label>	
										        	<br>
												    <input value="{{$prodserv->dblUseProd}}" name="measure_edit" id="measure_edit" class="form-control" type="number" min="0" style="width:100px" required>
												    <br>
												   	<input style="position:absolute; top:120px; left:120px" id="UOMama" hidden> {{$prodserv->strUOMDesc}}</input>
												   	<br>
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->  			
  		</div>
  		</div>
    </form>

@stop