<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "HotelA";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM customer";

$data = $konek->query($sql);

echo "<a href='index.html'>Kembali ke Home</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";

echo "<tr><td>No.</td><td>Nama</td><td>Alamat</td><td>Email</td><td>Jenis Kelamin</td><td>Nomor HP</td><td>Tanggal Check in</td><td>Tanggal Check Out</td><td>Tipe Kamar</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['jeniskelamin']."</td>";
    echo "<td>".$row['nohp']."</td>";
    echo "<td>".$row['check_in']."</td>";
    echo "<td>".$row['check_out']."</td>";
    echo "<td>".$row['room']."</td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>

<!DOCTYPE html>
<html>
<body>

<button onclick="myFunction()">Cetak</button>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>
