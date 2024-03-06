<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../estilo/style.css">
</head>
<body>
    <main>
        <h1>
            Resultado
        </h1>
        <?php 
            $getValue = $_REQUEST["valor"];
            print "<p>Analizando o número ". number_format($getValue, 3, ",", ".") ." informado pelo usuario</p>";

            $int = (int)$getValue;

            print "<ul><li> A parte inteira do numero é ". number_format($int, 0, ",", ".") ." </li>";

            print "<li>A parte fracionaria do númeor é ". number_format(($getValue - $int), 3, ",", ".") ."</li></ul>"
            
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>