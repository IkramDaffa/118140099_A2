<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Perhitungan Harga Bet</h1>
	<form action="" method="POST">
		<label>Masukkan Nama : </label>
		<input type="text" name="nama" required=""><br>
		<label>Masukkan Warna Font : </label>
		<select name="warna">
			<option value="red" hidden="">Pilih Warna</option>
			<option value="red">Merah</option>
			<option value="blue">Biru</option>
			<option value="yellow">Kuning</option>
			<option value="green">Hijau</option>
		</select><br>
		<input type="submit" name="hasil" value="Submit"><br><br>
	</form>
	<?php
		if (isset($_POST['hasil'])) {
			function cost($a, $b){
				$jumlahuruf=strlen($a)-substr_count($a, ' ');
				$cost=0;
				if ($jumlahuruf>0&&$jumlahuruf<=10) {
					$cost=$jumlahuruf*300;
				}
				else if ($jumlahuruf>10&&$jumlahuruf<=20) {
					$cost=$jumlahuruf*500;
				}
				else if ($jumlahuruf>20){
					$cost=$jumlahuruf*700;
				}
				echo '<font color="'.$b.'">'."Harga total = ".$cost."<br>";
				echo "Jumlah Karakter = ".$jumlahuruf;
			}

			function color($a, $b){
				switch ($b) {
					case "red":
						echo '<font color="'.$b.'">'.$a.'</font><br>';
						break;
					case "yellow":
						echo '<font color="'.$b.'">'.$a.'</font><br>';
						break;
					case "green":
						echo '<font color="'.$b.'">'.$a.'</font><br>';
						break;
					case "blue":
						echo '<font color="'.$b.'">'.$a.'</font><br>';
						break;
					default:
						echo '<font color="'.$b.'">'.$a.'</font><br>';
						break;
				}
			}

			color($_POST['nama'], $_POST['warna']);
			cost($_POST['nama'], $_POST['warna']);
		}
	?>
</body>
</html>