<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de:{{$persona->nombre}} </h1>
    <a href="{{route('persona.index')}}">Listado de personas</a>
    <ul>
        <li>{{$persona->apellido_paterno}}{{$persona->apellido_materno}}</li>
        <li>{{$persona->codigo}}</li>
        <li>{{$persona->correo}}</li>
        <li>{{$persona->telefono}}</li>

    </ul>
    <hr>
    <a href="{{route('persona.edit',$persona)}}">Editar</a>
    <hr>
    <form action="{{route('persona.destroy',$persona)}}" method='POST'>
        @method('DELETE')
        @csrf
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
