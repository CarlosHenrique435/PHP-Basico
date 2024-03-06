<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = 'carlos';
        print "Olá meu nome é $nome\n";
        print 'Olá meu nome é $nome\n ';
        print "<br>Estamos no ano de ". date('Y');

        $nome = 'rodrigo';
        $snome = 'Nogueira';
        print "<br>$nome 'Minotauro' $snome";
        print "<br>$nome \"Minotauro\" $snome";

        echo <<< teste

        <br>Ola galera do canal meu nome é $nome E meu sobre nome é
         $snome
        
        teste;
    ?>
</body>
</html>