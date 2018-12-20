<?php
if (isset($_POST['submit'])) {
	$data = [
				'name'  =>$_POST['name'],
				'phone' =>$_POST['phone'],
				'email' =>$_POST['email']
			];
	$str = http_build_query($data);
	
	// cURL 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://localhost/curl/model.php");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	if ($output) {
		header('Location:index.php?msg='.$output);
	}
	curl_close($ch);
	//End Close 
}