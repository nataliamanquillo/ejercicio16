<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Presidente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('presidente.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('presidente.create')}}">Crear</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Crear presidente</h1>
        <form id="formulario" name="formulario" class="w-25" action="{{route('presidente.store')}}" method="POST">
            @csrf
           
            <div class="form-floating mb-3">
                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombre">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input name="apellidos" type="date" class="form-control" id="apellidos" placeholder="apellidos">
                <label for="apellidos">Apellidos</label>
            </div>
            <div class="form-floating mb-3">
                <input name="ano" type="text" class="form-control" id="ano" placeholder="año">
                <label for="ano">Año</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha_nac" type="text" class="form-control" id="fecha_nac" placeholder="fecha_nac">
                <label for="fecha_nac">Fecha de Nacimiento</label>
            </div>

            <div class="form-floating">
                <select id="viajero_id" name="viajero_id" class="form-select mb-3"  form="formulario" aria-label="Floating label select example">
                  <option selected>Selecciona una opción</option>
                  @foreach($equipos as $equipo)
                    <option  value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                  @endforeach
                </select>
                <label for="equipos">Equipos</label>
            </div>
            
            <button type="submit" class="btn btn-success w-100">Crear</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>