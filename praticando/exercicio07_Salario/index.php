<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salario</title>
</head>
<body>
    <?php 
        $salarioHoje = 1500;
        $valor = $_POST['salario']??0;
        $contS = $valor / $salarioHoje;
        $resto = $valor % $salarioHoje;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
    ?>
    <section id="main">
        <div class="header">
            Salários
        </div>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            <div class="content-form">
                <label for="salario">Digite seu salário</label>
                <input type="number" name="salario" min="1" placeholder="Digite aqui" value="<?= $valor ?>">
                <input class="submit" type="submit" value="Analizar">
            </div>
        </form>
        <p><strong>O Salário minimo hoje é de R$1.500,00</strong></p>
        <p>
            <?php 
                echo "Seu salario é igual á ". (int)$contS . " salários minimos";
                if($resto > 0){
                    echo " mais ". numfmt_format_currency($padrao, $resto, "BRL");
                }
            ?>
        </p>
    </section>
</body>
</html>