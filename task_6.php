<?php
	$arr=[1,2,3,4,5,6,6,7,8]; 
	$repeat=false;
	for ($i=0; $i<count($arr)-1; $i++) {
		if ($arr[$i]==$arr[$i+1]) {
			$repeat=true;
			break;
		}
	}
	if ($repeat) echo "Да";
	else echo "Нет";
