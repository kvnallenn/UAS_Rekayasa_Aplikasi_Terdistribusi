<?php
  
include "koneksi.php";

$nama_mahasiswa = $_POST["nama"];
$umur_mahasiswa = $_POST["umur"];
$nim_mahasiswa = $_POST["nim"];
$alamat_mahasiswa = $_POST["alamat"];

$sql = "INSERT INTO `datamahasiswa` (`nama`, `umur`, `nim`, `alamat`) VALUES ('".$nama_mahasiswa."', '".$umur_mahasiswa."', '".$nim_mahasiswa."', '".$alamat_mahasiswa."');";


$query = mysqli_query($conn, $sql);
if ($query){
	$msg = "Penyimpanan data mahasiswa berhasil";

}else{
	$msg = "Penyimpanan data mahasiswa gagal";
}

  $response = array (
		'Data Mahasiswa' => $msg
  );
  
  echo json_encode($response);
?>