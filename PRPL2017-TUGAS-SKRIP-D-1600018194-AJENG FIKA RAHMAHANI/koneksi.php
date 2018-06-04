<?php 
	

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ".$konek->connect_error);
	}


//tabel karyawan
		//$sql = "create table karyawan ( no int, nama_karyawan varchar(20), jk enum('pria', 'wanita'), alamat_karyawan varchar(50), jabatan varchar(20))";
	//if($konek->query($sql)){
//		echo "Tabel Berhasil di Buat";
//	}
//	else{
//		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
//	}
//	$konek->close();
 ?>