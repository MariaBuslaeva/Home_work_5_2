<?php
	$n=$argv[1]; 
	if ($n%4==0 || ($n%4==0 && $n%100==0 && $n%400==0))
		echo "Введенный год високосный";
	else
		echo "Введенный год невисокосный";