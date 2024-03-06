<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_POST['v1']??0;
        $valor2 = $_POST['v2']??0;

        $peso1 = $_POST["p1"]??1;
        $peso2 = $_POST["p2"]??1;

        $normalMedia = ($valor1 + $valor2) / 2;
        $ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
    ?>
    <section id="main">
        <div class="header">
            Calculo de médias
        </div>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <div class="content-form">
                <label for="v1">Valor 1</label>
                <input type="number" name="v1" id="v1" min="0" placeholder="Digite o valor..." value="<?=$valor1?>">
                <label for="p1">Peso da nota 1</label>
                <input type="number" name="p1" id="p1" min="1" placeholder="Peso da primeira avaliação" value="<?=$peso1?>">
                <label for="v2">Valor 2</label>
                <input type="number" name="v2" id="v2" min="0" placeholder="Digite o valor..." value="<?=$valor2?>">
                <label for="p2">Peso da nota 2</label>
                <input type="number" name="p2" id="p2" min="1" placeholder="Peso da segunda avaliação" value="<?=$peso2?>">

                <input class="submit" type="submit" value="Enviar">

            </div>
        </form>
        <section id="resultado">
            <h2>Resultado das médias</h2>
            <?php 
                echo "<p>A média das notas é $normalMedia</p>";
                echo "A média ponderado das notas é <p>$ponderada</p>"
            ?>
        </section>
    </section>
</body>
</html>