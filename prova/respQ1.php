<?php
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$perfil = $_POST['campoPerfil'];
$camiseta = $_POST['campoCamiseta'];
$workshops = $_POST['workshops'] ?? [];
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
            <div class="col-6">
                <div class="card mt-3">
                    <div class="card-header">Confirmação de Inscrição</div>
                    <div class="card-body">
                        <p>Nome: <?= $nome ?></p>
                        <p>E-mail: <?= $email ?></p>
                        <p>Perfil: <?= $perfil ?></p>
                        <p>Camiseta: <?= $camiseta ?></p>
                        <ul>
                            <?php foreach($workshops as $item) { ?>
                                <li><?= $item ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>

            </div>



            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
