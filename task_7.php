<?php 
	$num=rand(0,99999);
	echo $num ."\n";
	while ($num>9) {
		$a=(string)$num;
		$num=0;
		for ($i=0; $i<strlen($a); $i++){
			$num+=$a[$i];
		}
	}
	echo $num;