@if(! $errors->isEmpty())
		<div class="alert alert-danger">
			<p>Error de Pre-registro<strong>!!</strong></p>
			<ul>
			Esta boleta ya fue registrada <br>
			Si eres un alumno que ya hizo el preregistro el periodo/convocatoria anterior<br>
			Introduce tu boleta aqui para seguir el tramite
			@include('formprevregistry/registro')

			</ul>
		</div>
@endif