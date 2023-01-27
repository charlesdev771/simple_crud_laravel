<!DOCTYPE html>
<html lang="ot-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>

<body>


    <form action="/cadastrar-candidatos" method="POST">
        @csrf
        <input type="text" placeholder="nome" name="nome"><br><br>
        <input type="text" placeholder="telefone" name="telefone"><br><br>
        <button>SEND</button>
    </form>

</body>

</html>
