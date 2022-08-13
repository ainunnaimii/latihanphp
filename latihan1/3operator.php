<?php
// deklarasi variabel
$title = "Latihan Operator";
$a = 7;
$b = 3;

$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$modulo = $a % $b;
$pangkat = $a ** $b;

?>

<html>
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h3><?php echo "penjumlahan $a + $b = $penjumlahan" ?> </h3>
        <h3> <?php echo "pengurangan $a - $b = $pengurangan" ?> </h3>
        <h3> <?php echo "pembagian $a + $b = $pembagian" ?> </h3>
        <h3> <?php echo "modulo $a + $b = $modulo" ?> </h3>
        <h3> <?php echo "pangkat $a ** $b = $pangkat" ?> </h3>


<br>
        <a href="index.php">Back To Home</a>
    </body>
</html>