<?php 
          
// Login 
// Warna
$biru="\033[1;34m";
$kuning="\033[1;33m";
$putih="\033[1;37m";
echo "\033[1;33m ";
$banner = "\033[0;36m
$banner<================================================>                                                                                                                                                                                                                                           
  _ __   __ _  ___ _ __ ___   __ _ _ __  
 | '_ \ / _` |/ __| '_ ` _ \ / _` | '_ \ 
 | |_) | (_| | (__| | | | | | (_| | | | |
 | .__/ \__,_|\___|_| |_| |_|\__,_|_| |_|
 |_|                                     
$banner<================================================>
[1] 'SELAMAT  DATANG 
$banner<================================================>
";    
sleep(2);
echo $banner. "\n";  




echo "\033[1;32m [ User/.Id ]👉";
$uid 	= trim(fgets(STDIN));
echo "\033[1;33m [  Nama kamu ]👉";
$n 	= trim(fgets(STDIN));
echo "\033[0;36m [ Jumlah Suntik ]👉";
$jumlah	= trim(fgets(STDIN));
echo "\033[1;33m [ SetSleep ]👉 ";
$wait	= trim(fgets(STDIN));
    $i=0;
while($i<$jumlah){
			sleep($wait);
			$i++;
			flush();
	
	$news		=	news($uid,$n);
		$video		=	video($uid,$n);
		$share		=	share($uid,$n);
		$code		=	code($uid,$n);
		$klik		=	klik($uid,$n);
	echo "TASK NEWS  $news\n";
	echo "TASK VIDEO $video\n";
	echo "TASK SHARE $share\n";
	echo "TASK CODE  $code\n";
	echo "TASK KLIK  $klik\n";
	
     }

function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, ".https://ai.caping.co.id/v2/user/login/visitor"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = "Cookie:u=;74558262;n=/000000006168fd3a12eec9c012eec9c0";
				$headers[] = ".Mozilla/5.0 (Linux; Android 10; vivo 1919 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.127 Mobile Safari/537.36;CapingNews/5.3.4";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/Video/addBrowseCount"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = " Cookie: u=74558262;n=000000006168fd3a12eec9c012eec9c0";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 10; vivo 1919 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.127 Mobile Safari/537.36;CapingNews/5.3.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/news/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/code"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cooki:u=74558262;n=000000006168fd3a12eec9c012eec9c0";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 10; vivo 1919 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.127 Mobile Safari/537.36;CapingNews/5.3.4
";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, ".https://ai.caping.co.id/v2/event/report"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = "Cookie:u=uid;74558262;n=n000000006168fd3a12eec9c012eec9c0 ";
					$headers[] = ". Mozilla/5.0 (Linux; Android 10; vivo 1919 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.127 Mobile Safari/537.36;CapingNews/5.3.4  ";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
	
?>
