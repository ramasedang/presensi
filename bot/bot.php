<?php

function fetch_value($str,$find_start,$find_end) {
    $start = @strpos($str,$find_start);
    if ($start === false) {
    return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
    }

include "data.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://my.its.ac.id/signin");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua= array(
"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36",
"cookie: TVMSESSID=hu4ftee0jalo16k4fq770ok6lq7ernpuqseq0hic3qph3s8ssiasc5cob352hvrj");
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data ="client_id=2662AFAD-1E98-409A-9B9F-29E73931C456&response_type=code&scope=openid+integra+profile+email+phone+group+role+resource&state=e1bfa168e7526238acada5b1066353bd&prompt=&redirect_uri=https%3A%2F%2Fpresensi.its.ac.id%2Fauth&nonce=22bacf2665f42a96e3a462b94135adbe&content=W68t5UtPPtUhl25dvfVBxQBFEaFvHSQxPD9%2BcwrmJ0SEM3VUwMGKV1K07yOSz1JULDLhy2qIM8aD51j8mD8VXZq5PdOzw3MsabrjiP2XWie4obydFoHGFoYBF%2FH7kf6EQZTZE0PSjiqjCF5dmdekDY4u4OrzxcmqunPjc6qVsGU%3D&password_state=true&device_method=";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);

// echo $result;
   


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://presensi.its.ac.id/healthcheck/daily/mhssave");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua3 = array(
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36",
    "cookie: PHPSESSID=t1q5s9gpjltkekdbuvu8ifdim5"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua3);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data3 = "is-confirmed=0&result1=1&result2=1";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result3 = curl_exec($ch);

// echo $result3;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://presensi.its.ac.id/tatap-muka/20212:53100:IT184201:A");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua3);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result6 = curl_exec($ch);

echo $result6;

echo "\n 1. matematika \n
2. PATP \n
Pilih : ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) == '1'){
    include "mat.php";
}
elseif(trim($line) == '2'){
    include "patp.php";
}


$json = json_decode($result2);
$respon = $json->status;
echo $respon;
?>