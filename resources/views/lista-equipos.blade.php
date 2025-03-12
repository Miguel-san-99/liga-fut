<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
    <h1>Equipos</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>

        @foreach ($equipos as $equipo)
            <tr>
                <td>
                    <a href="{{ route('equipos.show', $equipo->id) }}">{{ $equipo->id }}</a>
                </td>
                <td>{{ $equipo->name }}</td>
                <td>{{ $equipo->created_at }}</td>
                <td>
                    <a href="{{ route('equipos.edit', $equipo) }}">Editar</a>
                </td>
            </tr>
        @endforeach

    </table>

</body>
</html>
