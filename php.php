<?php	
	$url = "https://formstrap.com/IconSearchAPI/v1/search";
	$searchstring="\"vector pen\"";
	$data = array('search' => $searchstring);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_POST, true); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); 
	$response = curl_exec($ch);
	if ($response === false) 
	{
		echo "cURL Error: " . curl_error($ch);
	}
	curl_close($ch);
	$response_data = json_decode($response, true);
	if($response_data["responseCode"]==200)
	{
		// PROCESS THE RESPONSE
	}
	else
	{
		// THERE WAS AN ERROR
		error_log($response_data["responseCode"] .  " : " . $response_data["responseVerbose"]);
	}
?>