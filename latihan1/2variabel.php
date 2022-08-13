<html>
    <head>

    </head>
    <body>
        <?php
            //membuat variabel//
            $nama_lengkap = "Ainun Na`imi"; //string
            $nim = 123456789; //int
            $perempuan = true;
        ?>
        <h1>Halooo..... <?php echo $nama_lengkap ?> </h1>
        <p> <?php echo "NIM : $nim " ?> </p>
        <br>
        <!-- jika menggunakan tanda petik satu ' ' maka fungsi variabel php tidak akan terbaca, berbeda dengan menggunakan petik dua " "  -->
        <p> <?php echo 'NIM: $nim ' . $nim ?> </p>
        <br>
        <p> <?php echo 'perempuan : '. $perempuan ?> </p>
        <br>



        <a href="index.php">Back To Home</a>





    </body>
</html>