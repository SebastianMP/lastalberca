@extends('layouts.principal')
@section('content')

<div class="container ">
<h2>Grupos</h2>
<div class="w3-row-padding w3-margin-top">

@foreach($matricula as $m)
<div class="w3-half">
<form action="{{url('altagrupo')}}" method="POST">
 {{ csrf_field() }}
  <div class="w3-card-4">

    <header class="w3-container w3-blue">
      <h1>{{$m->nombre}}</h1>
      <h3>@foreach($m->dias as $d)
            {{$d->nombre}},
          @endforeach
      </h3>
    </header>

    <div class="w3-container">
        <table class="table">
          <tr>
            <th>Horario</th>
            <th>Lugares</th>
            <th>Elige</th>
          </tr>
          @foreach($m->clases as $c)
          <tr>
              <td>{{$c->hinicio}}--{{$c->hfin}}</td>
              <td>{{$c->lugares}}</td>
              <td>  
                  <div class="radio">
                      <label>  <input type="radio" name="clase" value="{{$c->idClase}}"> </label>
                  </div>
              </td>
          </tr>
          @endforeach
        </table>
        <input type="hidden" name="boleta" value="{{$mat}}">
    </div>

    <footer class="w3-container w3-blue">
      <h5>
        <button class="w3-button  w3-ripple">Inscribir</button>
      </h5>
    </footer>
  </div>
</form>
  <br>
</div>

@endforeach

</div>
</div>
@stop