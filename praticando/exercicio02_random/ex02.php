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
        <h1>Resultado</h1>
    
        <?php 
            //rand() --> Metodo antigo de 1951
            //mt_rand() --> metodo de 1997 mais rapido doque o rand
            //random_int() --> gera numeros aleatorios criptograficamente seguros
            print "<p>Gerando valor aleatoriamente entre 0 e 100</p>";

            print "<p>O valor gerado foi " . mt_rand(0, 100) . "</p>";
        ?>

        <button onclick="javascript:document.location.reload()">Gerar novamente</button>
    </main>
</body>
</html>