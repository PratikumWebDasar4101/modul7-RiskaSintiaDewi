<?php  

session_start();
include 'db.php';

if (isset($_POST['kirim'])) {

$nama=$_POST['nama'];
$_SESSION['nama']=$nama;

$nim=$_POST['nim'];
$_SESSION['nim']=$nim;

$jenis_kelamin=$_POST['jenis_kelamin'];
$_SESSION['jenis_kelamin']=$jenis_kelamin;

$jurusan=$_POST['jurusan'];
$_SESSION['jurusan']=$jurusan;

$fakultas=$_POST['fakultas'];
$_SESSION['fakultas']=$fakultas;

$asal=$_POST['asal'];
$_SESSION['asal']=$asal;

$moto_hidup=$_POST['moto_hidup'];
$_SESSION['moto_hidup']=$moto_hidup;

}

$sql = "INSERT INTO form (nama, nim, jenis_kelamin, jurusan, fakultas, asal, moto_hidup)
VALUES ('$nama','$nim','$jenis_kelamin','$jurusan','$fakultas','$asal','$moto_hidup')";

echo $sql;

if (mysqli_query($conn, $sql)){
	header("Location:lihatdata.php");
	}else{
		echo "Error, :".$sql."<br>".mysqli_error($conn);
	}

mysqli_close($conn);

?>