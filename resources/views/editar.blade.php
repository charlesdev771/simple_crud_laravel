<!DOCTYPE html>
<html lang="ot-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>

<body>


    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" placeholder="nome" name="nome" value="{{ $candidato->nome }}"><br><br>
        <input type="text" placeholder="telefone" name="telefone" value="{{ $candidato->telefone }}"><br><br>
        <button>SEND</button>
    </form>

</body>

</html>
