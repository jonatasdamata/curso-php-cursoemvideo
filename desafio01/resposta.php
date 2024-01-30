<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01 PHP </title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"];
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br/>O seu <em>antecessor</em> é $a";
                echo "<br/>O seu <em>sucessor</em> é $s";
            ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button> -->
        <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
    </main>
</body>
</html>