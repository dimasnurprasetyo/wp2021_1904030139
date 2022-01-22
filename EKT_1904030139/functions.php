<?php
$conn = mysqli_connect('localhost', 'root', '', 'kampuskita');
//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //mengambil elemen data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  global $conn;
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto_maba = htmlspecialchars($data['foto_maba']);

  $query = "INSERT INTO calon_mhs VALUES (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM calon_mhs WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto_maba = htmlspecialchars($data['foto_maba']);

  $query = "UPDATE calon_mhs SET nama='$nama',alamat='$alamat',jenis_kelamin= '$jenis_kelamin',agama= '$agama',sekolah_asal='$sekolah_asal',foto_maba='$foto_maba' WHERE id= $id; ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;
  $query = "SELECT * FROM calon_mhs WHERE nama LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// =====================================================================================
// QUERY DOSEN
// function queryd($query)
// {
//   global $conn;

//   //mengambil seluruh data pada tabel
//   $resultd = mysqli_query($conn, $query);

//   if (mysqli_num_rows($resultd) == 1) {
//     return mysqli_fetch_assoc($resultd);
//   }

//   //mengambil elemen data
//   $rows = [];
//   while ($row = mysqli_fetch_assoc($resultd)) {
//     $rows[] = $row;
//   }
//   return $rows;
// }
function tambah_dosen($data)
{
  global $conn;
  $nidn = htmlspecialchars($data['nidn']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $agama = htmlspecialchars($data['agama']);
  $pend1 = htmlspecialchars($data['pend1']);
  $pend2 = htmlspecialchars($data['pend2']);
  $pend3 = htmlspecialchars($data['pend3']);
  $foto_dosen = htmlspecialchars($data['foto_dosen']);

  $query = "INSERT INTO dosen_unis VALUES (null,'$nidn','$nama','$email','$jenis_kelamin','$alamat','$agama','$pend1','$pend2','$pend3','$foto_dosen');";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus_dosen($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM dosen_unis WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit_dosen($data)
{
  global $conn;
  $id = $data['id'];
  $nidn = htmlspecialchars($data['nidn']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $agama = htmlspecialchars($data['agama']);
  $pend1 = htmlspecialchars($data['pend1']);
  $pend2 = htmlspecialchars($data['pend2']);
  $pend3 = htmlspecialchars($data['pend3']);
  $foto_dosen = htmlspecialchars($data['foto_dosen']);
  $query = "UPDATE dosen_unis SET nidn='$nidn',nama='$nama',email='$email',jenis_kelamin= '$jenis_kelamin',alamat='$alamat',agama= '$agama',pend1='$pend1',pend2='$pend2',pend3='$pend3',foto_dosen='$foto_dosen' WHERE id= $id; ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari_dosen($keyword)
{
  global $conn;
  $query = "SELECT * FROM dosen_unis WHERE nama LIKE '%$keyword%'";
  $resultd = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($resultd)) {
    $rows[] = $row;
  }
  return $rows;
}
