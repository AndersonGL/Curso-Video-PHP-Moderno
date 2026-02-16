<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendo = 37;
    $divisor = 5;

    if ($divisor == 0) {
        echo "Divisor não pode ser 0.";
        exit;
    }

    $q = intdiv($dividendo, $divisor);
    $r = $dividendo % $divisor;

    echo "Dividendo: $dividendo\n";
    echo "Divisor:   $divisor\n";
    echo "Quociente: $q\n";
    echo "Resto:     $r\n";
    echo "Prova:     $divisor * $q + $r = " . ($divisor * $q + $r) . "\n";
    ?>

    <main>

    <h1>Autonomia</h1>
    <form action="" method="get"></form>
    <label for="d1">Dividendo</label>
    <input type="number" name="d1" id="d1">       
    <label for="d2">Divisor</label>
    <input type="number" name="d2" id="d2"> 
    <input type="submit" value="Calcular">
    </form>
    </main>
</body>

</html>


