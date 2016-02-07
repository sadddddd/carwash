@extends('layouts.master')

@section('content')

	<form id="pro_ser_cat" >
		<div class= "panel panel-default" style="width:400px">
			<div class = "panel-heading">
				Products and Services Category
			</div>
			<div class= "panel-body">
				<div class="form-group">
			
					<label>Product/Service Category Name </label>
							
					<input id="service_category_name" class="form-control" type="text" required>
				</div>
				<div class="form-group">
					<label>Description </label>
							
					<input id="service_category_name" class="form-control" type="text" required>
				</div>	
            	<div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
				<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>				    	
			</div>
		</div>
    </form>

@stop