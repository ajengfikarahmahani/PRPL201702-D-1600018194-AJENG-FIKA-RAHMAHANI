<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "HotelA";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}


$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$email = $_POST ['email'];
$jeniskelamin = $_POST ['jeniskelamin'];
$nohp = $_POST ['nohp'];
$check_in = $_POST ['check_in'];
$check_out = $_POST ['check_out'];
$room = $_POST ['room'];

$sql = "INSERT INTO customer(nama, alamat, email, jeniskelamin, nohp, check_in, check_out, room) VALUES ('$nama','$alamat','$email','$jeniskelamin','$nohp','$check_in','$check_out','$room')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
	echo "<a href = 'tampil_customer.php'>Lihat Data Customer <a/>";
?>