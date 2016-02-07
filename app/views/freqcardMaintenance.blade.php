@extends('layouts.master')

@section('content')

	<form id="Customer_Details" >
		              <div class= "panel panel-default" style="width:400px">
					  <div class = "panel-heading">
					 Frequency Card
					  </div>
					  <div class= "panel-body">
					  <div class="form-group">
			
					<label>Type of Card </label>
							
				    <input id="type_of_card" class="form-control" type="text" required>
					<label>Frequency </label>
							
				    <input id="frequency" class="form-control" type="text" required>
					</div>
					
							 
							 <input type="radio" name="frequency" value="percentage"> Packages<br>
							 <input type="radio" name="frequency"  value="amount"> Service<br>
							 <input type="radio" name="frequency"  value="amount"> Discount<br>
							  <input id="" class="form-control" type="text" required>
					
                             <div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
							<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>
				    	</div>
				     
						</div>
                 
				
   </form>
@stop