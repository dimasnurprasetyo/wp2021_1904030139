<!-- <?php
$a = 301;

if ($a > 300 && $a< 302) {
    echo "Paket : Microsoft Office"."<br>";
    echo "Harga : Rp.350.000";
}
elseif ($a > 301 && $a < 303) {
  echo "Paket : Visual Basic"."<br>";
  echo "Harga : Rp.450.000";
}
elseif ($a > 302 && $a < 304) {
  echo "Paket : Microsoft Office"."<br>";
  echo "Harga : Rp.400.000";
}
else {
    echo "Pilih paket anda";
}
?> -->
<!-- echo "<h1>SOAL NOMOR 4</h1>";

$a = 301;

if ($a > 300 && $a< 302) {
    echo "Paket : Microsoft Office"."<br>";
    echo "Harga : Rp.350.000";
}
elseif ($a > 301 && $a < 303) {
  echo "Paket : Visual Basic"."<br>";
  echo "Harga : Rp.450.000";
}
elseif ($a > 302 && $a < 304) {
  echo "Paket : Microsoft Office"."<br>";
  echo "Harga : Rp.400.000";
}
else {
    echo "Pilih paket anda";
} -->
<?php

$paket = 302;

if($paket==301) {
    $namapkt = "Microsoft Office";
    $biaya = "Rp 350.000";
} else if($paket==302){
    $namapkt = "Visual Basic";
    $biaya = "Rp 450.000";
} else if($paket==303){
    $namapkt = "Visual Foxpro";
    $biaya = "Rp 400.000";
} else {
    $namapkt = "PILIH PAKET TERLEBIH DAHULU";
}

echo "Nomor paket :".$paket;
echo "<br>";
echo "nama paket :".$namapkt;
echo "<br>";
echo "biaya :".$biaya;
?>
