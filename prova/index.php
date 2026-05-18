<?php ?>
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
                <h3>Questão 1</h3>
                <form action="respQ1.php" method="post">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome: </label>
                        <input type="text" class="form-control" id="idNome" name="campoNome">
                    </div>
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">E-mail: </label>
                        <input type="email" class="form-control" id="idEmail" name="campoEmail">
                    </div>
                    <div class="mb-3">
                        <label for="idPerfil" class="form-label">Tipo do Participante: </label>
                        <select class="form-select" aria-label="Default select example" id="idPerfil" name="campoPerfil">
                            <option value="">Selecione uma opção</option>
                            <option value="Estudante">Estudante</option>
                            <option value="Professor">Professor</option>
                            <option value="Competidor">Competidor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="idPerfil" class="form-label">Tamanho camiseta: </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="campoCamiseta" id="idCamiseta1" value="P">
                            <label class="form-check-label" for="idCamiseta1">
                                P
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="campoCamiseta" id="idCamiseta2" value="M">
                            <label class="form-check-label" for="idCamiseta2">
                                M
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="campoCamiseta" id="idCamiseta3" value="G">
                            <label class="form-check-label" for="idCamiseta3">
                                G
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="campoCamiseta" id="idCamiseta4" value="GG">
                            <label class="form-check-label" for="idCamiseta4">
                                GG
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="idPerfil" class="form-label">Workshops: </label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Desenvolvimento com Laravel" id="workshop1" name="workshops[]">
                            <label class="form-check-label" for="workshop1">
                                Desenvolvimento com Laravel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Estilização com Bootstrap" id="workshop2" name="workshops[]">
                            <label class="form-check-label" for="workshop2">
                                Estilização com Bootstrap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Lógica com Javascript" id="workshop3" name="workshops[]">
                            <label class="form-check-label" for="workshop3">
                                Lógica com Javascript
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="História da Computação" id="workshop4" name="workshops[]">
                            <label class="form-check-label" for="workshop4">
                                História da Computação
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="col-6">
                <h3>Questão 2</h3>
                <form action="respQ2.php" method="get">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome: </label>
                        <input type="text" class="form-control" id="idNome" name="campoNome">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Pesquisar</button>
                    </div>
                </form>
            </div>


            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>