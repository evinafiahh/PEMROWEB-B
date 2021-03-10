<?php
// tipe data
    // echo "Hello World";
    // $contoh_string = "eviii"; //string
    // $contoh_int =1; //int
    // $contoh_double = 1.1; //double
    // $contoh_arr = [] //array
 

//Penjumlahan
    // $str_satu = "Mark";
    // $str_dua = "Lee";

    // echo $str_satu . $str_dua;

// looping
    // for($i = 0; $i < 5; $i++) {

    //     // if else
    //     if($i % 2 == 0) { ?>
    //         <p>genap</p>
    //     <?php } else { ?>
    //         <p>ganjil</p>
    //     <?php }

    $arr = [
        [
            'nama' => 'evi',
            'nim' => '192410101086',
            'usia' => '20'
        ],
        [
            'nama' => 'sehun',
            'nim' => '192410101010',
            'usia' => '26'
        ],
        [
            'nama' => 'mark',
            'nim' => '192410101111',
            'usia' => '20'
        ]
    ];

    $arr2 = ['evi', '192410101086', '20']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>