<!DOCTYPE html>
<html lang="en">
<head>
	<h1>Menghitung Bilangan prima</h1>
</head>
<body>
	<?php
		$jumlah=0;
		$bilprim=0;
		for($i=1;$i<=50;$i++){
			for($j=1;$j<=$i;$j++){
				if($i%$j==0){
					$jumlah++;
				}
			}
			if($jumlah==2){
				$bilprim++;
			}
			$jumlah=0;
		}
		
		echo "jumlah bilangan prima antara sati dan 50 adalah ".$bilprim;
	?>
</body>
</html>