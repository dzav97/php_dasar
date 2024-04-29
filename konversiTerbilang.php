<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konversi</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Konversi Terbilang</h1>

    <?php
    function convertNumberToWord($number) {
        switch ($number) {
            case 1:
                return "satu";
            case 2:
                return "dua";
            case 3:
                return "tiga";
            case 4:
                return "empat";
            case 5:
                return "lima";
            case 6:
                return "enam";
            case 7:
                return "tujuh";
            case 8:
                return "delapan";
            case 9:
                return "sembilan";
            default:
                return "Invalid number";
        }
    }

    $angka = 5; // masukkan nilai yang ingin di konversi
    $terbilang = convertNumberToWord($angka);
    echo "Angka {$angka} dalam huruf adalah $terbilang";

    ?>
</body>
</html>