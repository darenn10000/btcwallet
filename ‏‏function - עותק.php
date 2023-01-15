<?php
//Set Database 
define('DB_SERVER_NAME','localhost'); //Change database server name
define('DB_USER','root'); // Change user
define('DB_PASSWORD','1234'); //Change the password
define('DB_NAME','btcwallet'); //Change the db name

$db = mysqli_connect(DB_SERVER_NAME,DB_USER,DB_PASSWORD,DB_NAME);

//This is create a wallet =======================================
function address()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'localhost:8080/address',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "amount":"0.0001",
            "toaddress": "2MtjjDMrCeMiC3T4fYboScSfDw6Ta8veGYk"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        $res = json_decode($response);
        $address= $res->address->data->addresses;
        $add = explode('"', $response);
        $ad = $add[19];
        curl_close($curl);
        return $ad;
}

function balance(){

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'localhost:8080/balance',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
        "amount":"0.0001",
        "toaddress": "2MtjjDMrCeMiC3T4fYboScSfDw6Ta8veGYk"
    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    $res = json_decode($response);
    $balance= $res->balance->data->available_balance;

    curl_close($curl);

    return $balance;

}

function send($address, $amount){
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

    $response = curl_exec($curl);
    $res ='success';
    curl_close($curl);
    return $res;
}
