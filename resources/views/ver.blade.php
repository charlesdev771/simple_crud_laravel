<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @foreach ($consulta as $consultas)

    <li>{{ $consultas->id }}</li> <a href="/editar-candidato/{{ $consultas->id }}">ATT</a>
    <li>{{ $consultas->id }}</li> <a href="/excluir-candidato/{{ $consultas->id }}">X</a>
    <li>{{ $consultas->nome }}</li>
    <li>{{ $consultas->telefone }}</li>

    @endforeach

</body>
</html>
