<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>VEÍCULOS CADASTRADOS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" id="novo" class="btn btn-primary">Novo...</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Cor</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>BRA2E19</td>
                            <td>Uno</td>
                            <td>Prata</td>
                            <td>Carro</td>
                            <td><button type="button" class="acoes btn btn-success">Editar</button> <button type="button" class="acoes btn btn-danger">Deletar</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>LSN4I49</td>
                            <td>Benz Vito</td>
                            <td>Preto</td>
                            <td>Van</td>
                            <td><button type="button" class="acoes btn btn-success">Editar</button> <button type="button" class="acoes btn btn-danger">Deletar</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>ABC1D23</td>
                            <td>Onix</td>
                            <td>Vermelho</td>
                            <td>Carro</td>
                            <td><button type="button" class="acoes btn btn-success">Editar</button> <button type="button" class="acoes btn btn-danger">Deletar</button></td>
                        </tr>
                            <th scope="row">4</th>
                            <td>EFG4H56</td>
                            <td>Benz Vito</td>
                            <td>Azul</td>
                            <td>Van</td>
                            <td><button type="button" class="acoes btn btn-success">Editar</button> <button type="button" class="acoes btn btn-danger">Deletar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>