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

echo "
                                      
_______ ____________________ _____  __
__  __ `/  __ \__  __ \  __ `/_  / / /
_  /_/ // /_/ /_  /_/ / /_/ /_  /_/ / 
_\__, / \____/_  .___/\__,_/ _\__, /  
/____/        /_/            /____/   
                   _________            
_________________________  /____________
__  ___/  _ \_  __ \  __  /_  _ \_  ___/
_(__  )/  __/  / / / /_/ / /  __/  /    
/____/ \___//_/ /_/\__,_/  \___//_/     
                                        \n\n";
echo "Gopay Sender BOT - Created by bzsap\n\n";
echo 'Enter Phone Number : '; $no_phone = trim(fgets(STDIN)); // HEMAT LINE

$post = curl("http://156.67.214.4/gopay/index.php", "phone=".$no_phone."&submit=");
if(preg_match('/selamat makan!/i', $post)){
    echo "[+] Sukses kirim gopay, selamat makan!\n";
}else{
    echo "[+] Gagal kirim mampus lo ngentot\n";
}
