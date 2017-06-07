@extends('layouts/principal')
	@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">		
			    <div class="panel panel-primary">
			      <div class="panel-heading">
			      	<h2>Pre-registro terminado</h2>
			      </div>
			      <div class="panel-body">
			      	<form action="{{url('getpdf')}}">
			      	  <input type="hidden" name="boleta" value="{{$a->boleta}}">

						<button type="submit" class="btn btn-primary btn-block">Descargar Ficha de preinscripcion</button>
					</form>
			      </div>
			    </div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
		
		
	@endsection