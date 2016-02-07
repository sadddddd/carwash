@extends('layouts.master')

@section('content')

	<form id="Customer_Details" >
		<div class= "panel panel-default" style="width:400px">
			<div class = "panel-heading">
				Customer Details
			</div>
			<div class= "panel-body">
				<div class="form-group">
				
				    <label>Name </label>
							
				    <input id="cus_Fname" class="form-control" type="text" placeholder="First name" required>
							
					<input id="cus_Mname" class="form-control" type="text" placeholder="Middle name" required>
							
					<input id="cus_Lname" class="form-control" type="text" placeholder="Last name" required>
				</div>	
				<div class="form-group">
					<label>Address </label>
				
					<input id="cus_St" class="form-control" type="text" placeholder="Street" required>
				    		
					<input id="cus_City" class="form-control" type="text" placeholder="City" required>
				    		
					<input id="cus_State" class="form-control" type="text" placeholder="State" required>
				</div>
				<div class="form-group">
					<label>Contact Details </label>
							
					<input id="cus_tel" class="form-control" type="text" placeholder="Telephone ">
                            				
					<input id="cus_cell" class="form-control" type="text" placeholder="Cellphone">
                            
					<input id="cus_email_add" class="form-control" type="text" placeholder="Email Address" >
                             				
					<input id="cus_license" class="form-control" type="text" placeholder="License number" required>
                             
					<input id="cus_plate" class="form-control" type="text" placeholder="Plate number" required>
				</div> 
				<div class="form-group">	 
					<label> Car Brand </label>
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="form-group">
					<label> Car Model </label>
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="col-lg-6">      <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
              
				<div class="col-lg-6">		<button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></div>
			</div>
                 
		</div>
	</form>
@stop