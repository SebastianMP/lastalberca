@extends('layouts.principal')
	@section('content')
	<div class="container">
		<div class="row">
		<div class="col-sm-3"></div>
		<div class="col sm-6">
			<div class="panel panel-default">
  				<div class="panel-heading">
  					<h3>Confirmacion de correo</h3>
  					<b>Se envio un correo a tu bandeja</b>
  					<b>Copia la clave para terminar tu inscripcion</b>
  					<b>y recibir tu comprobante</b>
  				</div>
  				<div class="panel-body">
  					<form method="POST" action="{{url('comprobar')}}">
  					{{ csrf_field() }}
  						<input type="text" class="form-control"  name="clave">
  						<button type="submit" class="btn btn-primary btn-block">Enviar</button>
  					</form>
  				</div>
			</div>
		</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
	@endsection