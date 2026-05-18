```php
<!-- ========================= -->
<!-- QUESTÃO 1 -->
<!-- ========================= -->

<!-- index.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-3">

        <div class="row">

            <div class="col-6">

                <div class="card">

                    <div class="card-header">
                        Compra de Ingresso
                    </div>

                    <div class="card-body">

                        <form action="main1.php" method="post">

                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ingresso</label>

                                <select class="form-select" name="ingresso">
                                    <option value="pista">Pista</option>
                                    <option value="premium">Premium</option>
                                    <option value="camarote">Camarote</option>
                                </select>
                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Extras
                                </label>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="extras[]"
                                        value="openbar">

                                    <label class="form-check-label">
                                        Open Bar
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="extras[]"
                                        value="camiseta">

                                    <label class="form-check-label">
                                        Camiseta Oficial
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="extras[]"
                                        value="meet">

                                    <label class="form-check-label">
                                        Meet and Greet
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        name="extras[]"
                                        value="estacionamento">

                                    <label class="form-check-label">
                                        Estacionamento VIP
                                    </label>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-success">
                                Comprar
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
```
