<?php
function curl($url, $post = 0){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if($post){
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    $exec = curl_exec($ch);
    return $exec;
}

echo "Gopay Sender BOT - Created by bzsap\n\n";
echo "Use (62) for Indonesia Number, Use (1) for US Number\n\n"
echo 'Enter Phone Number : '; $no_phone = trim(fgets(STDIN)); // HEMAT LINE

$post = curl("http://156.67.214.4/gopay/index.php", "phone=".$no_phone."&submit=");
if(preg_match('/selamat makan!/i', $post)){
    echo "[+] Sukses kirim gopay, selamat makan!\n";
}else{
    echo "[+] Gagal kirim mampus lo\n";
}
