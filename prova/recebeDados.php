<?php

$nome = $_POST['campoNome'];
$adicionais = $_POST['adicionais'] ?? [];
$valor = 20;
$adc = "";

foreach ($adicionais as $item) {
    if ($item == "bacon") {
        $valor += 3;
        $adc .= "Bacon<br>";
    }
    if ($item == "cheddar") {
        $valor += 2.5;
        $adc .= "Cheddar Cremoso<br>";
    }
    if ($item == "cebola") {
        $valor += 2;
        $adc .= "Cebola Caramelizada<br>";
    }
    if ($item == "hamburguer") {
        $valor += 5;
        $adc .= "Hamburguer Extra<br>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        Detalhes da compra
                    </div>
                    <div class="card-body">
                        <h4>Cliente: <?= $nome ?></h4>
                        <p>Sanduiche: R$ 20,00</p>
                        <p>
                            Adicionais: <br>
                            <?= $adc ?>
                        </p>
                        <p>Valor total: <?= "R$ " . number_format($valor, 2, ',', '.') ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>




        </div>
    </div>

</body>

</html>