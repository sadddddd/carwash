<!DOCTYPE html>
<html lang="en">

<!--<style type="text/css">

/* set the background-color to red */ 
 .navbar-inner 
 { 
 background-color: black; 
 /* remove the gradient */ 
 background-image: none; 
 /* set font color to white */ 
 color: white; 
 } 
 /* set hover and focus to black */ 
 .navbar .nav .dropdown-menu > li > a:focus, 
 .navbar .nav .dropdown-menu > li > a:hover { 
 background-color: black ; 
 color: white; 
 } 

 /* menu items */ 

 /* set the background of the menu items to pink and default color to white */ 

 .navbar .nav > li > a { 
 background-color:#cc0000 ; 
 color: white; 

 } 


 /* set hover and focus to black */ 
 .navbar .nav > li > a:focus, 
 .navbar .nav > li > a:hover { 
 background-color: black ; 
 color: white; 
 } 
 /* set active item to darkgreen */ 
 .navbar .nav > .active > a, 
 .navbar .nav > .active > a:hover, 
 .navbar .nav > .active > a:focus { 

 background-color: black ; 
 color: white; 
 } 
</style>-->
	<head>
		<title>CWAD</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

		<!---STYLES START -->
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/jquery.dataTables.min.css')}}
		{{ HTML::style('css/style.css')}}
		{{ HTML::style('css/metisMenu.min.css') }}
		{{ HTML::style('css/sb-admin-2.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		<!--STYLES END -->
	</head>
	<body style = "background-image: url('{{ asset('images/car.jpg') }}');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;">
		<main >
			@yield('content')
		</main>

		<!--SCRIPTS START-->
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/jquery.dataTables.min.js') }}
		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/metisMenu.min.js') }}
		{{ HTML::script('js/sb-admin-2.js') }}
		<!--SCRIPTS END-->
	</body>
</html>