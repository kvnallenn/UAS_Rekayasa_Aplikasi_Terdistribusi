<?php

	include_once('koneksi.php');
	$ID = $_GET['id'];
	$query = "DELETE FROM `datamahasiswa` WHERE `datamahasiswa`.`id` = ".$ID.";";
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Data Mahasiswa Terhapus";

	}else{
	$msg = "Data Mahasiswa Gagal Dihapus";
	}

  $response = array (
		'Status Data Mahasiswa' => $msg
  );
  
  echo json_encode($response);
?>