<?php

    $title = 'Data mahasiswa' ;

    $nama = 'rohimah';
    $jurusan = 'Teknik informatika';
    $rombel = 'TI01';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1 style="text-align: center"> <?phpecho $title ?> </h1>
    <table style="widhte: 50%" border="1">
       <tbody>
        <tr>
            <td>nama rohimah</td>
            <td>jurusan</td>
            <td>rombel</td>
        </tr>

        <tr>
            <td> <?= $nama ?> </td>
            <td> <?= $jurusan ?> </td>
            <td> <?= $rombel ?> </td>
        </tr>

        <?php foreach($mahasiswa as $mhs): ?> 

            <tr>
                <td> <?= $mhs['nama'] ?> </td>
                <td> <?= $mhs['jurusan'] ?> </td>
                <td> <?= $mhs['rombel'] ?> </td>

            </tr>

            <?php endforeach ; ?>
        </tbody>   
















       

</body>
</html>