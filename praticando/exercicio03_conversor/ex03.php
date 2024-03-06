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
        <h1>Conversor de moedas</h1>
        <?php

            $init = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $init .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $valorDolar = $dados["value"][0]["cotacaoCompra"];
            $convert = $_REQUEST["valor"]; 

            //usando o number_format

            //print "<p>O valor R$" .number_format($convert, 2, ",", ".") ." convertido para dolar é $". number_format(($convert / $valorDolar),2) . "</p>";

            //Usando internacionalidade

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            print "<p>O valor " . numfmt_format_currency($padrao, $convert, "BRL") . " Convertido para Dolar Americano fica ". numfmt_format_currency($padrao, ($convert / $valorDolar), "USD") ."</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>