<form class="form-inline" action="{{url('registro')}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="email">boleta:</label>
    <input type="text" class="form-control" id="email" name="matricula">
  </div>
</form>