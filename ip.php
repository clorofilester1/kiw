<?php
print grab("https://api.ipify.org?format=json");
function grab($url, $par=null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if(isset($par)){
		curl_setopt($ch, CURLOPT_POSTFIELDS, $par);
	}
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$html = curl_exec($ch);
	return $html;
	curl_close($ch);
}
