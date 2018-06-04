<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>
  
<h1 style="text-align: center;">Data Booking</h1>
<table border="1" width="100%">
<tr>
  <th>Nama</th>
  <th>Alamat</th>
  <th>Email</th>
  <th>Jenis Kelamin</th>
  <th>Nomor HP</th>
  <th>Tanggal Check In</th>
  <th>Tanggal Check Out</th>
  <th>Tipe Kamar</th>
</tr>



<?php
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "HotelA";

$konek = new mysqli($host, $username, $password, $idb_name);
// Load file koneksi.php
include "create_database.php";
 
$query = "SELECT * FROM customer"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['jeniskelamin']."</td>";
        echo "<td>".$data['nohp']."</td>";
        echo "<td>".$data['check_in']."</td>";
        echo "<td>".$data['check_out']."</td>";
        echo "<td>".$data['room']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.create_database.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Booking.pdf', 'D');
?>