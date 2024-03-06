<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado do proceso</h1></header>
    <main>
        <?php 
            $nome = $_GET['nome'] ?? "SEM NOME";
            $sobreNome = $_GET['snome'] ?? "DESCONHECIDO";
            print "$nome $sobreNome"
        ?>
        
    </main>
    
</body>
</html>