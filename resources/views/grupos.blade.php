@extends('layouts.principal')
@section('content')

<div class="col-xs-12">
  <h2>Grupos</h2>
  <div class="table-responsive">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Grupo</th>
        <th>Tipo Curso</th>
        <th>Periodo</th>
        <th>Capacidad</th>
        <th>Entrenador</th>
        <th>Dias habiles</th>
        <th>Inscribir</th>
      </tr>
    </thead>
    <tbody>
     @foreach($groups as $grupo)

     @if($grupo->capacidad == 0)
      <tr  class="danger">
      @else
        <tr>
      @endif
        <td>
            <div class="form-group">
              <br><label for="horario">{{$grupo->idGrupo}}</label><br>
            </div>
        </td>
        <td>
          <div class="form-group">
            <br><label for="horario">{{$grupo->tipoCurso}}</label><br>
          </div>
        </td>
         <td>
          <div class="form-group">
            <br><label for="horario">{{$grupo->periodo}}</label><br>
          </div>
        </td>
         <td>
          <div class="form-group">
            <br><label for="horario">{{$grupo->capacidad}}</label><br>
          </div>
        </td>
         <td>
          <div class="form-group">
            <br><label for="horario">{{$grupo->coach}}</label><br>
          </div>
        </td>
         <td>
          <div class="form-group">
            <br><label for="horario">{{$grupo->diasHabiles}}</label><br>
          </div>
         </td>
         <td>
          <div class="form-group">
          @if($grupo->capacidad == 0)
            <br>
              Sin Cupo
            <br>
          @else
            <br>
             <form action="{{url('altagrupo')}}" method="POST">
                   {{ csrf_field() }}
                <input type="hidden" value="{{ $grupo->idGrupo }}" name="grupo">
                <input type="hidden" value="{{ $mat }}" name="alumno">
                <button type="submit" class="btn btn-primary">Inscribir</button>
              </form>
            <br>

          @endif
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@stop