<div class="row">
<div class="col-sm-1">	
<!--Margen-->
</div>
<div class="col-sm-10">
	<h1>Instrucciones</h1>
<p>
	<center>Bienvenido al sistema de Preregistro y Registro de la alberca. 
	Por favor sigue las instrucciones <br> para obtener una inscripcion
	exitosa <br></center>
	<table class="table">
		<tr>
			<td>
				<div class="row">
						@include('portalviews/includes/steps/stepone')
					</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					@include('portalviews/includes/steps/steptwo')
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					@include('portalviews/includes/steps/stepthree')
				</div>
			</td>
		</tr>
	</table>
	<br>
	<div class="row">
		@include('portalviews/includes/steps/paths')
	</div>
	<div class="row">
		@include('portalviews/includes/alerts/alerts')
	</div>	
</p>
</div>
<div class="col-sm-1">
<!--Margen-->
</div>

</div>