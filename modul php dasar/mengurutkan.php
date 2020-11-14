<!DOCTYPE html>
<html lang="en">
<?php
	$kata = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
	$temp=0;
	$n=count($kata);

	echo "kata yang belum terurut :";
	for($x=0;$x<$n;$x++){  
        echo $kata[$x];  
        if($x!=$n-1){
        	echo ", ";
        }
        else{
        	echo ".";
        }  
    }

	for($i=1;$i<$n;$i++){
		for($j=0;$j<$n-$i;$j++){
			if($kata[$j]>$kata[$j+1]){
				$temp=$kata[$j];
				$kata[$j]=$kata[$j+1];
				$kata[$j+1]=$temp;
			}

		}
	}

	echo "<br>"."kata yang telah terurut : ";
	for($x=0;$x<$n;$x++){  
        echo $kata[$x];  
        if($x!=$n-1){
        	echo ", ";
        }
        else{
        	echo ".";
        }  
    }  	
?>
</html>