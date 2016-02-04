<!DOCTYPE html>
<html>
	<head>

		<title>CWAD</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!---STYLES START -->
		{{ HTML::style('css/bootstrap-theme.min.css') }}
		{{ HTML::style('css/jquery.dataTables.min.css')}}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/') }}
		<!--STYLES END -->
	</head>
	<body style = "background-image:url(car.jpg);background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
		<header>
			KAHIT ANO
		</header>
		<main>
			@yield('content')
		</main>

		<!--SCRIPTS START-->
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/jquery.dataTables.min.js') }}
		{{ HTML::script('js/jquery.js') }}
		<!--SCRIPTS END-->
	</body>
</html>