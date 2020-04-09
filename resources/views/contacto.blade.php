<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}


</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<h2>lista de contactos</h2>
<p>contacto</p>


  <table class="table" >
      <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>apellido</th>
            <th>Dni</th>


            <th>ver</th>
            <th>editar</th>
            <th>eliminar</th>
          </tr>
      </thead>
      <tbody>

          @foreach ($contactos as $contacto)
              <tr>
                  <td>
                      {{$contacto->id}}
                  </td>
                  <td>
                      {{$contacto->nombre}}
                  </td>
                  <td>
                      {{$contacto->apellido}}
                  </td>
                  <td>
                      {{$contacto->dni}}
                  </td>

                  <td>
                      <a href="/detalleContacto/{{$contacto->id}}">Ver</a>
                  </td>
                  <td>
                      <a href="/editarContacto/{{$contacto->id}}/update">Editar</a>
                  </td>
                  <td>
                      <a href="/eliminarContacto/{{$contacto->id}}">Eliminar</a>
                  </td>
                  </tr>
              @endforeach

      </tbody>
  </table>

</body>
</html>
