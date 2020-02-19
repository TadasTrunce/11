<?php


$curl = curl_init(); 

curl_setopt($curl,CURLOPT_URL,"https://picsum.photos/v2/list?limit=7");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
// curl_setopt($curl,CURLOPT_HEADER, false); 

$result=curl_exec($curl);

curl_close($curl);

$data= json_decode($result, 1);

// _dc($data);

foreach($data as $image) {
    echo '<img src="'.$image['download_url'].'" style="width:300px;">';
}