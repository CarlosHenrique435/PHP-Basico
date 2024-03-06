<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET["num"] ?? 0;
    ?>
    <section id="main">
        <div class="header">
            Informe um Valor
        </div>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <div class="content-form">
                <label for="num">Número</label>
                <input type="number" name="num" id="num" placeholder="Digite o valor" min="0" value="<?=$valor ?>">
                <input class="submit" type="submit" value="Enviar">
            </div>
        </form>
        <section id="resultado">
            <h2>Resultado final</h2>
            <?php 
                echo "<p>A raiz quadrada do valor $valor é ". sqrt($valor). "</p>";
                echo "<p>A raiz cubica do valor $valor é ". number_format(pow($valor, 1/3), 2) ."</p>";
            ?>
        </section>
    </section>
</body>
</html>