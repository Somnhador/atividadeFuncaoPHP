<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FUNÇÃO ATIVIDADE 1</title>
</head>


<body>
    <?php
    $pegarValor = $_GET['fah'] ?? null;
    ?>

    <main>
        <h1>CONVERSOR</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="fah">Fahrenheit para Celsius</label>
            <input type="number" name="fah" step="0.01"><br><br>
            <button type="submit">CONFIRMAR</button>
        </form><br>
    </main>

    <?php if ($pegarValor !== null): ?>
        <section>
            <h2>RESULTADO</h2>
            <?php
            require_once('classeFuncao.php');
            echo "$pegarValor Fahrenheit é igual a " . conversorFah() . " Celsius";
            ?>
        </section>

    <?php endif; ?>

</body>

</html>