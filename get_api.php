<?php
  
include "koneksi.php";

$sql = "SELECT * FROM datamahasiswa";
$query = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($query)){
	
	$item[] = array (
		'id_mahasiswa'=>$data["id"],
		'nama_mahasiswa'=>$data["nama"],
		'umur_mahasiswa'=>$data["umur"],
		'nim_mahasiswa'=>$data["nim"],
		'alamat_mahasiswa'=>$data["alamat"],
	);
  }
  
  $response = array (
		'Data Mahasiswa' => $item	
  );
  
  echo json_encode($response);

?>