<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Soal 3</h1>

    <?php
    // Array yang berisi nilai akhir siswa
    $nilaiSiswa = [
        ["no" => 1, "poin" => 75, "nama" => "Adi"],
        ["no" => 2, "poin" => 80, "nama" => "Joni"],
        ["no" => 3, "poin" => 65, "nama" => "Jihan"],
        ["no" => 4, "poin" => 70, "nama" => "Aya"],
        ["no" => 5, "poin" => 85, "nama" => "Ita"],
        ["no" => 6, "poin" => 90, "nama" => "Budi"],
        ["no" => 7, "poin" => 95, "nama" => "Tini"],
        ["no" => 8, "poin" => 65, "nama" => "Sari"]
    ];

    // a) poin siswa dengan nomor urut 5
    foreach ($nilaiSiswa as $siswa) {
        if ($siswa["no"] == 5) {
            echo "Poin siswa dengan nomor urut 5 adalah : " . $siswa["poin"] . "<br>";
            break;
        }
    }

    // b) nama siswa yang memiliki poin 90
    echo "Nama siswa dengan poin 90 adalah  : ";
    foreach ($nilaiSiswa as $siswa) {
        if ($siswa["poin"] == 90) {
            echo $siswa["nama"] . " ";
        }
    }
    echo "<br>";

    // c) nama siswa yang memiliki poin 100
    $poin100 = false;
    foreach ($nilaiSiswa as $siswa) {
        if ($siswa["poin"] == 100) {
            $poin100 = true;
            echo $siswa["nama"] . " ";
        }
    }
    if (!$poin100) {
        echo "Tidak ada siswa yang memiliki poin 100<br>";
    }

    ?>
</body>
</html>