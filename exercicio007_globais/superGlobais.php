<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="header">
            Super Globais
        </div>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";
            
                echo "<h1>Super global GET</h1>";
                var_dump($_GET);

                print "<h1>Super Global POST</h1>";
                var_dump($_POST);

                print "<h1>Super global REQUEST</h1>";
                var_dump($_REQUEST);

                print "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                print "<h1>Super Global SESSION</h1>";
                var_dump($_SESSION);

                print "<h1>Super Global env</h1>";
                var_dump($_ENV);

                print "<h1>Super GLobal SERVER</h1>";

                var_dump($_SERVER);
            ?>
        </pre>
    </section>
</body>
</html>