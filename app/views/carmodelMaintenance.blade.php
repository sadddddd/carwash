@extends('layouts.master')

@section('content')

	<form id="Customer_Details" >
		<div class= "panel panel-default" style="width:400px">
			<div class = "panel-heading">
				Car Model
			</div>
			<div class= "panel-body">
				<div class="form-group">
					<div class="form-group">	 
						<label> Car Type Name</label>
						<select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
					</div>
					<div class="form-group">	 
						<label> Car Brand Name</label>
						<select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
					</div>
					<label>Car Model Name </label>
							
		  			<input id="car_model_name" class="form-control" type="text" required>
				</div>
				
				<div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
				<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>
				    	
			</div>
		</div>
   </form>

@stop