<h1>Comenzemos!!</h1>
	<div class="form-group">
		<div class="panel panel-info">
  			<div class="panel-heading">Empieza tu proceso de preregistro/registro</div>
  			<div class="panel-body">

              <label for="">Si es tu primera inscripcion en la alberca:</label>
  							<form action="{{url('preregistro')}}">
  								<button type="submit" class="w3-button w3-block w3-round-xxlarge w3-indigo">Preregistro</button>
  							</form>
  							<form class="" action="{{url('registro')}}" method="POST">
								{{ csrf_field() }}
                    <div class="form-group">
                          <label for="Boleta">Si ya has hecho el preregistro en semestres pasados: <br> Boleta:</label>
                          <input type="text" class="form-control" id="boleta" name="matricula">
                    </div>
							</form>
  			</div>
  		</div>
	</div>