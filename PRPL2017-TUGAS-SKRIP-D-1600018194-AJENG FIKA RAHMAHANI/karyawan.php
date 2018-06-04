<?php
error_reporting(0);
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Karywan</title>
</head>
<body>
<h2>Data Karyawan Java Culture Hotel</h2>

<form action="" method="POST">
	<input type="text" name="query" placeholder="Cari Data" />
	<input type="submit" name="cari" value="Search" />
</form><br>

<table border="1" cellspacing="0">
	<tr style="font-weight: bold;">
		<td>No</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Alamat</td>
		<td>Jabatan</td>
	</tr>
<?php
$no = 1;
$query = $POST['query'];

echo "<a href='index.html'>Kembali ke Menu</a>";
if ($query != '') {
	$select = mysqli_query($konek, "SELECT * FROM data_karyawan WHERE no LIKE '$query' ");
}else{
	$select = mysqli_query($konek, "SELECT * FROM data_karyawan");	
}

while ($baris = mysqli_fetch_array($select)) {
	?>
<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $baris['nama_karyawan'] ?></td>
		<td><?php echo $baris['jk'] ?></td>
		<td><?php echo $baris['alamat_karyawan'] ?></td>
		<td><?php echo $baris['jabatan'] ?></td>
	</tr>

<?php } ?>
	
	</table> 
	</body>
</html>