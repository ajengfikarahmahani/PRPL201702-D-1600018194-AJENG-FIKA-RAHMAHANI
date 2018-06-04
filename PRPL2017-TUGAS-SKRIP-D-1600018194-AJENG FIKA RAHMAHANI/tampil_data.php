<html>
<head>
  <style>
    body{
     font-family: 'Courier New';
     background-color: white;
    }
    table{
      border-radius: 5px;
      border: #ccc 1px solid;
      background-color: pink;

    }
    table td {
    padding: 10px 10px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
    a{

      text-decoration: none;
    }
  </style>
</head>
<body>
<center>

<h1>Daftar Customer</h1>

<h4>Pencarian</h4>
<form action="" method="POST">
<input type="date" name="check_in">
<input type="date" name="check_out">
<input type="submit" id="submit2" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<table>
<?php
// membuat koneksi
error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelA";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

  $sql = "SELECT * FROM customer where nama like '%$qcari' ";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  customer where check_in like '%$qcari' or check_out like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['check_in'];
  $qcari2=$_POST['check_out'];
  $sql="SELECT * FROM  customer where check_in between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM customer ";
}
$data = $konek->query($sql);

echo "<a href='index.html'>Kembali ke Menu</a>";
echo "<b><tr><tr><td>No.</td><td>Nama</td><td>Alamat</td><td>Email</td><td>Jenis Kelamin</td><td>No HP</td><td>Tanggal Check in</td><td>Tanggal Check out</td><td>Tipe Kamar</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td><p>".$no++."</td>";
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
//echo "</table>";

$konek->close();
?>
</table></center>
<button onclick="myFunction()">Cetak</button>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>