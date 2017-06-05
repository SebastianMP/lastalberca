<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="assets/js/vue.js"></script>
	<title>Produccion</title>
	{!!Html::style('assets/css/bootstrap.css')!!}
</head>
<body>

	<div id='app' class="container">
<form action=""v-model="number">
  <input type="radio" name="gender" value="1" v-model="number"> 1<br>
  <input type="radio" name="gender" value="2" v-model="number"> 2<br>
  <input type="radio" name="gender" value="3" v-model="number"> 3
</form>
<div class="progress">
  <div class="progress-bar" 
  	  role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:@{{tres()}}%">
  </div>
</div>


	<mi-pregunta pregunta="Edad"></mi-pregunta>


		<h1 v-if="name">Example Code @{{ name }}</h1>
		<template v-else="!name">
			<h2>Escribe en el campo</h2>
		</template>
		
		<input type="text" v-model="name" class="form-control">

		<hr>

		<pre>@{{$data | json}}</pre>
	</div>

	<script type="text/template" id="miPregunta">
			<div class="form-group" >
					<label for="nombre">@{{ pregunta }}:</label>
							<div class="input-group">
								<span class="input-group-addon" id="app">
          <i :class="glyphicon glyphicon-ok"></i>
         </span>
					<span class="input-group-addon" id="app" v-else ="nombre"><i  class="glyphicon glyphicon-ok"></i></span>
					<input type="text" id="@{{ pregunta }}" placeholder="Nombre" v-model="nombre" class="form-control input-sm" name='nombre' required >
					</div>
			</div>		

	</script>
	<script type="text/javascript">
	Vue.component('mi-pregunta',{
		template:"#miPregunta",
		props:['pregunta']
	});
	new Vue({
			el: "#app",
			data: {
				name: "",
				number: " ",
			},

			computed:{
				tres: function(){
					if(this.number==1){
						return 33;
					}
					if (this.number==2) {
						return 66;
					}
					if(this.number==3)
					{
						return 100;
					}
				
				},
			}
		});
	</script>


	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	
</body>
</html>
