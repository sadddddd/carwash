@extends('layouts.master')

@section('content')

<form id="Customer_Details" >
		              <div class= "panel panel-default" width="300px">
					  <div class = "panel-heading">
					  Promo
					  </div>
					  <div class= "panel-body">
					  <div class="form-group">	 
							 <label> Promo Name</label>
						
				    		<input id="promo_name" class="form-control" type="text" required>
							
						     </div>
					<div class="form-group">	 
							 
							<label>Validity Period</label>
							
				    		<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" placeholder="Starting Date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div><div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" placeholder="End Date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
					</div>
			
					
					
                             <div class="col-lg-6"> <button type="add" class="btn btn-primary btn-lg btn-block">Add</button></div>
							<div class="col-lg-6"><button type="edit" class="btn btn-primary btn-lg btn-block">Edit</button></td></div>
				    	
				        </div>
						</div>
                 
				</div>
   </form>

@stop