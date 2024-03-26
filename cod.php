<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Salário de Vendedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Calculadora de Salário de Vendedor</h2>
        <form method="post">
            <label for="nome">Nome do Vendedor:</label><br>
            <input type="text" id="nome" name="nome" required><br>
            <label for="meta_semanal">Meta Semanal (em R$):</label><br>
            <input type="number" id="meta_semanal" name="meta_semanal" min="0" required><br>
            <label for="meta_mensal">Meta Mensal (em R$):</label><br>
            <input type="number" id="meta_mensal" name="meta_mensal" min="0" required><br><br>
            <button type="submit" name="submit">Calcular Salário</button>
</form>
    <?php
    if(isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $meta_semanal = $_POST['meta_semanal'];
        $meta_mensal = $_POST['meta_mensal'];
            
    // Definição dos valores
        $salario_minimo = 1100; // Salário mínimo em 2024
        $valor_meta_semanal = $meta_semanal * 0.01;
        $valor_excedente_semanal = ($meta_semanal > 20000) ? ($meta_semanal - 20000) * 0.05 : 0;
        $valor_excedente_mensal = ($meta_mensal > 80000 && $meta_semanal <= 20000) ? ($meta_mensal - 80000) * 0.10 : 0;
            
    // Cálculo do salário final
    $salario_final = $salario_minimo + $valor_meta_semanal + $valor_excedente_semanal + $valor_excedente_mensal;

    // Exibição do resultado
        echo "<p>Nome do Vendedor: $nome</p>";
        echo "<p>Salário Final: R$ " . number_format($salario_final, 2, ',', '.') . "</p>";
    }
    ?>
    </div>
</body>
</html>