<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sistema Salário Vendedor</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <span>Informações</span>
      <!--nome vendedor-->
      <h1>Informe os dados pedidos</h1>
    <form method="post">
    <label for="name">NOME:</label>
    <input type="name" name="name" />

    <!--valor meta semanal (20 mil reais)-->
    <label for="name">VALOR DA META SEMANAL:</label>
    <input type="number" name="salario" />

    <!--valor meta mensal (80 mil reais)-->
    <label for="name">VALOR DA META MENSAL:</label>
    <input type="number" name="salario1" />
    
    <input type="submit" name="submit" value="Calcular" />
    </form>
    <?php
    
    ?>
</body>
</html>