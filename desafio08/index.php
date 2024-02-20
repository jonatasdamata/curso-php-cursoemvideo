<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Área de declarações
        $numero = $_GET['numero'] ?? 1;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            echo "<p>Analisando o número <strong>$numero</strong>, temos: ";
            echo "<ul><li> A sua raíz quadrada é:" . number_format($rq, 2, ",", ".") . "</li>";
            echo "<li>A sua raís cúbica é:" . number_format($rc, 2, ",", ".") . " </li></ul>";
        ?>
    </section>
    
</body>
</html>