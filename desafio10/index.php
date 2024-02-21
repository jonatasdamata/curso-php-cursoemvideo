<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Capturando os valores -->
    <?php 
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;
    ?>
   <main>
   <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="nasc">Em que ano você nasceu?</label>
    <input type="number" name="nasc" id="nasc" min="1900" value="<?=$nasc?>">
    <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong>2024</strong>)</label>
    <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
    <input type="submit" value="Qual será minha idade?">
    </form>
   </main>
 
   <section>
    <?php 
        $idade = ( $ano - $nasc );
    ?>
    <h2>Resultado</h2>
    <p>Quem nasceu em <?=$nasc?> vai ter <?=$idade?> anos em <?=$ano?>!</p>
   </section>

    
</body>
</html>