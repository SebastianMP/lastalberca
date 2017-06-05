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