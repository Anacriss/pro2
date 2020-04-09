<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>saludos</title>
  </head>
  <body>

    <table id="saludos" border="1">

                           <thead>
                         <tr>
                             <th>ID</th>
                             <th>name</th>
                             <th>saludo</th>
                             <th>celular</th>
                             <th>nombre contacto</th>



                         </tr>
                     </thead>

                     <tbody>
                           @foreach ($saludos as $saludo)
                           <tr>
                               <td>{{ $saludo->id }}</td>
                               <td>{{ $saludo->name }}</td>
                               <td>{{ $saludo->saludo }}</td>
                               <td>{{ $saludo->celular }}</td>
                               <td>{{ $saludo->contactos->id}}</td>



                               <td>
                                 @csrf
                               </td>
                           </tr>
                           @endforeach

                     </tbody>

           </table>


<br><br><br>
            <form method="post" action="{{ route('saludo.store') }}">
               {{ csrf_field() }}
              <label for="name">
                name
                <input type="text" name="name">
              </label>

              <label for="saludo">
                saludo
                <input type="text" name="saludo">
              </label>

              <label for="celular">
                celular
                <input type="text" name="celular">
              </label>

              <label for="ii">
                id
                <input type="text" name="ii">
              </label>
              <div  class="form-group col-4 offset-4">
                  <label for="tipo_saludos_id">tipo_saludo pago</label>
                  <select class="form-control" name="tipo_saludos_id">
                    @foreach ($tipo_saludos as $tipo_saludo)
                      <option value="{{$tipo_saludo->id}}">{{$tipo_saludo->pago}} </option>

                    @endforeach
                  </select>
              </div>

              <div  class="form-group col-4 offset-4">
                  <label for="contacto_id">contacto nombre</label>
                  <select class="form-control" name="contacto_id">
                    @foreach ($contactos as $contacto)
                      <option value="{{$contacto->id}}"> {{$contacto->nombre}} </option>

                    @endforeach
                  </select>
              </div>





                <input type="submit" value="Crear nuevo saludo">
            </form>


  </body>
</html>
