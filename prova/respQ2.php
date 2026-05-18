<?php
$nome = $_GET['campoNome'];
$vetorBusca = ["Alan Turing", "Ada Lovelace", "Steve Jobs"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Início do seu código PHP aqui -->
            <?php if (empty($nome)) { ?>
                <div class="alert alert-info mt-3">Digite um nome para realizar a pesquisa</div>
            <?php } else { ?>
                <?php if (in_array($nome, $vetorBusca)) { ?>
                    <div class="alert alert-success mt-3">Você pesquisou por: <?= $nome ?>. Exibindo resultados encontrados...</div>
                <?php } else { ?>
                    <div class="alert alert-warning mt-3">A busca não retornou resultado</div>
            <?php }
            } ?>
            <!-- Final do seu código PHP aqui -->
            <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>