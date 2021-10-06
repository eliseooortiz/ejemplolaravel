
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>vista presentacion</title>
</head>
<body>
    <h1>Hola desde presentacion</h1>
    @if($nombre == 'eliseo')
        Hola {{$nombre}} <!-- Esto es sintaxis de blade para ahorrar las etiquetas de php-->
        {{$apellido}}
    @else
        Hola loco
    @endif

    <p>hola {{$nombre_completo}}</p>

</body>
</html>
