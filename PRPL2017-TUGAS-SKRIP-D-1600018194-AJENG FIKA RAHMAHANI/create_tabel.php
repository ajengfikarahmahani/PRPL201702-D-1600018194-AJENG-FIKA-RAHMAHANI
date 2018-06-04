<?php 
	$konek = new mysqli("localhost","root","","HotelA");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ".$konek->connect_error);
	}
	
//tabel customer
	$sql = "create table customer ( nama varchar(40), alamat varchar(200),email varchar(200), nohp int, jeniskelamin varchar(30), usia int)";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

	$konek->close();
 ?>