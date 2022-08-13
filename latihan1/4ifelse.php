<html>
    <head>
        <title>IFELSE</title>
    </head>
    <body>
        <h1> NILAI </h1>

        <?php
         /* 
            If():
            endif;
        */

        $nilai = 99;
        $nUTS = 120;
        $nUAS = 98;
        $nRata = ($nUTS + $nUAS) / 2;
        
        // SATU KONDISI
        if($nilai > 80) {
            $keterangan1 = "Lulus";
        } else {
            $keterangan1 = "Tidak Lulus";
        }


        // MULTIPLE CONDITION
        If($nRata >= 90 && $nRata <=100) {
            $keterangan = "A";
        } else if ($nRata >= 80 && $nRata <90) {
            $keterangan = "B";
        } else if ($nRata >= 70 && $nRata <80) {
            $keterangan = "C";
        } else if ($nRata < 70) {
            $keterangan = "D";
        } else {
            $keterangan = "Undefined";
        };

        // 2 KONDISI -OR-

        $var = 78;
        $var2 = 98;
        If($var == 88 || $var== 78){
            $hasil1 = "Ya!";
        } else {
            $hasil1 = "Tidak!";
        };

        // 2 KONDISI AND
        If($var == 88 && $var2 ==98) {
            $hasil2 = "Ya!";
        } else {
            $hasil2 = "Tidak!";
        }


        ?>

        <!-- PRINT NILAI 2 KONDISI -->
        <p>Nilai : <?php  echo $nilai ?> </p>
        <p>Keterangan1 : <?php echo $keterangan1 ?> </p>
        <!-- PRINT NILAI LEBIH DARI 2 KONDISI -->
        <p>Nilai Rata Rata : <?php  echo $nRata ?> </p>
        <p>Keterangan : <?php echo $keterangan ?> </p>
        <br>
        <!-- tampilkan hasil -->
        <p>hasil1or : <?php echo $hasil1 ?></p>
        <p>hasil2and : <?php echo $hasil2 ?> </p>

        


<br>
        <a href="index.php">Back To Home</a>
    </body>
</html>