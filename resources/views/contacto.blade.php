<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>

        <!-- Navegacion -->
        
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-success">
                <a class="navbar-brand text-white" href="/contacto">Contacto</a>
                    <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="/nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">Inicio</a>
                        </li>
                    </ul>
                </div>         
            </nav>
        </div>
        
        <!-- Formulario de Contacto -->

        <div class="container col-4">
            @csrf
            <form class="bg-form" action="" method="GET">
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="nombre">
                <label for="">Apellido</label>
                <input class="form-control" type="text" name="apellido">
                <label for="">Correo electronico</label>
                <input class="form-control" type="email" name="email">
                <label for="">Telefono</label>
                <input class="form-control" type="text" name="telefono" id="telefono">
                <label for="">Mensaje</label>
                <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>
                <button class="btn btn-primary" type="submit">Enviar</button>

            </form>
        </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>