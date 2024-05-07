<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de CEP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <h1 class="text-center w-100">Buscar cep</h1>

    <form id="formCep" action="{{ route('buscarCep') }}" method="GET">
        <div class="input-group text-center">
        @csrf
        <input type="text"  name="cep" id="cepInput" class="form-control" placeholder="Insira CEP">

            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" onclick="searchCep()">
                    <i class="bi bi-search-heart-fill"></i>
                </button>
            </div>
        </div>
</form>

    @if(isset ($dadosCep))
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <td>CEP</td>
                <td>Logradouro</td>
                <td>complemento</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{ $dadosCep['cep'] }}</th>
                <td>{{ $dadosCep['logradouro'] }}</td>
                <td>{{ $dadosCep['complemento'] }}</td>
                <td>{{ $dadosCep['bairro'] }}</td>
                <td>{{ $dadosCep['localidade'] }}</td>
                <td>{{ $dadosCep['uf'] }}</td>
            </tr>
        </tbody>
    </table>
    </div>
    @endif

</body>
</html>

