<!DOCTYPE html>
<html>
<head>
	<title>Data Terhapus!</title>
</head>
<body>
	<?php
		
		$koneksi=mysqli_connect("localhost","root","");
		mysqli_select_db($koneksi, "data_mahasiswa");
		$delete=$_POST['hapus'];
		$hasil=mysqli_query($koneksi, "select mahasiswa.NRP,mahasiswa.Nama,mahasiswa.Alamat,jurusan.Nama from mahasiswa,jurusan WHERE mahasiswa.ID_Jur = jurusan.ID_Jur AND NRP like '%$delete%'");
		$banyak=mysqli_num_rows($hasil);
		echo "<br>";
		echo "$banyak Data Terhapus";
		echo "<br>";

		while($i=mysqli_fetch_array($hasil)){
			echo "=============================="."<br>";
			echo "NRP : ".$i[0]."<br>";
			echo "Nama : ".$i[1]."<br>";
			echo "Alamat : ".$i[2]."<br>";
			echo "Nama Jurusan : ".$i[3]."<br>";
		}

		$sql="delete from mahasiswa WHERE NRP like '%$delete%'";
		if (mysqli_query($koneksi, $sql)) {
			echo "=============================="."<br>";
			echo "Data diatas berhasil terhapus";
		} else {
			echo "=============================="."<br>";
			echo "data gagal dihapus";
		}
		mysqli_close($koneksi);
	?>
</body>
</html>