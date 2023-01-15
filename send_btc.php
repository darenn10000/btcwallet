<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$address=$_POST['wallet'];
	$amount = $_POST['value'];

	$curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'localhost:8080/transaction',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "amount":"'.$amount.'",
        "toaddress": "'.$address.'"
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

	$success=false;
	$error='';
	
	if ($curl->error) {
		$curl->error_code;
		$error = "Error in connection...";
	}
	else {
		$res = $curl->response;
		$data = json_decode($res);
		if(is_object($data) && isset($data->data) && $data->message=='success')
			$success=true;
		else
			$error ="Error in response...";	
	}
	echo json_encode(array('success'=>$success,'error'=>$error));
}

?>
