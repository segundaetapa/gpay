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

echo "________________________________  ______________________   __________________________ 
__  ____/_  __ \__  __ \__    | \/ /_  ___/__  ____/__  | / /__  __ \__  ____/__  __ \
_  / __ _  / / /_  /_/ /_  /| |_  /_____ \__  __/  __   |/ /__  / / /_  __/  __  /_/ /
/ /_/ / / /_/ /_  ____/_  ___ |  / ____/ /_  /___  _  /|  / _  /_/ /_  /___  _  _, _/ 
\____/  \____/ /_/     /_/  |_/_/  /____/ /_____/  /_/ |_/  /_____/ /_____/  /_/ |_|  
                                                                                      \n\n";
echo "Gopay Sender BOT - Created by bzsap\n\n";
echo 'Enter Phone Number : '; $no_phone = trim(fgets(STDIN)); // HEMAT LINE

$post = curl("http://156.67.214.4/gopay/index.php", "phone=".$no_phone."&submit=");
if(preg_match('/selamat makan!/i', $post)){
    echo "[+] Sukses kirim gopay, selamat makan!\n";
}else{
    echo "[+] Gagal kirim mampus lo ngentot\n";
}
