<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
    <title>NOVO CADASTRO</title>
</head>
<body>
    <div class="container">
        <div class="titulo row">
            <div class="col">
                <h1>NOVO CADASTRO</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="placa">Placa</label>
                        <input type="text" class="form-control" id="placa" placeholder="IJK7L89">
                    </div>

                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" placeholder="Modelo do veículo">
                    </div>

                    <div class="form-group">
                        <label for="cor">Cor</label>
                        <input type="text" class="form-control" id="cor" placeholder="Cor do veículo">
                    </div>

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control" id="tipo" placeholder="Tipo de veículo (carro ou van)">
                    </div>

                    <div class="form-group">
                    <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>