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
    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

    echo "saya suka " .  $namaBuah [0]. ", " . $namaBuah [1]. ", " . $namaBuah [2]. ", " . $namaBuah [3]. ", " . $namaBuah [4]. " dan " . $namaBuah [5] . ". <br>";

    // tampikan Nanas
    echo "saya suka " . $namaBuah [0] . "<br>";

    // tampilkan Mangga 
    echo "saya suka " . $namaBuah [1] . "<br>";

    // tampilkan Jeruk
    echo "saya suka " . $namaBuah [2] . "<br>";

    //tampikan Apel
    echo "saya suka " . $namaBuah [3] . "<br>";

    //tampikan Melon
    echo "saya suka " . $namaBuah [4] . "<br>";

    //tampikan Manggis
    echo "saya suka " . $namaBuah [5] . "<br>";

    // array dengan spesifik index
    $umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "30 Tahun");
    $umur['Ahmad'] = "50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi']  . "<br>";

    //tampikan semua umur
    foreach ($umur as $key => $value) {
        echo "  - $key: $value\n";
    }

    ?>
</body>
</html>