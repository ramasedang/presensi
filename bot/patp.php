<?php




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://presensi.its.ac.id/kehadiran-mahasiswa/updatehadirmhs");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua2 = array(
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36",
    "cookie: PHPSESSID=t1q5s9gpjltkekdbuvu8ifdim5"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data2 ="kode_akses=100048&id_tm=368775&jns_hadir=H&id_kelas=20212%3A53100%3AIT184201%3AA&jns_hdr_tm=D&lat=-7.2938801&lon=112.8044741";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result2 = curl_exec($ch);

// echo $result2;