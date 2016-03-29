<?php 
	if ($_POST) {
		$keys = array();
		foreach ($_POST as $key => $value) {
			if ($key == "cardNumber") {
				$keys['pan'] = $value;
			}
		}
		$postdata = http_build_query($keys);
		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);
		$context = stream_context_create($opts);
		$result = file_get_contents('http://onay.kz/balance.json', false, $context);
		echo $result;	
	}
	else if ($_GET) {
		$keys = array();
		foreach ($_GET as $key => $value) {
			if ($key == "cardNumber") {
				$keys['pan'] = $value;
			}
		}
		$postdata = http_build_query($keys);
		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);
		$context = stream_context_create($opts);
		$result = file_get_contents('http://onay.kz/balance.json', false, $context);
		echo $result;
	}
?>