<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "kampuskita";

$conn   = mysqli_connect($host,$user,$pass,$db);
$result = mysqli_query($conn, "SELECT * FROM calon_mhs");

// MENGAMBIL DATA DARI TABEL CALON_MHS
//mysqli_fetch_row(); Mengembalikan data dalam bentuk numerik
//mysqli_fetch_assoc(); Mengembalikan data dalam bentuk nama field
//mysqli_fetch_array(); Mengembalikan data dalam bentuk numerik dan nama field

// while ($camaba = mysqli_fetch_row($result)) {
// var_dump($camaba);
// }
