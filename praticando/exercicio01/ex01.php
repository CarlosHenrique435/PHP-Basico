<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores aleatorios</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $valor = $_REQUEST["num"] ?? 0;
            print "<p>O valor digitado foi $valor</p>";
            print  "<p>O antecessor de $valor é ". ($valor - 1) . "</p>";
            print "<p>O sucessor de $valor é ". ($valor + 1) . "</p>";


        ?>

        <button onclick="javascript:window.location.href='index.html'" >Voltar</button>
    </main>
</body>
</html>