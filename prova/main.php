<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="recebeDados.php" method="POST" class="col-4">
                <h2>Atividade 5 - Questão 1</h2>
                <h4>Sanduiche R$ 20,00</h4>
                <p>Selecione os adicionais:</p>
                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="txtNome" name="campoNome">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="bacon" id="adc-1" name="adicionais[]">
                    <label class="form-check-label" for="adc-1">
                        Bacon R$ 3,00
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="cheddar" id="adc-3" name="adicionais[]">
                    <label class="form-check-label" for="adc-3">
                        Cheddar R$ 2,50
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="cebola" id="adc-4" name="adicionais[]">
                    <label class="form-check-label" for="adc-4">
                        Cebola R$ 2,00
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="hamburguer" id="adc-2" name="adicionais[]">
                    <label class="form-check-label" for="adc-2">
                        Hambúrguer R$ 5,00
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>
            <form action="recebeDadosGet.php" method="GET" class="col-4">
                <h2>Atividade 5 - Questão 2</h2>
                <p>Informe o número:</p>
                <div class="mb-3">
                    <label for="txtNumero" class="form-label">Número:</label>
                    <input type="text" class="form-control" id="txtNumero" name="campoNumero">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>