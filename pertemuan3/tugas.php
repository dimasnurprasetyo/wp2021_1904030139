<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TUGAS WEBPROGRAMING</title>
  </head>
  <body>
    <h2>variabel</h2>

    <?php
      $namadepan  = "Dimas";
      $namabelakang  = "Nur Pras";
      $nim  = "1904030139";
      $kampus     = "UNIVERSITAS ISLAM SYEKH YUSUF";
      $mk         = "Web Programing";
      $hobi       = "Sepak Bola,Futsal,dll (kecuali berenang)";
      $umur       = 0x15;
      $alamat  = "GRIYA KARAWACI";
      $jenkel  = "LAKI-LAKI";


    ?>

    <h4>identitas diri </h4>
    <p>nama         : <?php echo $namadepan." ".$namabelakang; ?></p>
    <p>nim  : <?php echo $nim; ?></p>
    <p>kampus       : <?php echo $kampus; ?></p>
    <p>mata kuliah  : <?php echo $mk; ?></p>
    <p>hobi         : <?php echo $hobi; ?></p>
    <p>umur  : <?php echo $umur; ?></p>
    <p>jenis kelamin : <?php echo $jenkel; ?></p>
    <p>alamat  : <?php echo $alamat; ?></p>

  </body>
</html>
