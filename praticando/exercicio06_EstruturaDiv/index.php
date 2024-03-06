<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="main">
        <?php 
            $valor1 = $_GET["v1"]??0;
            $divisor = $_GET["divisor"]??0;
        ?>
        <div class="header">Anatomia de uma divisão</div>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="content-form">
                <label for="v1">Dividendo</label>
                <input type="number" name="v1" id="v1" value="<?= $valor1?>">
                <label for="Divisor">Divisor</label>
                <input type="number" name="divisor" id="divsor" value="<?= $divisor ?>" min="1">
                <input class="submit" type="submit" value="ENVIAR">
            </div>
        </form>

        <section id="resultado">
            <h2>Estrutura do resultado</h2>
            <p><?= $valor1 ?> dividido por <?= $divisor?></p>
            
            <p>O resto da divisão é <?php if($valor1 > 0 && $divisor > 0){
                echo $valor1 % $divisor;
            }
            ?></p>
            <p>
                O resultado da divisão real é <?php 
                if($valor1 > 0 && $divisor > 0){print (int)($valor1 / $divisor);}?>
            </p>

            
        </section>

    </section>
</body>
</html>