<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    <ul>
        <li><a href={{route('informacion')}}>Informacion</a></li>
        <li><a href={{route('contacto')}}>Contacto</a></li>
    </ul>
    <h1>Contacto</h1>
    <p>Esto es un parrafo de la vista contacto</p>

    <form action={{route('recibe-contacto')}} method="POST">
        @csrf
        <label for="correo">Correo</label>
        <input type="email" name="correo">
        <br>
        <label for="comentario">Comentario</label>
        <br>
        <textarea name="comentario"  cols="30" rows="10" ></textarea>
        <br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono">
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
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
