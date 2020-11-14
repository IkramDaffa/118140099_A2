<!DOCTYPE html>
<html lang="en">
<head>
	<h1>Calculator</h1>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<label>angka 1:<br></label>
		<input type="text" name="a1" required=""><br>
		<label>angka 2:<br></label>
		<input type="text" name="a2" required=""><br>
		<label>Jenis Kelamin:<br></label>
		<select name="operasi" required="">
			<option value="" hidden="">Pilih Jenis operasi</option>
			<option value="penjumlahan">Penjumlahan(+)</option>
			<option value="pengurangan">pengurangan(-)</option>
			<option value="perkalian">Perkalian(*)</option>
			<option value="pembagian">pembagian(/)</option>
			<option value="modulus">modulus(%)</option>
		<input type="submit" value="simpan" name="proses">
	</form>
	<?php
		if(isset($_POST['proses'])){
			switch ($_POST['operasi']) {
			case 'penjumlahan':
				echo "Operasi : ".$_POST['operasi']."<br>";
				$hasil = $_POST['a1'] + $_POST['a2'];
				echo "Hasil = ".$hasil;
				break;
			case 'pengurangan':
				echo "Operasi : ".$_POST['operasi']."<br>";
				$hasil = $_POST['a1'] - $_POST['a2'];
				echo "Hasil = ".$hasil;
				break;
			case 'perkalian':
				echo "Operasi : ".$_POST['operasi']."<br>";
				$hasil = $_POST['a1'] * $_POST['a2'];
				echo "Hasil = ".$hasil;
				break;
			case 'pembagian':
				echo "Operasi : ".$_POST['operasi']."<br>";
				$hasil = $_POST['a1'] / $_POST['a2'];
				echo "Hasil = ".$hasil;
				break;
			case 'modulus':
				echo "Operasi : ".$_POST['operasi']."<br>";
				$hasil = $_POST['a1'] % $_POST['a2'];
				echo "Hasil = ".$hasil;
				break;
			
			default:
				
				break;
		}
			
		}
	?>
</body>
</html>
