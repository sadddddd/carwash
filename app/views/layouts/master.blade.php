<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Carwash</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

		<!---STYLES START -->
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/dataTables.bootstrap.min.css')}}
		{{ HTML::style('css/style.css')}}
		{{ HTML::style('css/metisMenu.min.css') }}
		{{ HTML::style('css/sb-admin-2.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('DataTables-1.10.11/media/css/jquery.dataTables.min.css') }}
		{{ HTML::style('DataTables-1.10.11/media/css/dataTables.bootstrap.min.css') }}
 <style>

 #content_title{
	font-family: Trajan Pro;
	font-size: 50px;
	color:#87CEEB;
	}
	.drop_shadow{
	-webkit-box-shadow: 0 0 15px 12px rgba(0, 0, 0, .5);
        box-shadow: 0 0 4px 4px white
	}
	.drop_navbar{
	-webkit-box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
        box-shadow: 0 0 7px 5px #000000;
	}
	
 </style>
		<!--STYLES END -->
<<<<<<< HEAD
<nav role="navigation" class="navbar navbar-inner navbar-fixed-top" style="background-image:url({{ URL::asset('images/bg.jpg'); }}); " >
=======

		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/jquery.dataTables.min.js') }}
		{{ HTML::script('js/dataTables.bootstrap.min.js') }}
		
<nav role="navigation" class="navbar navbar-inner navbar-fixed-top">
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
  
  	
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand"><font size=10px>Carwash Management System</font></div>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse" style="margin-right:40px">
         
			<ul class="nav navbar-nav navbar-right">
             
                <li class="active"><a href="/Maintenance">Maintenance</a></li>
                <li><a href="#">Scheduling</a></li>
				<li><a href="#">Transaction</a></li>
				<li><a href="#">Reports</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Account
                    </a>
                    <ul class="dropdown-menu dropdown-user" style="background-color:#cc0000; ">
                        <li><a href="#"><font color=white> User Profile</a></font>
                        </li>
                        <li><a href="#"><font color=white>Settings</a></font>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/Login"><font color=white>Logout</a></font>
                        </li>
						
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
      
		</div>
  			@yield('sidebar')
  	
</nav> -->
	</head>


	<body style = "
	background-size:cover;


	background-color:#262626;
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
	overflow-x: hidden;
	overflow-y: scroll;">
		<main >
			@yield('content')
		</main>

		<!--SCRIPTS START-->
		
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/metisMenu.min.js') }}
		{{ HTML::script('js/Validation.min.js') }}
		{{ HTML::script('js/sb-admin-2.js') }}
		{{ HTML::script('js/app.js') }}
		{{ HTML::script('DataTables-1.10.11/media/js/jquery.dataTables.js') }}
		{{ HTML::script('DataTables-1.10.11/media/js/dataTables.bootstrap.js') }}
		
		<script type="text/javascript"> 
			$(document).ready(function(){
			    $('#dataTables-example').DataTable({
			   		"lengthMenu":[10],
			   		"Paginate":false,
			   		"filter":true,
			   		"lengthChange":false,
			   		"AutoWidth":false,
			    	"ordering":false,
			    	"info":false

			    });   
			});

		</script>

		<script type="text/javascript"> 
			$(document).ready(function(){
			    $('#dataTables2-example').DataTable({
			   		"lengthMenu":[10],
			   		"Paginate":false,
			   		"filter":true,
			   		"lengthChange":false,
			   		"AutoWidth":false,
			    	"ordering":false,
			    	"info":false

			    });   
			});

		</script>
		<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

		    <script>
    	$(document).ready(function() {
        	$('#dataTables-example').DataTable({
                responsive: true
			} );
    	});
			</script>
		    <script>
    	$(document).ready(function() {
        	$('#dataTables2-example').DataTable({
                responsive: true
			} );
    	});
			</script>
		    <script>
    	$(document).ready(function() {
        	$('#dataTables3-example').DataTable({
                responsive: true
			} );
    	});
			</script>
		    <script>
    	$(document).ready(function() {
        	$('#dataTables4-example').DataTable({
                responsive: true
			} );
    	});
			</script>

		<!--SCRIPTS END-->
		
	</body>
</html>