@extends('layouts.master')

@section('content')

	<form id="Packages" >
		<div class= "panel panel-default" style="width:400px">
			<div class = "panel-heading">
				Package
			</div>
			<div class= "panel-body">
				<div class="form-group">
			
					<label>Package Name </label>
							
				    <input id="package_name" class="form-control" type="text" required>
				</div>
				<div class="form-group">	 
					<label> Service Category</label>
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
				</div>
					
				<div class="form-group">	 
					<label> Total:</label>
						
				    <input id="total" class="form-control" type="text">
							
					<label> Package Price:</label>
						
				    <input id="package_price" class="form-control" type="number" step="any" min="0" required>
							
				</div>
				<div class="form-group">	 
					<input type="radio" name="package_disc" value="percentage"> Percentage<br>
					<input type="radio" name="package_disc" value="amount"> Amount<br>
				</div>
				<div class="form-group">	 
					<input id="percentage" class="form-control" type="number" step="any" min="0">% &nbsp; &nbsp;
					<input id="amount" class="form-control" type="number" step="any" min="0">
				</div>
                <div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
				<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>
			</div>
		</div>
    </form>

@stop