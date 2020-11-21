<!DOCTYPE html>
<html>
<head>
	<title> Cari Data Mahasiswa</title>
</head>
<body>
	<?php
		$koneksi=mysqli_connect("localhost","root","");
		mysqli_select_db($koneksi, "data_mahasiswa");
		$search=$_POST['cari'];
		$a=mysqli_query($koneksi, "select mahasiswa.NRP,mahasiswa.Nama,mahasiswa.Alamat,jurusan.Nama from mahasiswa,jurusan WHERE mahasiswa.ID_Jur = jurusan.ID_Jur AND NRP like '%$search%'");
		$banyak=mysqli_num_rows($a);
		echo "<br>";
		echo "$banyak data ditemukan"."<br>";
		while($i=mysqli_fetch_array($a)){
			echo "=============================="."<br>";
			echo "NRP : ".$i[0]."<br>";
			echo "Nama : ".$i[1]."<br>";
			echo "Alamat : ".$i[2]."<br>";
			echo "Nama Jurusan : ".$i[3]."<br>";
		}
		mysqli_close($koneksi);
	?>
	<form action="delete.php" method="POST">
		==============================<br>
		<p>Apakah ingin menghapus data?</p><br>
		<label>Masukkan NRP data yang ingin dihapus:</label><br>
		<input type="text" name="hapus">
		<input type="submit" value="delete" name="delete"><br>
	</form>
</body>
</html>