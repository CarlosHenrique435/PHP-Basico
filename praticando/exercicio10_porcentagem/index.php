<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos descontados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET["ivalor"]??0;
        $porcentagem = $_GET["range"]??0; 
    ?>
    <section id="main">
        <div class="header">
            Reajustador de preços
        </div>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <div class="content-form">
                <label for="ivalor">Valor</label>
                <input type="number" name="ivalor" id="ivalor" value="<?=$valor?>">
                <label for="irange">porcentagem (<output id="valor"><?=$porcentagem?></output>%)</label>
                <input type="range" name="range" id="range" min="0" max="100" value="<?=$porcentagem?>" oninput="valor.innerHTML = range.value">
                <input class="submit" type="submit" value="Enviar">
            </div>
        </form>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                print "<p>O valor que custava ". numfmt_format_currency($padrao, (float)$valor, "BRL") ." Agora com aumnto de $porcentagem% o valor ficou ". numfmt_format_currency($padrao, (($valor * $porcentagem) / 100 + $valor), "BRL") ."</p>";
            ?>
        </section>
    </section>
</body>
</html>