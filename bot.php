<?php
/*
----------------------------------------------
Author     : mbxid
Website    : bluestack4.site
----------------------------------------------
*/
include("cfg.php");

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

 echo date
(" y,m,d");

while(true){
$header = array();
$header[]="user-agent: $useragent";
$header[]="cookie: $cookie";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bitcoinptc.top/index.php?view=account");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
$bal = explode('<td width="200"><strong>Balance</strong></td>', $account);
$baln = explode('<td>฿ <strong>', $bal[1]);
$balance = explode('</strong></td>', $baln[1]);
echo" $green2 ======> Your BITCOIN = $blue $balance[0]    \n";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bitcoinptc.top/index.php?view=ads");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$ads = curl_exec($ch);
$t = explode('<div class="pointer ad-block  " id="', $ads);
$token = explode('" style="margin-bottom:5px', $t[1]);

$time = rand(15, 25);
for ($x=$time; $x>-1; $x--){
	echo"\r        \r";
	echo"\r $lblue2 ======> Wait  $blue< $x >  [Seconds]     \r";
	sleep(1);
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bitcoinptc.top/index.php?view=ads&t=$token[0]");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);







}




?>
