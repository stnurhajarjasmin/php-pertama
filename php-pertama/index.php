<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Pertama</title>
</head>
<body>


<table border="1">
<tbody>

    <tr>
        <th class="no">No</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>Angkatan</th>
        <th>Alamat</th>
        </th>
    </tr>

    <?php
        $counter =1;
        $nama='ST.Nurhajar Jasmin';
        $fakultas='Teknik';
        $jurusan='Informatika';
        $angktan='2019';
        $alamat='Hartaco';
        while ($counter <=10):
    ?>
        
    <tr>
        <td class="no"><?= $counter; ?></td>
        <td><?= $nama; ?></td>
        <td><?= $fakultas; ?></td>
        <td><?= $jurusan; ?></td>
        <td><?= $angktan; ?></td>
        <td><?= $alamat; ?></td>
    </tr>

    <?php
        $counter++;
        endwhile;
    ?>
</tbody>
</table>
</body>
</html>