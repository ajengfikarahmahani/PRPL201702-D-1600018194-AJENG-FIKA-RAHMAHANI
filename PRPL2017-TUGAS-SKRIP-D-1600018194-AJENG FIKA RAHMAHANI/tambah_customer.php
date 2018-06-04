<!DOCTYPE html>
<html>
	<head>
		<title>Hotel</title>
	</head>
<body>
	<a href="index.php">Kembali Ke Menu </a>
	<h1>Tambah Customer</h1>
	<form action="simpan_customer.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamat" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Email</td>
				<td> : </td>
				<td><textarea name="email" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td> : </td>
				<td><textarea name="jeniskelamin" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><textarea name="nohp" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td> : </td>
				<td><textarea name="usia" rows="8" cols="40"></textarea></td>
			</tr>

			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>