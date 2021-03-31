<!-- sama seperti materi minggu kemrain. cuman ini ntar datanya dari user -->
<?php
    require 'tabung.php';

    $tabung = new tabung ;
    // $_GET['nama']='Vivi';
    // $_GET['age']='20';
    // var_dump $_GET;
    // $_POST['nama']='Vivi';
    // if (!empty($_POST)){
        // if (isset($_POST['tombolSubmit'])) {
        //     if (strlen($_POST['diameter']) > 0) {
        //         echo "login !";
        //     } else {
        //         echo "Diisi dulu yuk!";
        //     }
        // }
    //     echo "Diisi dulu";
    // }
    $luas=0;
    $volume=0;
    // if (isset($_POST['btn_submit'])) {
    //     $diameter=$_POST['diameter'];
    //     $tinggi=$_POST['tinggi'];

    //     $r=$diameter/2;
    //     $luas=2*3.14*$r*$tinggi;
    //     $volume=3.14*pow($r,2)*$tinggi;

    //     echo "Diameter $diameter <br/>";
    //     echo "Tinggi $tinggi <br/>";
    // }
    if (isset($_POST['btn_submit'])) {
        $tabung = new tabung;
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();

    }
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
    <!-- <form action="" method="POST">
        <input type="text" name="diameter" value="">
        <button name="tombolSubmit">Klik Yes</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="btn_submit">Hitung</button>

        <hr>

    </form>
        <ul>
            <li>Luas Selimut : <?= echo $tabung->getLuas(); ?> </li>
            <li>Volume : <?= $volume ?></li>
        </ul>
</body>
</html>

<!-- $_GET itu tipe datanya array, dan echo gabisa nampilin array
kalo di tampilin pake vardumb dan print_r maka akan muncul array kosong-->
<!-- $_GET juga bisa di masukkan datanya lewat url -->
<!-- post itu datanya gabisa dimasukin lewat url, tapi lewat form -->
<!-- post itu selalu ngedetect namenya. kalo ada namenya yang diisi bereti itu keynya -->
<!-- count untuk ngecek panjang teks -->
<!-- if isset dan seterusnya itu biar kalo belum isis data gabisa dubmit -->