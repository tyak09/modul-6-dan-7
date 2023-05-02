<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel = "stylesheet" type="text/css" href="kalkulator.css">
</head>
<body>
    <?php
    if(isset($_POST["hitung"])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi){
            case 'tambah':
                $hasil = $bil1 + $bil2;
            break;
            case "kurang" :
                $hasil = $bil1 - $bil2;
            break;
            case "kali":
                $hasil = $bil1*$bil2;
            break;
            case "bagi":
                $hasil = $bil1 / $bil2;
            break;
            case "modulus":
                $hasil = $bil1 % $bil2;
            break;
        }
    }
    ?>
    <div  class ="kalkulator Sederhana">
        <h2 class="judul"> Kalkulator Sederhana</h2>
        <form method="POST" >
            <input type="text" name ="bil1" placeholder="Masukkan Bilangan Pertama" class="bil1">
            <input type="text" name = "bil2" placeholder="Masukkan Bilangan Kedua" class="bil1">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">9</option>
                <option value="bagi">/</option>
                <option value="modulus">%</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class ="tombol">
        </form>
        <?php if (isset($_POST["hitung"])){ ?>
            <input type="text" value = "<?php echo $hasil;?>" class ="bil1">
        <?php }else{?>
            <input type="text" value="0" class = "bil">
        <?php } ?>
    </div>
</body>
</html>