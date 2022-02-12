<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario - teste de rotas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container w-25 my-5">
        <form action="{{ url('/users/2')}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="">Primeiro nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Luiz">
            </div>
            <div class="form-group">
                <label for="">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Tkaczyk">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="luiz@luiz.com">
            </div>

            <button class="btn btn-primary my-3">Salvar</button>

        </form>

    </div>

    <script src="{{ asset('js/app.js') }} "></script>
</body>

</html>
