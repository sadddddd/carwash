@extends('layouts.master')

@section('content')

	<form id="Car_Type" >
		<div class= "panel panel-default" style="width:400px">
			<div class = "panel-heading">
				Car Type
			</div>
			<div class= "panel-body">
				<div class="form-group">
					<label>Car Type Name </label>
							
				    <input id="car_type_name" class="form-control" type="text" required>
				</div>
				<div class="form-group">
					<label>Description</label>
				
					<input id="car_type_desc" class="form-control" type="text" placeholder="" required>
				</div>
					
					
					
                <div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
				<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>
				    	
	        </div>
		</div>
    </form>

@stop