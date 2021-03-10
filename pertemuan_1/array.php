<?php
    $students=[
        [
            'nama'=> 'Vivi',
            'nim' => '192410101040',
        ],
        [
            'nama' => "Icha",
            'nim' => '192410101042',
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?= $student ['nama'] ?></td>
                <td><?= $student ['nim'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>
<!-- asosiatif array buat gabungin beberapa array, jadi ada array didalam array -->
<!-- foreach itu kaya if buat ngecek, tapi foreach itu lebih spesifik ke satu variabel -->
<!-- case untuk mengekspresikan aja -->
<!-- ada juga var_dump buat mencetak tapi lebih detail drpd echo -->