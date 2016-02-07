@extends('layouts.master')

@section('content')

	<form id="Supplier_Details" >
		              <div class= "panel panel-default" style="width:400px">
					  <div class = "panel-heading">
					  Supplier Details
					  </div>
					  <div class= "panel-body">
					  <div class="form-group">
							<label>Supplier Name </label>
							
				    		<input id="sup_name" class="form-control" type="text" required>
					</div>
					 <div class="form-group">
						<label>Address </label>
				
							<input id="sup_St" class="form-control" type="text" placeholder="Street" required>
				    
							<input id="sup_City" class="form-control" type="text" placeholder="City" required>
				    
							<input id="sup_State" class="form-control" type="text" placeholder="State" required>
				 	
					</div>
					 <div class="form-group">
							<label>Contact Details </label>
						
							<input id="sup_tel" class="form-control" type="text" placeholder="Telephone ">
                      
							
							<input id="sup_email_add" class="form-control" type="text" placeholder="Email Address" >
                          
					</div>
					<div class="form-group">
							<label>Contact Person </label>
							<input id="sup_cperson" class="form-control" type="text" placeholder="Full Name" required>
					</div>
					<div class="form-group">
							
					</div>
					
                             <div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
							<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>
				    	
				        </div>
						</div>
                 
				</div>
   </form>

@stop