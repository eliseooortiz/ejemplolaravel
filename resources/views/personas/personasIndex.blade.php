
@extends('layouts.mi-layout')
@section('content')
    <p>Personas index</p>
    <p>Listado de personas</p>
    <a href={{route('persona.create')}}>Agregar persona</a>
    <table border="1">
        <thead>
            <th>Area</th>
            <th>Usuario</th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>codigo</th>
            <th>telefono</th>
            <th>Correo</th>
            <th>Nombre completo</th>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>
                        <ol>
                            @foreach ($persona->areas as $area)
                                <li>{{$area->nombre_area}}</li>
                            @endforeach
                        </ol>


                    </td>
                    <td>
                        {{$persona->user->name}}
                    </td>
                    <td>
                        <a href={{route('persona.show',$persona->id)}}>
                            {{$persona->id}}
                        </a>
                    </td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido_paterno}}</td>
                    <td>{{$persona->apellido_materno}}</td>
                    <td>{{$persona->codigo}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>{{$persona->correo}}</td>
                    <td>{{$persona->nombre_completo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

