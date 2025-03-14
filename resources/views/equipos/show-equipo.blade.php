<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
    <h1>Equipo # {{ $equipo->id }}</h1>

    <ul>
        <li>Nombre: {{ $equipo->name }}</li>
    </ul>
    <hr>
    <a href="{{ route('equipos.edit', $equipo) }}">Editar</a>
    <form action="{{ route('equipos.destroy', $equipo) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar
        </button>
    </form>
</body>
</html>
