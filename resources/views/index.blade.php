@extends('layouts.principal')
@section('content')
	<section class="container">
		<br>
		<div class="col-md-12">
			<div id="carousel-1" class=" carousel slide" data-ride="carousel" > 
				<!--  Indicadores -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-1" data-slide-to="1"></li>
					<li data-target="#carousel-1" data-slide-to="2"></li>
				</ol>
				<!-- Contenedor de los slide -->
				<div class="carousel-inner" role="listbox">

					<div class="item active">
						<img src="{{URL::asset('assets/imagenes/nat1.jpg')}}" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h3>Natación</h3>
						</div>
					</div>

					<div class="item">
						<img src="imagenes/nat2.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h3>Natación</h3>
						</div>
					</div>

					<div class="item">
						<img src="imagenes/nat3.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h3>Natación</h3>
						</div>
					</div>
				</div>
				<!-- Controles -->
				<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" area-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>

				<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" area-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
		<br>
		<br>
	</section>
@stop