<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data Mahasiswa</title>
</head>
<body>
	<?php
		$koneksi=mysqli_connect("localhost","root","") or die ("Koneksi Gagal");
		mysqli_select_db($koneksi, "data_mahasiswa");
		$nrp = $_POST['nrp'];
		$nama = $_POST['nama'];
		$almt = $_POST['alamat'];
		$jurusan = $_POST['id_jur'];
		echo "NRP : $nrp <br>";
		echo "Nama : $nama <br>";
		echo "Alamat : $almt <br>";
		echo "ID Jurusan : $jurusan <br>";
		$masukkan="insert into mahasiswa (NRP,Nama,Alamat,ID_Jur) values ('$nrp','$nama','$almt','$jurusan')";
		$a=mysqli_query($koneksi, $masukkan);
		if($a){
			echo "=============================="."<br>";
			echo "Data di atas berhasil disimpan";
		}else{
			echo "=============================="."<br>";
			echo "Data gagal ditambahkan silahkan cek kembali data anda";
		}
		

		mysqli_close($koneksi);
	?>
</body>
</html>