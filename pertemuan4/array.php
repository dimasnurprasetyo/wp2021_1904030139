<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PERTEMUAN 4</title>
  </head>
  <body>

    <h2>HASIL DARI PENGGUNAAN ARRAY DAN JUGA CARA MENAMPILKAN</h2>
    <br>
    <?php
    $bio = array("NAMA"=>"DIMAS NUR PRASETYO",
                 "NIM"=>"1904030139",
                 "JURUSAN"=>"TEKNIK INFORMATIKA",
                 "MATAKULIAH"=>"WEB PROGRAMMING",
                 "HOBI"=>"SEPAK BOLA");
    echo "<h2>BIODATA</h2>";
    echo "<p>NAMA:".$bio["NAMA"]."<br>";
    echo "<p>NIM:".$bio["NIM"]."<br>";
    echo "<p>JURUSAN:".$bio["JURUSAN"]."<br>";
    echo "<p>MATA KULIAH:".$bio["MATAKULIAH"]."<br>";
    echo "<p>HOBI:".$bio["HOBI"]."<br><hr>";


    echo "<br>";
    echo "<h2>MEMBUAT DATA DENGAN VAR_DUMP DAN PRINT_R</h2>";
    // PENGGUNAAN UNTUK MENAMPILKAN ARRAY DENGAN VAR_DUMP DAN PRINT_R
      $minuman = array("fanta","sprite","coca-cola","pepsi"); //saya menggunakan di bawah php 4
    var_dump ($minuman);
    echo "<br><hr>";
    print_r ($minuman);                                               //MENGGUNAKAN VAR_DUMP DAN PRINT_R
    echo "<hr>";
    // MEMBUAT ARRAY NIM TAMPILAKN DENGAN CARA PERULANGAN

    echo "<h2>MENAMPILKAN DENGA PENGULANGAN</h2>";
    $nim= array("Asep Budi",
                 "Arief Binjay",
                 "Bagas Slebew",
                 "Chandra Hendra",
                 "Deki Buluk",
                 "Eki Speed",
                 "Fahrul Gastrus");
    for ($i=0; $i < count($nim) ; $i++) {                //MENGGUNAKAN PERULANGAN FOR
        echo $nim[$i]."<br>";
    }
    // MENAMPILKAN DAN MEMBUAT ARRAY MENGGUNAKAN FOREACH
    echo "<hr>";
    echo "<h2>MENAMPILKAN DATA DENGAN FOREACH</h2>";
      $books = array("INDAH JOGJAKU",
                   "HABIS GELAP TERBITLAH TERANG",
                   "HARIAN SEORANG ISTRI",
                   "FILOSOFI TERAS");
      foreach ($books as $book) {                         //menggunakan FOREACH
        echo $book."<br>";
      }
    //MENGGANTI,MENAMBAHKAN DAN MENAMPILKAN ARRAY
    echo "<hr>";
    echo "<h2>MEMBUAT,MENGUBAH,MENAMPILKAN DATA </h2>";
    $hobi=array("Membantu","Mengaji","Melihat");  //MEMBUAT

    $hobi[2] = "Membersihkan";                   //MENAMBAHKAN
    $hobi[3] = "Coding";                     //MENAMBAHKAN
    $hobi[] ="Olahraga";                    //MENAMBAHKAN


    foreach($hobi as $hobiku){          //MENAMPILKAN
    echo $hobiku."<br>";
    }
    echo "<hr>";
    //MEMBUAT DATA DIRI MAHASISWA
    echo "<h2>DATA DIRI MAHASISWA UNIS</h2>";

    $bio = array("NAMA" => "DIMAS NUR PRASETYO",
                 "NIM"=>"1904030139",
                 "JURUSAN"=>"TEKNIK INFORMATIKA",
                 "MATAKULIAH"=>"WEB PROGRAMMING",
                 "HOBI"=>"SEPAK BOLA");
    echo "<h3>BIODATA MAHASISWA</h3>";
    echo "<p>NAMA : ".$bio["NAMA"]."<br>";
    echo "<p>NIM : ".$bio["NIM"]."<br>";
    echo "<p>JURUSAN : ".$bio["JURUSAN"]."<br>";
    echo "<p>MATA KULIAH : ".$bio["MATAKULIAH"]."<br>"; // MATA KULIAH KIRI UNTUK TITLE DAN MATA KULIAH KANAN DIAMBIL DARI VARIABEL DIATAS
    echo "<p>HOBI : ".$bio["HOBI"]."<br>";

    echo "<h2>ARRAY DALAM ARRAY</h2>";
    $bio = array("NAMA"=>"DIMAS NUR PRASETYO",
                 "NIM"=>"1904030139",
                 "JURUSAN"=>"TEKNIK INFORMATIKA",
                 "MATAKULIAH"=>"WEB PROGRAMMING",
                 "HOBI"=>"SEPAK BOLA",
                 "ALAMAT"=>                                   //SEBAGAI ARRAY KE 2
                            ["KECAMATAN"=>"CURUG",
                             "PROVINSI"=>"BANTEN"]);
    var_dump($bio);
    
    echo "<br><hr>";
    echo "<h2>OPERATOR MATEMATIKA</h2>";                         //OPERATOR MATEMATIKA
    $tambah = 10 + 10;
    $kurang = 100 - 10;
    $kali = 10 * 10;
    $bagi = 100 / 20;
    $modular = 100 % 3;
    $pangkat = 4 ** 3;

    echo "tambah : " . $tambah . "<br>";
    echo "kurang : " . $kurang . "<br>";
    echo "kali : " . $kali . "<br>";
    echo "bagi : " . $bagi . "<br>";
    echo "modular : " . $modular . "<br>";
    echo "pangkat : " . $pangkat . "<br>";

    echo "<br><hr>";
    echo "<h2>INCREMENT</h2>";                              //increment

    $a = 10;
    $a++;
    $a++;
    $a--;
    echo $a;


    ?>


  </body>
</html>
