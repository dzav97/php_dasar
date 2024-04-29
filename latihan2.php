<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div and Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Halaman PHP Saya</h1>

    <?php
    // variabel dalam php
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi variabel txt adalah: $txt</p>";
    echo "<p>isi variabel x adalah: $x</p>";
    echo "<p>isi variabel y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // PHP konstanta
    define("nama_konstanta", "Diaz Azkha Varissa");
    echo "<br>".nama_konstanta;

    ?>
</body>
</html>