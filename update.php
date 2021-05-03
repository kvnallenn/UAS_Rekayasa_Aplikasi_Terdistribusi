<?php

	include "koneksi.php";
	$ID = $_GET['id'];
	
	$nama_mahasiswa = $_POST["nama"];
	$umur_mahasiswa = $_POST["umur"];
	$nim_mahasiswa = $_POST["nim"];
	$alamat_mahasiswa = $_POST["alamat"];
	
	$query = "UPDATE `datamahasiswa` SET `nama` = '".$nama_mahasiswa."', `umur` = '".$umur_mahasiswa."', `nim` = '".$nim_mahasiswa."', `alamat` = '".$alamat_mahasiswa."' WHERE `datamahasiswa`.`id` = ".$ID.";";
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Data Mahasiswa Berhasil Diganti";

	}else{
	$msg = "Data Mahasiswa Gagal Diganti";
	}

  $response = array (
		'Status Data Mahasiswa' => $msg
  );
  
  echo json_encode($response);
?>