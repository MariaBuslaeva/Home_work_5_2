<?php
	$first_date = strtotime("2019-06-10");
	$second_date = strtotime("2019-06-13");
	$date = $second_date - $first_date; 
	echo floor($date / (60 * 60 * 24));
