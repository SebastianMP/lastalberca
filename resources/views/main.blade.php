<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/colors.css') !!}
	<title>inicio</title>
</head>
<body class="back">
	@yield('head')
	@yield('content');


	
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/jquery.min.js') !!}
</body>
</html>
