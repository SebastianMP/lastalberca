@extends('layouts.principal')
@section('content')
<div class="container">
	<br>
	<div class="row " id="app">
       <div class="col-sm-2"></div>
    		<div class="col-sm-8">
        @include('partials/errors')
          <form 
                  action="{{ url('preregistro')}}" 
                  class="" 
                  method="POST" 
                  data-toggle="validator" 
                  role="form">
                {{ csrf_field() }}
    			                <!-- Encontrar en views/partials/-->
    				<h4>Datos Básicos</h4>
              @include('ptemp/personal')             <!-- Encontrar en views/ptemp/-->
              @include('progress/firstprogressbar')  <!-- Encontrar en views/progress/-->
            <h4>Datos Académicos</h4>
              @include('ptemp/academico')            <!-- Encontrar en views/ptemp/ -->
              @include('progress/secondprogressbar') <!-- Encontrar en views/progress/ -->
    				<h4>Contacto</h4>
              @include('ptemp/contacto')             <!-- Encontrar en views/ptemp/-->
    				  @include('progress/thirdprogressbar')  <!-- Encontrar en views/progress/-->
            <!--boton -->
              @include('buttons/prbutton')           <!-- Encontrar en views/buttons/ -->
            <!--boton-->
         </form>  </div>
        <div class="col-sm-2"></div>
        <template></template>
			<br>
		@include('vue/prvue')

  </div>
  </div>
@stop
