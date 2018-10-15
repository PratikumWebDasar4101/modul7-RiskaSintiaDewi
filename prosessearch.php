<?php  

session_start();
include 'db.php';

echo "Hasil Pencarian";
$perintah="SELECT * FROM form WHERE nama like '%$search%'";
$hasil=mysql_query($perintah);
$jumlah=mysql_num_rows($hasil);
if ($jumlah>0) {
	echo "Data yang ditemukan : $jumlah <br>";
	while ($data=mysql_fetch_row($hasil)) {
		echo "Nama : $nama";
		echo "Nim : $nim";
	}
}else{
	echo "Maaf, data yang dicari tidak ada";
}

?>