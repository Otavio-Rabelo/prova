```php
<!-- resposta.php -->

<?php

$nome = $_POST['nome'];
$ingresso = $_POST['ingresso'];
$extras = $_POST['extras'] ?? [];

$total = 0;
$listaExtras = "";

if ($ingresso == "pista") {
    $total = 50;
    $tipoIngresso = "Pista";
}

if ($ingresso == "premium") {
    $total = 80;
    $tipoIngresso = "Premium";
}

if ($ingresso == "camarote") {
    $total = 120;
    $tipoIngresso = "Camarote";
}

foreach($extras as $item) {

    if ($item == "openbar") {
        $total += 40;
        $listaExtras .= "Open Bar<br>";
    }

    if ($item == "camiseta") {
        $total += 25;
        $listaExtras .= "Camiseta Oficial<br>";
    }

    if ($item == "meet") {
        $total += 60;
        $listaExtras .= "Meet and Greet<br>";
    }

    if ($item == "estacionamento") {
        $total += 20;
        $listaExtras .= "Estacionamento VIP<br>";
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-3">

        <div class="row">

            <div class="col-6">

                <div class="card">

                    <div class="card-header">
                        Resumo da Compra
                    </div>

                    <div class="card-body">

                        <h4>Cliente: <?= $nome ?></h4>

                        <p>
                            Ingresso:
                            <?= $tipoIngresso ?>
                        </p>

                        <p>
                            Extras:
                            <br>

                            <?php if (empty($extras)) { ?>

                                Nenhum extra selecionado

                            <?php } else { ?>

                                <?= $listaExtras ?>

                            <?php } ?>

                        </p>

                        <p>
                            Valor Total:
                            <?= "R$ " . number_format($total, 2, ',', '.') ?>
                        </p>

                    </div>

                    <div class="card-footer">

                        <a href="index.php" class="btn btn-secondary">
                            Voltar
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
```
```php
<!-- ========================= -->
<!-- QUESTÃO 2 -->
<!-- ========================= -->

<!-- index.php -->

<?php

$inicio = $_GET['inicio'] ?? "";
$fim = $_GET['fim'] ?? "";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-3">

        <div class="row">

            <div class="col-6">

                <div class="card">

                    <div class="card-header">
                        Sequência Matemática
                    </div>

                    <div class="card-body">

                        <form method="get">

                            <div class="mb-3">

                                <label class="form-label">
                                    Número Inicial
                                </label>

                                <input type="number"
                                    class="form-control"
                                    name="inicio">

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Número Final
                                </label>

                                <input type="number"
                                    class="form-control"
                                    name="fim">

                            </div>

                            <button type="submit"
                                class="btn btn-primary">

                                Gerar

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <?php if (empty($inicio) || empty($fim)) { ?>

            <div class="alert alert-warning mt-3">
                Digite os números para gerar a sequência
            </div>

        <?php } else { ?>

            <div class="row mt-3">

                <div class="col-8">

                    <table class="table table-striped table-hover">

                        <thead>

                            <tr>
                                <th>Número</th>
                                <th>Dobro</th>
                                <th>Triplo</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php for($i = $inicio; $i <= $fim; $i++) { ?>

                                <tr>

                                    <td><?= $i ?></td>

                                    <td><?= $i * 2 ?></td>

                                    <td><?= $i * 3 ?></td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        <?php } ?>

    </div>

</body>

</html>
```
