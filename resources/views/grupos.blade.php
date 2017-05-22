@extends('layouts.principal')
@section('content')

<div class="container ">
<h2>Grupos</h2>
<div class="w3-row-padding w3-margin-top">
  
     @foreach($groups as $grupo)
  <div class="w3-third">
    <div class="w3-card-4" style="width:100%">
          <header class="w3-container w3-light-grey">
            <h3>Matricula {{$grupo->idGrupo}}</h3>
           </header>
      <div class="w3-container">
          <p>Tipo de curso: {{$grupo->tipoCurso}}</p>
            <hr>
            <img src="{{URL::asset('img/nadar.png')}}" alt="nadar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <p><button class="w3-button w3-circle w3-dark-grey">ver horario</button></p><br>
      </div>
    <button class="w3-button w3-block w3-dark-grey">Inscribir</button>
  </div>
  <br>
  </div>
      @endforeach

</div>
</div>
</div>
@stop