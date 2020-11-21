<!DOCTYPE html>
<html>
<head>
	<title>Mencari nilai faktorial</title>
</head>
<body>
	<h1>Mencari nilai Faktorial</h1>
	<form action="" method="POST">
		<label>Masukkan angka yang ingin dicari nilai faktorialnya : </label>
		<input type="number" name="angka"><br>
		<input type="submit" name="hasil" value="Submit"><br><br>
	</form>
	<?php
		if (isset($_POST['hasil'])) {
			function faktorial($a){
				if ($a==1) {
					return 1;
				} else{
					return $a*faktorial($a-1);
				}
			}
			echo "hasil faktorial dari angka ".$_POST['angka']." adalah ".faktorial($_POST['angka']);	
		}
	?>
</body>
</html>