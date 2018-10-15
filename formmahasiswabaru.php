<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="simpan.php" method="POST">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin" value="Pria">Pria &nbsp;
					<input type="radio" name="jenis_kelamin" value="Wanita">Wanita <br></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="jurusan">
					<option value="MI">Manajemen Informatika</option>
					<option value="SisMul">Sistem Multimedia</option>
					<option value="DKV">DKV</option>
					<option value="Ikom">Ilmu Komunikasi</option>
					<option value="MBTI">MBTI</option>
					<option value="TK">Teknik Komputer</option>
					</select></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="moto_hidup"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="kirim" value="Kirim"></td>
			</tr>
		</form>
	</table>
</body>
</html>