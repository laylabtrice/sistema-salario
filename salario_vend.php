<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Salário do vendedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Salário Vendedor</h2>
        <form method="post">
            <label for="nome">Nome Vendedor(a):</label><br>
            <input type="text" id="nome" name="nome" required><br>
            <label for="meta_semanal1">Meta da Semana 1 (em R$):</label><br>
            <input type="number" id="meta_semanal1" name="meta_semanal1" min="0" required><br>
            <label for="vendas_semana1">Vendas Realizadas na Semana 1 (em R$):</label><br>
            <input type="number" id="vendas_semana1" name="vendas_semana1" min="0" required><br>
            <label for="meta_semanal2">Meta da Semana 2 (em R$):</label><br>
            <input type="number" id="meta_semanal2" name="meta_semanal2" min="0" required><br>
            <label for="vendas_semana2">Vendas Realizadas na Semana 2 (em R$):</label><br>
            <input type="number" id="vendas_semana2" name="vendas_semana2" min="0" required><br>
            <label for="meta_semanal3">Meta da Semana 3 (em R$):</label><br>
            <input type="number" id="meta_semanal3" name="meta_semanal3" min="0" required><br>
            <label for="vendas_semana3">Vendas Realizadas na Semana 3 (em R$):</label><br>
            <input type="number" id="vendas_semana3" name="vendas_semana3" min="0" required><br>
            <label for="meta_semanal4">Meta da Semanaa 4 (em R$):</label><br>
            <input type="number" id="meta_semanal4" name="meta_semanal4" min="0" required><br>
            <label for="vendas_semana4">Vendas Realizadas na Semana 4 (em R$):</label><br>
            <input type="number" id="vendas_semana4" name="vendas_semana4" min="0" required><br>
            <label for="meta_mensal">Meta proposta Mensal (em R$):</label><br>
            <input type="number" id="meta_mensal" name="meta_mensal" min="0" required><br>
            <label for="vendas_mes">Vendas Realizadas no Mês (em R$):</label><br>
            <input type="number" id="vendas_mes" name="vendas_mes" min="0" required><br><br>
            <button type="submit" name="submit">Clique para calcular !!</button>
        </form>
 
    <?php
    // Inicio php para definir as metas semanais e vendas, e meta mensal e venda ao mês
    if(isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $meta_semanal1 = $_POST['meta_semanal1'];
        $vendas_semana1 = $_POST['vendas_semana1'];
        $meta_semanal2 = $_POST['meta_semanal2'];
        $vendas_semana2 = $_POST['vendas_semana2'];
        $meta_semanal3 = $_POST['meta_semanal3'];
        $vendas_semana3 = $_POST['vendas_semana3'];
        $meta_semanal4 = $_POST['meta_semanal4'];
        $vendas_semana4 = $_POST['vendas_semana4'];
        $meta_mensal = $_POST['meta_mensal'];
        $vendas_mes = $_POST['vendas_mes'];

   // Definição dos valores (salário mínimo, porcentagens, valor-semana)

        $salario_minimo = 1927.02; // Salário mínimo em 2024 para vendedores
        $valor_meta_semanal1 = $meta_semanal1 * 0.01;
        $valor_meta_semanal2 = $meta_semanal2 * 0.01;
        $valor_meta_semanal3 = $meta_semanal3 * 0.01;
        $valor_meta_semanal4 = $meta_semanal4 * 0.01;
        $valor_excedente_semanal1 = ($vendas_semana1 > $meta_semanal1) ? ($vendas_semana1 - $meta_semanal1) * 0.05 : 0;
        $valor_excedente_semanal2 = ($vendas_semana2 > $meta_semanal2) ? ($vendas_semana2 - $meta_semanal2) * 0.05 : 0;
        $valor_excedente_semanal3 = ($vendas_semana3 > $meta_semanal3) ? ($vendas_semana3 - $meta_semanal3) * 0.05 : 0;
        $valor_excedente_semanal4 = ($vendas_semana4 > $meta_semanal4) ? ($vendas_semana4 - $meta_semanal4) * 0.05 : 0;
        $valor_excedente_mensal = ($vendas_mes > $meta_mensal && $vendas_semana1 <= $meta_semanal1 && $vendas_semana2 <= $meta_semanal2 && $vendas_semana3 <= $meta_semanal3 && $vendas_semana4 <= $meta_semanal4) ? ($vendas_mes - $meta_mensal) * 0.10 : 0;
            
    // Calcular salário final por vendedor, base em suas vendas durante as semanas
    $salario_final = $salario_minimo + $valor_meta_semanal1 + $valor_meta_semanal2 + $valor_meta_semanal3 + $valor_meta_semanal4 + $valor_excedente_semanal1 + $valor_excedente_semanal2 + $valor_excedente_semanal3 + $valor_excedente_semanal4 + $valor_excedente_mensal;
 
    // Exibição do salário que o vendedor irá receber no mês
    echo "<p>Nome do Vendedor: $nome</p>";
    echo "<p>Salário Final: R$ " . number_format($salario_final, 2, ',', '.') . "</p>";
}
    ?>
    </body>
</html>