<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>contactos</title>
  </head>
  <body>

    <table id="contactos"border="1">

                           <thead>
                         <tr>
                             <th>ID</th>
                             <th>Nombre</th>
                             <th>apellido</th>
                             <th>Dni</th>
                             <th>saludos</th>

                         </tr>
                     </thead>

                     <tbody>
                           @foreach ($contactos as $contacto)
                           <tr>
                               <td>{{ $contacto->id }}</td>
                               <td>{{ $contacto->nombre }}</td>
                               <td>{{ $contacto->apellido }}</td>
                               <td>{{ $contacto->dni }}</td>
                               <td>{{ $contacto->saludos}}</td>
                               <td>
                                 @csrf
                               </td>
                           </tr>
                           @endforeach
                     </tbody>

           </table>

           <form method="post" action="{{ route('contacto.store') }}">
               {{ csrf_field() }}
             <label for="nombre">
               nombre
               <input type="text" name="nombre">
             </label>

             <label for="apellido">
               apellido
               <input type="text" name="apellido">
             </label>

             <label for="dni">
               dni
               <input type="text" name="dni">

             </label>

          

              <input type="submit" value="enviar">



           </form>




  </body>
</html>
