<?php
	$arr=[];
	for ($i=0; $i<3; $i++) {
		$arr[$i]=rand (4, 6);
	}
	function func($arr) {
		for ($i=0; $i<3; $i++) {
			if ($arr[$i]==5)
				return true;
		}
		return false;
	}
	if (func($arr)) echo "Да";
	else echo "Нет";
	echo print_r($arr);