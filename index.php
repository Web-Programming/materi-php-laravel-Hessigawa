<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
</head>
<body>
    <h1><?php echo "Selamat Datang di PHP";?></h1>

    <?php
    //variable
    $jam = 12;
    if($jam < 12) {
        echo "<h3>Selamat Pagi</h3>";
    } else {
        echo "<h3>Selamat Siang</h3>";
    }

    // variable array
    $hoby = ['Makan', 'Minum', 'Tidur'];
    var_dump(value: $hoby);
    echo "<br/>";
    if(is_array(value: $hoby)) {
        echo "Hoby Saya Ada ". count(value: $hoby);
    }

    echo "<br/>";
    // Type data null
    $nilaiuts = NULL;
    if(is_null(value: $nilaiuts)) {
        echo "Nilai UTS Belum Keluar";
    }

    echo "<br/>";
    // Menghitung Umur
    $umur = 2006;
    $tahunskrng = 2025;
    $hasil = $tahunskrng - $umur;
    echo "Umur Saya Tahun ini adalah $hasil Tahun";
    


    echo "<br/>";
    // Konversi mata uang USD ke IDR
    $matauangusd = 4;
    $matauangidr = 16500;
    $konversi = $matauangusd * $matauangidr;
    echo "$matauangusd USD ke IDR adalah $konversi";
   


    echo "<br/>";
    // Konversi suhu Celcius ke Fahrenheit
    $celcius = 1;
    $fahrenheit = ($celcius * 9/5) +32;
    echo "$celcius celcius ke fahrenheit adalah $fahrenheit";
    

   
    echo "<br/>";
    // hitung luas lingkaran
    $jari = 3;
    $phi = 3.14;
    $luas = $phi * $jari * $jari;
    echo "Luas Lingkaran adalah $luas";
    ?>
</body>
</html>