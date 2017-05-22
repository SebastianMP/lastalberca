<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Alberca IPN</title>
	{!!Html::style('assets/css/bootstrap.css')!!}
	{!!Html::style('assets/css/estilos.css')!!}
	{!!Html::style('assets/css/w3.css')!!}
	<script src="assets/js/vue.js"></script>

	
</head>
<body>
	<header>
		<div class="container">
			<div class="col-xs-12 hidden-xs">
					<img src="{{URL::asset('img/pleca.jpg')}}" class="img-responsive" alt="">
				</div>
			<!-- <div class="row ">
				<div class="col-xs-2">
					<img src="imagenes/ipn.png" class="img-responsive" alt="">
				</div>

				<div class="col-xs-4 text-header">
					<h4>Instituto Politécnico Nacional</h4>
					<h5 class="italic">"La Técnica al Servicio de la Patria"</h5>
				</div>
				<div class="col-xs-offset-3 col-xs-3">
					<img src="imagenes/sep.jpg" class="img-responsive" alt="">
				</div>
			</div> -->
		</div>

<div class="container">
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<a href="#" class="navbar-brand">Alberca IPN</a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-ipn">
								<span class="sr-only"> Desplegar / Ocultar Menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>	
							</button>
						</div>
						<!-- Inicia Menú  -->
						<div class="collapse navbar-collapse" id="navegacion-ipn">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{url('/')}}">Inicio</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-tooggle" data-toggle="dropdown" role="button">Cursos <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										
								<li><a href="#">Básico</a></li>
								<li class="divider"></li>
								<li><a href="#">Avanzado</a></li>
									</ul>
								</li>
								<li><a href="{{url('preregistro')}}">Preregistro</a></li>
							</ul>	
							<form action="" class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Buscar">
								</div>
								<button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</form>
						</div>
					</div>
				</nav>
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
		<div class="container-fluid footer hidden-xs hidden-sm ">
				<div class="col-md-12 footer ">
					<p class="text-leyenda-titulo text-center">INSTITUTO POLITÉCNICO NACIONAL</p>
						<p class="text-leyenda">D.R. Instituto Politécnico Nacional (IPN), Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Delegación Gustavo A. Madero, C.P. 07738, Ciudad de México, México, 2009-2010. Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de el Director General del Instituto.</p>
				</div>
					<div class="col-md-12 footer">
						<ul class="list-inline text-center">
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Cursos</a></li>
							<li><a href="#">Contacto</a></li>
						</ul>
					</div>
		</div>
	</footer>
	
	<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>