<?php
	$dir = '/home'; 
	function f($str) {
		$res = scandir ($str);
		for ($i=2; $i<count($res); $i++) {
			$path = $str . "/" . $res[$i];
			if (is_dir($path))
				f($path);
			else echo $res[$i] ."\n";
		}
	}
	f($dir);

