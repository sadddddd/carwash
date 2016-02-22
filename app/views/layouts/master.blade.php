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
		<!--STYLES END -->

		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/jquery.dataTables.min.js') }}
		{{ HTML::script('js/dataTables.bootstrap.min.js') }}
		
<nav role="navigation" class="navbar navbar-inner navbar-fixed-top">
  
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">TBK Carwash</div>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/Home">Home</a></li>
                <li class="active"><a href="/Maintenance">Maintenance</a></li>
                <li><a href="#">Scheduling</a></li>
				<li><a href="#">Transaction</a></li>
				<li><a href="#">Reports</a></li>
            </ul>
			<ul class="nav navbar-top-links navbar-right">
              
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

</nav> -->
	</head>

	<body style = "
	background-color:#000000;
	background-repeat:no-repeat;
	background-attachment:fixed;

	overflow-x: hidden;
	overflow-y: scroll;">
		<main >
			@yield('content')
		</main>

		<!--SCRIPTS START-->
		
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/metisMenu.min.js') }}
		{{ HTML::script('js/sb-admin-2.js') }}
		{{ HTML::script('js/app.js') }}
		<!--SCRIPTS END-->
		
	</body>
</html>