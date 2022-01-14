<!-- <?php
echo "hello world";
print("web programing");
var_dump("Fakulats Teknik");
 ?> -->

                  <!-- PHP di dalam html -->

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pertemuan 3</title>
  </head>
  <body>
    <!-- <h1>selamat datang, <?php echo "bambang" ?></h1>
                            -->

                    <!-- tag html di dalam php
  <?php echo "<h2> di pembelajaran web programing  </h2>"; ?>

                        -->

<hr>
<h2>tipe data integer</h2>
<?php
  echo "Desimal               : "; var_dump(1966); echo "<br>";
  echo "octa                  :"; var_dump(01234); echo "<br>";
  echo "Hexadesimal           :"; var_dump(0x1a); echo "<br>";
  echo "binary                :"; var_dump(0b111111); echo "<br>";
  echo "underscore di nomor   :"; var_dump(1_505_000); echo "<br>";
?>

<hr>
<h2>variabel</h2>
<?php
  $namadepan  = "Dimas";
  $namabelakang  = "Nur Pras";
  $nim  = "1904030139";
  $kampus     = "UNIVERSITAS ISLAM SYEKH YUSUF";
  $mk         = "Web Programing";
  $hobi       = "Sepak Bola,Futsal,dll (kecuali berenang)";
  $umur       = 0x14;
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
