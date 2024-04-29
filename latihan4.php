<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Halaman PHP Saya</h1>

    <?php
    /* Operator logika yang bisa digunakan
    * == Sama Dengan $x == $y
    * === Identical $x === $y
    * != Tidak sama dengan $x != $y
    * <> Tidak sama dengan $x <> $y
    * !== Not identical $x !== $y
    * > Lebih Besar dari $x > $y
    * < Kurang Dari $x < $y
    * >= Lebih besar atau Sama dengan $x >= $y
    * <= Kurang dari atau sama dengan $x <= $y
    * <=> Spaceship $x <=> $y
    */

    $t = date("H");
    echo "If";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    $t = date("H");
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 20) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat malam!";
    }

    ?>
</body>
</html>