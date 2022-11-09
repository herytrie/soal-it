<?php
function http_request($url){
    $header[] = 'Content-Type: application/json; charset=utf-8';
    $header[] = "Authorization: ";

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    
    $output = curl_exec($ch); 
    curl_close($ch);      

    return $output;
}
?>