<?php

$mahasiswa = [
    [
        "nama" =>    "mustofa al aqtob",
        "nrp" =>    "232040052",
        "email" => "mustofa07@gmail.com",
        "semester" => "2",
        "gambar" => "foto1.jpeg"

    ],
    [
        "nama" =>    "al nasir bagir",
        "nrp" =>    "24203343",
        "email" =>  "alnasir@gmail.com",
        "semester" => "1",
        "gambar"  => "foto2.jpeg"

    ],
    [
        "nama" =>    "firman saefullah",
        "nrp" =>    "235267766",
        "email" =>  "firman12@gmail,com",
        "semester" => "3",
        "gambar" => "foto3.jpeg"

    ],
    [
        "nama" =>    "tubagus shodiq",
        "nrp" =>    "235262561",
        "email" =>  "bagus02@gmail.com",
        "semester" => "5",
        "gambar" => "foto4.jpeg"

    ],
    [
        "nama" =>    "abghi nawas",
        "nrp" =>    "234452187",
        "email" =>  "abgi44@gamil.com",
        "semester" => "7",
        "gambar" => "foto5.jpeg"

    ],
    [
        "nama" =>    "smail aljufri",
        "nrp" =>    "234455422",
        "email" =>  "mail09@gmail.com",
        "semester" => "3",
        "gambar" => "foto6.jpeg"

    ],
    [
        "nama" =>    "abduloh asidiq",
        "nrp" =>    "243554411",
        "email" =>  "abdullah@gail.com",
        "semester" => "5",
        "gambar" => "foto7.jpeg"

    ],
    [
        "nama" =>    "saputra ghifar",
        "nrp" =>    "23445541",
        "email" =>  "saputra@gmail.com",
        "semester" => "6",
        "gambar" => "foto8.jpeg"

    ],
    [
        "nama" =>    "Teguh irawan",
        "nrp" =>    "23255241",
        "email" =>  "teguh01@gmail.com",
        "semester" => "2",
        "gambar" => "foto9.jpeg"

    ],
    [
        "nama" =>    "Muhamad al aqtob",
        "nrp" =>    "2431422",
        "email" =>  "aqtob09@gmail.com",
        "semester" => "3",
        "gambar" => "foto10.jpeg"
    ],

]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Mahasiswa tekinik informatika unpas</h1>

<body>
    <?php foreach ($mahasiswa as $mahasiswa) : ?>

        <ul>
            <li>
                <img src="img/<?= $mahasiswa["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mahasiswa["nama"]; ?></li>
            <li>NRP : <?= $mahasiswa["nrp"]; ?></li>
            <li>Email : <?= $mahasiswa["email"]; ?></li>
            <li>Semester : <?= $mahasiswa["semester"]; ?></li>

        </ul>

    <?php endforeach; ?>

</body>

</html>