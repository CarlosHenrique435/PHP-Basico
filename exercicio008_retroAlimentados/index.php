<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capturando os dados do formulario
        $valor1 = $_GET['v1']??0;
        $valor2 = $_GET['v2']??0;
    ?>
    <section id="main">
        <div class="header">
            Soma valores
        </div>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" >
            <div class="content-form">
                <label for="v1">Valor 1</label>
                <input type="number" name="v1" id="user" value="<?=$valor1?>">
                <label for="v2">Valor 2</label>
                <input type="number" name="v2" id="user" value="<?=$valor2?>">
                <input class="submit" type="submit" value="Somar">
            </div>
        </form>
        <section id="resultado">
            <h2>Resultado da soma</h2>
            <?php 
                echo "<p>A soma do valor $valor1 com o valor $valor2 é ". ($valor1 + $valor2) ."</p>";
            ?>
        </section>
    </section>
</body>
</html>