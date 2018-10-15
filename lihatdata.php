<?php  

session_start();
include 'db.php';

?>
<html>
<head>
		<table border="1">
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Jenis Kelamin</th>
				<th>Jurusan</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Moto Hidup</th>
				<th>Action</th>
			</tr>
</head>
<body>
<?php

$sql = "SELECT * FROM form";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim=$row['nim'];
		echo "<tr>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['nim']."</td>";
		echo "<td>".$row['jenis_kelamin']."</td>";
		echo "<td>".$row['jurusan']."</td>";
		echo "<td>".$row['fakultas']."</td>";
		echo "<td>".$row['asal']."</td>";
		echo "<td>".$row['moto_hidup']."</td>";	

		echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a>"."</td>";			

		echo "</tr>";
	}
}else{
	echo "0 result";
}
mysqli_close($conn);

?>
<a href="formmahasiswabaru.php">Tambah Data </a>&nbsp;&nbsp;
	<a href="search.php">Search Data</a>
</body>
</table>
</html>