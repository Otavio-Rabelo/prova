<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">

        <h2 class="text-center mb-4">Resultado da Compra</h2>

        <?php

        if (isset($_POST["nome"], $_POST["cliente"], $_POST["pagamento"])) {

            $nome = $_POST["nome"];
            $cliente = $_POST["cliente"];
            $pagamento = $_POST["pagamento"];

            $total = 0;

            if (empty($nome) || empty($cliente) || empty($pagamento)) {
                echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
            } else {

                echo "<p><strong>Cliente:</strong> $nome</p>";
                echo "<p><strong>Tipo:</strong> $cliente</p>";
                echo "<p><strong>Pagamento:</strong> $pagamento</p>";

                echo "<hr>";

                if (isset($_POST["servicos"])) {

                    echo "<p><strong>Serviços escolhidos:</strong></p>";

                    foreach ($_POST["servicos"] as $item) {

                        if ($item == "presente") {
                            echo "Embalagem (R$10)<br>";
                            $total += 10;
                        } elseif ($item == "garantia") {
                            echo "Garantia (R$20)<br>";
                            $total += 20;
                        } elseif ($item == "suporte") {
                            echo "Suporte (R$15)<br>";
                            $total += 15;
                        }
                    }

                } else {
                    echo "<p>Nenhum serviço escolhido</p>";
                }

                echo "<hr>";

                echo "<p><strong>Total:</strong> R$ $total</p>";

                // DESCONTO
                if ($cliente == "vip") {
                    $desconto = $total * 0.10;
                } elseif ($cliente == "premium") {
                    $desconto = $total * 0.15;
                } else {
                    $desconto = 0;
                }

                $final = $total - $desconto;

                echo "<p><strong>Desconto:</strong> R$ $desconto</p>";
                echo "<p><strong>Valor final:</strong> R$ $final</p>";

                echo "<div class='alert alert-success mt-3'>Compra finalizada com sucesso!</div>";
            }

        } else {
            echo "<div class='alert alert-warning'>Acesse pelo formulário</div>";
        }

        ?>

        <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>

    </div>
</div>

</body>
</html>