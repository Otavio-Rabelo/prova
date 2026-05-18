<?php
$valor = true;
if (isset($_GET['campoNumero']))
    $numero = $_GET['campoNumero'];
else
    $valor = false;
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
            <?php if (!$valor) { ?>
                <div class="alert alert-info mt-3">Você não informou o valor</div>
            <?php } elseif ($numero > 50 || $numero < 0) { ?>
                <div class="alert alert-warning mt-3">Informe um valor entre 0 e 50</div>
            <?php } else { ?>
                <div class="col-4 mt-3">
                    <table class="table table-striped table-hover text-center">
                        <?php for ($i = 1; $i <= 10; $i++) { ?>
                            <tr>
                                <td><?= $numero . ' x ' . $i . " = " ?></td>
                                <th><?= $numero * $i ?></th>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <a href="index.php" class="btn btn-secondary">Voltar</a>
            <?php } ?>
        </div>
    </div>

</body>

</html>