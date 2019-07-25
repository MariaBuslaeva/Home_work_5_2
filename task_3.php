<?php
	$html=file_get_contents("index.html");
	$matches = [];
	preg_match_all("/<a\s.*href=\"(.+)\".*>/", $html, $matches);
	$urls=$matches[1];
	for ($i=0; $i<count($urls); $i++) {
		echo $urls[$i] ."\n";
	}