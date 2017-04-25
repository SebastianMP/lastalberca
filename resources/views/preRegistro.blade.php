@extends('layouts.principal')
@section('content')
<div class="container">
	<br>
	<div class="row">
			<form action="{{ url('preregistro')}}" class="" method="POST" data-toggle="validator" role="form">
			 {{ csrf_field() }}
		<div class="col-xs-12 col-md-6 col-lg-6">
				
				<h4>Datos Básicos</h4>
				<div class="form-group">
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" placeholder="Nombre" class="form-control" name='nombre' required>
				</div>
				
				<div class="form-group">
					<label for="nombre">Apellido Paterno:</label>
					<input type="text" id="apPaterno" placeholder="Apellido Paterno" class="form-control" name= 'appat'>
				</div>
				
				<div class="form-group">	
					<label for="nombre">Apellido Materno:</label>
					<input type="text" id="apMaterno" placeholder="Apellido Materno" class="form-control" name='apmat'>
				</div>

				<div class="form-group">
							<label for="fecha">Fecha de Nacimiento:</label>
		                <div class='input-group date' id='datetimepicker1'>
		                    <input type='date' class="form-control" id="fecha" placeholder="dd-mm-yyyy" name='date' />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		        </div>

				<h4>Datos Académicos</h4>
				<div class="form-group">
					<label for="boleta">Boleta:</label>
					<input type="text" id="boleta" placeholder="Boleta" class="form-control" name='boleta'>
				</div>

				<div class="form-group">
					<label for="option">Elige tu semestre</label>
					<input type="number" id="semestre" min="1" max="10" class="form-control" name="semestre">
				</div>

		</div>


		<div class="col-xs-12 col-md-6 col-lg-6">
				<h4>Dirección</h4>
				
				<div class="form-group">	
					<label for="calle">Calle:</label>
					<input type="text" id="calle" placeholder="Calle" class="form-control" name="calle">
				</div>

				<div class="form-group">			
					<label for="numero">Numero:</label>
					<input type="text" id="numero" placeholder="Numero" class="form-control" name="numero">
				</div>

				<div class="form-group">	
					<label for="colonia">Colonia:</label>
					<input type="text" id="colonia" placeholder="Colonia" class="form-control" name = "colonia">
				</div>

				<div class="form-group">	
					<label for="cp">Código Postal:</label>
					<input type="text" id="cp" placeholder="Código Postal" class="form-control" name='cp'>
				</div>

				<h4>Contacto</h4>

				<div class="form-group">	
					<label for="telefono">Telefono</label>
					<input type="value" id="telefono" placeholder="Telefono" class="form-control" name='tel'>
				</div>

				<div class="form-group">	
					<label for="email">Correo Electronico:</label>
					<input type="email" id="email" placeholder="Correo Electronico" class="form-control" name="mail">
				</div>
				<div class="form-group">	
					<label for="email">Altura:</label>
					<input type="number" step="0.1" id="altura" class="form-control" name="altura">
				</div>
				<div class="form-group">	
					<label for="peso">Peso:</label>
					<input type="number" id="peso" min="1" max="200" class="form-control" name="peso">
				</div>
				<div class="form-group">	
					<label for="email">Sangre:</label>
					<input type="text" id="sangre" placeholder="Tipo de sangre" class="form-control" name="sangre">
				</div>
		
			</div>
		</div>
				<br>
				<div class="col-xs-12">
					<button class="btn btn-primary">Enviar</button>
				</div>
			</form>
			<br>
	</div>
@stop
