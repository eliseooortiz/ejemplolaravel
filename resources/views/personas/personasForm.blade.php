<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Personas formulario</p>
    <h1>formulario para {{isset($persona) ? 'Editar' : 'Crear'}}</h1>
    @if(isset($persona))
        <form action={{route('persona.update',$persona)}} method="POST">
        @method('PATCH')
    @else
        <form action={{route('persona.store')}} method="POST" enctype="multipart/form-data">
    @endif
        @csrf
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value={{$persona->nombre ?? ''}}>
        <br>
        <label for="apellido_paterno">Apellido paterno</label>
        <input type="text" name="apellido_paterno" value={{$persona->apellido_paterno ?? ''}}>
        <br>
        <label for="apellido_materno">Apellido materno</label>
        <input type="text" name="apellido_materno" value={{$persona->apellido_materno ?? ''}}>
        <br>
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo"value={{$persona->codigo ?? ''}}>
        <br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value={{$persona->telefono ?? ''}}>
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" value={{$persona->correo ?? ''}}>
        <br>
        <label for="area_id">Area:</label>
        <select name="area_id[]" id="area_id" multiple>
            @foreach ($areas as $area )
            /<!-- Si no funciona entonces hay que poner direnete de en lugar del igual igual igual  -->
                <option value="{{$area->id}}" {{isset($persona) && array_search($area->id,$persona->areas->pluck('id')->toArray()) ===false ? '': 'selected'}} >
                    {{$area->nombre_area}}
                </option>
            @endforeach
        </select>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <input type="file" name="archivo">
        <br>
        <input type="submit" value="Enviar">
        <br>
        <a href="{{route('envia-reporte')}}">Enviar correo</a>
        <hr>
        <h3>
            Archivo:
        </h3>
        <h5>
            <a href="{{route('descargar-archivo',$persona)}}">{{$persona->archivo_ruta}}</a>

        </h5>
    </form>
</body>
</html>
