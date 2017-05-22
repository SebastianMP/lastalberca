<div class="row">
<div class="col-sm-1">	
<!--Margen-->
</div>
<div class="col-sm-10">
	<h1>Instrucciones</h1>
<p>
	Bienvenido al sistema de Preregistro y Registro de la alberca <br>
	Por favor Sigue las siguientes instrucciones para obtener una inscripcion<br>
	exitosa <br>
	<h2>Instrucciones</h2>
	<h3>Paso 1</h3>
	Si es la primera vez que vas a participar en una convocatoria <br>
	Porfavor elije la opcion de preregistro y llena nuestro formulario<br>
	Si ya participaste una una convocatoria anterior porfavor introduce<br>
	tu boleta.
	<h3>Paso 2</h3>
	Despues del paso 1, Se mostrara una lista con todas las matriculas <br>
	Donde podras ver el horario de cada grupo y la disponibilidad		<br>
	Elije un grupo que tenga capacidad disponible. 						<br>
	De no poder eligir un grupo elije la opcion "Lista de espera"		<br>
	Para que se te notifique si se han desocupado lugares				<br>
	<h3>Paso 3</h3>
	Acabado el paso 2, se habra enviado un correo de confirmación,     <br>
	Por favor haz click en la url para confirmar tu registro al grupo   <br>
	Cuando confirmes tu correo se habra generado una ficha de inscripcion <br>
	guardala, ya que te servira en la entrega de documentos				<br>
	Y asi ha finalizado tu registro.									<br>
	<h1>Comenzemos!!</h1>
	<div class="form-group">
		<div class="panel panel-info">
  			<div class="panel-heading"></div>
  			<div class="panel-body">
  				<table class="table">
  					<tr>
  						<td>
  							<form action="">
  								<button class="w3-button w3-block w3-indigo">Preregistro</button>
  							</form>
  						</td>
  					</tr>
  					<tr>
  						<td>
  							<form class="form-control" action="{{url('registro')}}" method="POST">
								{{ csrf_field() }}
  								<div class="form-group">
    								<label for="email">Boleta:</label>
    								<input type="text" class="form-control" id="boleta" name="matricula">
  								</div>
							</form>
  						</td>
  					</tr>
  				</table>
  			</div>
  		</div>
	</div>
	
   <table class="table">
   	<tr>
   		<td></td>
   	</tr>
   </table>

	<h2>Notas:</h2>
	<ul>
		<li>
		En el paso 2, si no encuentra un lugar disponible y no le interesan las demas matriculas o <br>
		ademas de no recibir notificacion acerca de los grupos. Entonces elija la opcion finalizar.
		</li>
		<li>
			Solo se puede participar en 2 convocatorias, si usted ha participado en 2 convocatorias,<br> el sistema no lo dejara inscribirse, unase a un equipo para poder seguir participando en <br>natación. Contacte con el profesor.

		</li>
		<li>
			Si en el paso 2 eligio la lista de espera, revise su correo constantemente, se le <br>notificara cuando los grupos de su interes tengan un lugar disponible<br>
			Asi podra seguir con el paso 3
		</li>
		<li>De poder elegir un grupo exitosamente pero no confirmo su cuenta en 24 horas, se le dara de <br>
			baja
		</li>
	</ul>

</p>
</div>
<div class="col-sm-1">
<!--Margen-->
</div>

</div>