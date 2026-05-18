<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Compra Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">

        <h2 class="text-center mb-4">Sistema de Compra</h2>

        <form action="processa.php" method="POST">

            <!-- NOME -->
            <input type="text" name="nome" placeholder="Nome" class="form-control mb-3">

            <!-- SENHA -->
            <input type="password" name="senha" placeholder="Senha" class="form-control mb-3">

            <!-- SELECT -->
            <select name="cliente" class="form-select mb-3">
                <option value="">Tipo de Cliente</option>
                <option value="comum">Comum</option>
                <option value="vip">VIP</option>
                <option value="premium">Premium</option>
            </select>

            <!-- RADIO -->
            <label class="form-label">Forma de pagamento:</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="pagamento" value="pix">
                <label class="form-check-label">Pix</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="pagamento" value="cartao">
                <label class="form-check-label">Cartão</label>
            </div>

            <!-- CHECKBOX -->
            <label class="form-label">Serviços adicionais:</label>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="servicos[]" value="presente">
                <label class="form-check-label">Embalagem (R$10)</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="servicos[]" value="garantia">
                <label class="form-check-label">Garantia (R$20)</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="servicos[]" value="suporte">
                <label class="form-check-label">Suporte (R$15)</label>
            </div>

            <button class="btn btn-success w-100">Finalizar Compra</button>

        </form>

    </div>
</div>

</body>
</html>