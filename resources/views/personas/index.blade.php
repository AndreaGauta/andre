<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
           <div class="col text-center">
               <h1 class="text-primary">
                   listado de personas
               </h1>
           </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class ="col">
                <a href ="{{ route('personas.create')}}" class="btn btn-primary">nueva persona</a>
                </div>
           </div>
        
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>cedula</td>
                            <td>nombre</td>
                            <td>apellido</td>
                            <td>direccion</td>
                            <td>telefono</td>
                            <td>acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                        <tr>
                            <td>{{$persona->cedula}}</td>
                            <td>{{$persona->nombre}}</td>
                            <td>{{$persona->apellido}}</td>
                            <td>{{$persona->direccion}}</td>
                            <td>{{$persona->telefono}}</td>
                            <td>

                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('personas.show',['persona'=>$persona->id]) }}" class="btn btn-info">Detalle</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('personas.edit',['persona'=>$persona->id]) }}" class="btn btn-warning">Editar</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('personas.delete',['persona'=> $persona->id]) }}" class="btn btn-danger">Eliminar</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('libros.index',['persona_id' => $persona->id]) }}" class="btn btn-primary">registros</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>