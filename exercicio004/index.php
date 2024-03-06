<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Teste tipos primitivos
    </h1>
    <?php
        // 0x = Hexadecimal 0b = Binary 0 = Octal

        $num = (int) 3e2;
        var_dump($num);

        $v = (double) "90";
        var_dump($v);

        $vetor = [5, 3, 6, 7, 4];
        var_dump($vetor)
    ?>
</body>
</html>