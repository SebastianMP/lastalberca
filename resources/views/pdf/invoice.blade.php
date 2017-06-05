<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #66ccff;
        color: white;
    }
</style>
  </head>
  <body>
        <table class="table">
          <tr>
            <th>Type</th>
            <th>Data</th>
          </tr>
          <tr>
            <td>Nombre: </td>
            <td>
            {{$data->nombre}} 
            {{$data->appat}} 
            {{$data->apmat}}
            </td>
          </tr>
          <tr>
            <td>Fecha de nacimiento</td>
            <td>{{$data->fechanacimiento}}</td>
          </tr>
          <tr>
            <td>Boleta</td>
            <td>{{$data->boleta}}</td>
          </tr>
          <tr>
            <td>Escuela</td>
            <td>{{$data->escuela_id}}</td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td>{{$data->tel}}</td>
          </tr>
          <tr>
            <td>Correo</td>
            <td>{{$data->email}}</td>
          </tr>
        </table>
    
  </body>
</html>