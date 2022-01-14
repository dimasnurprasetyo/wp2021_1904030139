<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UTS DIMAS 5A</title>
  </head>
  <body>

<h1>SOAL NOMOR 1</h1> <hr> <br>
    1)	Perbedaan array dan variabel <br>
    Array merupakan kumpulan data tunggal dalam satu variabel <br>
    Variabel merupakan penampungan data yang nilainya selalu berubah,karena itu disebut dengan tempat penyimpanan sementara
<table border="1">
  <tr>
    <td>ARRAY</td>
    <td>VARIABEL</td>
  </tr>
  <tr>
    <td>Dapat mempunyai sebuah nilai</td>
    <td>Hanya dihubungkan dengan nilai</td>
  </tr>
  <tr>
    <td>Terdapat 3 data,Maka hanya cukup memanggil dengan 1 variabel x[3]</td>
    <td>Terdapat 3 data,maka memanggil menggunakan nama variabelnya x[1],x[2],x[3]</td>
  </tr>
</table>

<?php

//SOAL NOMOR 2
//=========================================== MAP ARRAY ========================================================================
echo "<h1>SOAL NOMOR 2</h1><hr>";

echo "<h2>MAP ARRAY</h2>";
$bio = array("nama"=>"DIMAS NUR PRASETYO",
             "nim"=>"1904030139",
              "umur" =>"21",
             "jurusan"=>"TEKNIK INFORMATIKA",
             "matakuliah"=>"WEB PROGRAMMING",
             "hobi"=>"SEPAK BOLA",
            	"alamat" =>"GRIYA KARAWACI",
            );
var_dump($bio);
echo "<h3>BIODATA MAHASISWA</h3>";
echo "<p>nama : ".$bio["nama"]."<br>";
echo "<p>nim : ".$bio["nim"]."<br>";
echo "<p>umur : ".$bio["umur"]."<br>";
echo "<p>jurusan : ".$bio["jurusan"]."<br>";
echo "<p>mata kuliah: ".$bio["matakuliah"]."<br>"; // MATA KULIAH KIRI UNTUK TITLE DAN MATA KULIAH KANAN DIAMBIL DARI VARIABEL DIATAS
echo "<p>hobi : ".$bio["hobi"]."<br>";
echo "<p>alamat : ".$bio["alamat"]."<br>";
echo "<br>"."<hr>";
// =====================================MULTIDIMENSI ====================================================================================
//SOAL NOMOR 3
echo "<h1>SOAL NOMOR 3</h1><hr>";

echo("<h1> Multidimensi</h1>");                                      //multidimensi array dalam array
echo("<br>");
$kendaraan =["Nama" => "motor",
		         "Jenis" =>
                    ["honda"=>"scoopy",
					           "yamaha"=>"Nmax"],
		];
var_dump($kendaraan);
echo "<br>"."<hr>";
//==============================Else IF PAKET=========================================
//SOAL NOMOR 4
echo "<h1>SOAL NOMOR 4</h1><hr>";


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

echo "Paket Kursus :".$paket." <br>";
echo "Nama Paket :".$namapkt." <br>";
echo "biaya :".$biaya;
?>
</body>
</html>
