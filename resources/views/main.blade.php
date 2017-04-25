<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	{!! Html::style('assets/css/bootstrap.min.css') !!}
	{!! Html::style('assets/css/colors.css') !!}
	{!! Html::style('assets/css/styles.css') !!}

	<title>inicio</title>
</head>
<body class="back">
	@include('includes/headzup')
	   <div class="cont">
	   	@include('includes/navbar')
	   </div>
		@include('includes/carrusel')
	
	@yield('content')


	<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
