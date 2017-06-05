<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Alberca IPN</title>
	{!!Html::style('assets/css/bootstrap.css')!!}
	{!!Html::style('assets/css/estilos.css')!!}
	{!!Html::style('assets/css/w3.css')!!}
	{!!Html::style('assets/css/pool.css')!!}
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="assets/js/vue.js"></script>
	<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src ="assets/js/anime.js"></script>	
</head>
<body>
	<header>
		<div class="container">
			<div class="col-xs-12 hidden-xs">
				<img src="{{URL::asset('img/pleca.jpg')}}" class="img-responsive" alt="">
			</div>
		</div>
		<div class="container">
				@include('layouts/layoutsincludes/navbar')
		</div>
	</header>		
	<div class="container-fluid">
		<br>
	</div>
	<div class="main">
		@yield('content')
	</div>

	<div class="container-fluid">
		<br>
	</div>

	<footer>
		@include('layouts/layoutsincludes/footer')
	</footer>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
</body>
</html>