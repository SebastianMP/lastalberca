@extends('layouts.principal')
@section('content')

	
<div class="container">
  <h4>Inscripción</h4>
  <form class="" action="">
  	<div class="col-sm-6 col-xs-12">
    	<div class="radio">
      		<label><input type="radio" id="">Credencial</label>
    	</div>
    	<div class="radio">
      		<label><input type="radio" id="">Comprobante de Estudios</label>
    	</div>
    	<div class="radio">
      		<label><input type="radio" id="">Comprobante Preinscripción</label>
    	</div>
	</div>
    
	<div class="col-sm-6 col-xs-12">
        <div class="radio">
	      <label><input type="radio" id="">Certificado Médico</label>
	    </div>
    	<div class="radio">
      		<label><input type="radio" id="">Comprobante de Seguro Médico</label>
    	</div>
    	<div class="radio">
      		<label><input type="radio" id="">Fotos Tamaño Infantil</label>
    	</div>
	</div>
    
	<div class="col-xs-12">
		<button class="btn btn-primary">Enviar</button>
	</div>

  </form>
</div>

@stop