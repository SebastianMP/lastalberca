@extends('layouts/principal')
	@section('content')
	<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="panel panel-danger">
  				<div class="panel-heading">Boleta no encontrada: {{$matricula}}</div>
  				<div class="panel-body">
  					<p>Verifica si escribiste bien tu boleta e intenta de nuevo:</p><br>
  					<form class="" action="{{url('registro')}}" method="POST">
						{{ csrf_field() }}
                    <div class="form-group">
                          <input type="text" class="form-control" id="boleta" name="matricula">
                    </div>
				</form><br>
				<p>
					 O si es tu primera convocatoria ve al preregistro
				</p>
  				<form action="{{url('preregistro')}}">
  								<button type="submit" class="w3-button w3-block w3-round-xxlarge w3-indigo">Ir a Preregistro</button>
  				</form>
  				<br>
  				
  			</div>
		</div>		




		</div>
		<div class="col-sm-1"></div>
	</div>

	</div>
	@endsection